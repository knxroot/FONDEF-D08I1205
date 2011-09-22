<?php

class Actions extends sfActions
{
    protected $pdo = null;
    
    public function preExecute()
    {
        $this->createDbConnection();
        $this->pdo->exec("SET CHARACTER SET utf8;");
        set_time_limit(90);
    }
    
    public function postExecute()
    {
        $this->pdo = null;
        $this->BD_Conectar();

        if(trim(sfConfig::get('sf_app'))=='frontend'){
          if(isset($this->idEncuestado)){
            if(!$this->esEncuestadoAccesible($this->getRequest())){
              $this->redirect('principal/home');
            }
          }
        }
    }
    
    protected function createDbConnection()
    {
        
        $dbhost = sfConfig::get('app_database_db_host');
        $dbname = sfConfig::get('app_database_db_name');
        $dbuser = sfConfig::get('app_database_db_user');
        $dbpass = sfConfig::get('app_database_db_pass');
        
        $dsn = sprintf('mysql:dbname=%s;host=%s', $dbname, $dbhost);

        try {
            $this->pdo = new PDO($dsn, $dbuser, $dbpass);
        } 
        catch (PDOException $e) {
            echo "Error al conectar a la DB: ".$e->getMessage();
        }         
    }
    
    protected function loadItems($path)
    {
        return sfYaml::load($path);
    }
    
     public function getTimeStart()
	{
        $tiemposerver="SELECT TIME(NOW());";
		$tiempo = mysql_query($tiemposerver);
                
$tiempo=mysql_fetch_array($tiempo);
         return $tiempo[0];
        }
    
    public function GuardarTiempo(sfWebRequest $request,$nombremodulo)
	{
        $this->BD_Conectar();
		
		$idUser=$this->getUser()->getGuardUser()->getId();
                // $request->$request->getPostParameters();
		$this->idEncuestado=$request->getParameter('idEncuestado');
		$this->forward404If(!$this->idEncuestado);
                $habraalgo="SELECT * FROM `tiempo` WHERE `id_user`={$idUser} AND `id_encuestado`={$this->idEncuestado} AND `nombre_modulo`='{$nombremodulo}' LIMIT 1";
		
                $result = mysql_query($habraalgo);
		$rows=mysql_num_rows($result);
		//$sqlGuardar=null;
                $tstart=$request->getParameter('tstart');
          
      
                
                if ($rows > 0)
		{
                  if(trim($tstart)!=''){
                    $tanteriorconsulta="SELECT tiempo FROM `tiempo` WHERE `id_user`={$idUser} AND `id_encuestado`={$this->idEncuestado} AND `nombre_modulo`='{$nombremodulo}' LIMIT 1";

                    $tanterior = mysql_query($tanteriorconsulta);    			
                    $tanterior=mysql_fetch_array($tanterior);            

                    $sqlGuardar2="UPDATE `tiempo` SET `tiempo` =  ADDTIME('{$tanterior[0]}',TIMEDIFF(TIME(NOW()),'{$tstart}')) 
                                WHERE 
                                     `tiempo`.`nombre_modulo` = '{$nombremodulo}' AND 
                                     `tiempo`.`id_user` = '{$idUser}' AND
                                     `tiempo`.`id_encuestado` = '{$this->idEncuestado}'  LIMIT 1;";

                     mysql_query($sqlGuardar2);   
                    // echo       $sqlGuardar2;
                  }  
		}
		else
		{   
                  if(trim($tstart)!=''){                    
			   $sqlGuardar="INSERT INTO `tiempo` (tiempo ,nombre_modulo,id_user,id_encuestado) VALUES (
				TIMEDIFF(TIME(NOW()),'{$tstart}'), 
				'{$nombremodulo}', 
				'{$idUser}', 
				'{$this->idEncuestado}' );"; 
				
				
                          
                           mysql_query($sqlGuardar);
                       
                    //   echo $sqlGuardar;
                   }  
                    
		}
    }

    /* 
     * Para poder mostrar en el dashboard la columna que le permite al
     * encuestador principal responder las preguntas del modo censenso se debe
     * cumplir que tanto el evaluador secundario como el primario hayan
     * respondido y cerrado el correspondiente instrumento de juicio
     * profesional.
     */

	public function contarTotalCierresInstrumento(sfWebRequest $request, $nombretabla)
	{
		$this->BD_Conectar();
		
		$idUser=$this->getUser()->getGuardUser()->getId();
                // $request->$request->getPostParameters();
		$this->idEncuestado=$request->getParameter('idEncuestado');
		$this->forward404If(!$this->idEncuestado);
		
                $ids_users_sql="SELECT `id_user_responsable_principal`,`select_user_responsable_secundario1` FROM `encuestado` WHERE `id_encuestado`='{$this->idEncuestado}' LIMIT 1";

		$ids_users = mysql_query($ids_users_sql);
                $ids_users=mysql_fetch_array($ids_users);
                $id_user_principal=$ids_users[0];
                $id_user_secundario=$ids_users[1];
      
                $q1="SELECT * FROM `{$nombretabla}` WHERE (`id_user`={$id_user_principal} OR `id_user`={$id_user_secundario})AND `id_encuestado`={$this->idEncuestado} AND `concensoMode`=0 AND `id_respuesta`='CLOSE_FLAG' AND `respuesta`='CERRADO';";
		$result = mysql_query($q1);
		$rows1=mysql_num_rows($result);  
                
          return $rows1;
        }
    
	//  PARTE DE sfSuperControlador
	
	/**
	* Guarda todos las variables del array asociativo $request una tabla especifica de la BD
	* como parte de cada registro se agrega si esta consulta se hizo en modo pareado,
	* pareado se refiere a que la respuesta fue generada por dos personas sin emabrgo se identificaron como un idUser
	* por lo tanto luego se puede consultar cual era el co-evaluador asociado al encuestado y hacer los calculos
	*  mmm... ni yo me entiendo mucho que digamos, pero bueno..
	* 
	* $concensoMode =1 Si se esta guardando en modo consenso , 0 en caso contrario
	* @return boolean $saveState 'retorna un bool que dice si se guardo o no esta cosa'
	*/

	public function GuardarInstrumento(sfWebRequest $request,$nombretabla,$concensoMode=0)
	{
		$this->BD_Conectar();
		
		$idUser=$this->getUser()->getGuardUser()->getId();
                // $request->$request->getPostParameters();
		$this->idEncuestado=$request->getParameter('idEncuestado');
		$this->forward404If(!$this->idEncuestado);
		$this->concensoMode=$concensoMode;
		$arrayRespuestas=$request->getParameterHolder()->getAll();
		$elementosAIgnorar=sfConfig::get('app_supercontrolador_blacklist_'.$this->moduleName);
		$habraalgo="SELECT * FROM `{$nombretabla}` WHERE `id_user`={$idUser} AND `id_encuestado`={$this->idEncuestado} AND `concensoMode`='{$this->concensoMode}' LIMIT 1";
		$result = mysql_query($habraalgo);
		$rows=mysql_num_rows($result);
		$sqlGuardar=null;
                
		if ($rows > 0)
		{
      set_time_limit(90);
                        $sqlGuardar="";
			foreach ($arrayRespuestas as $idelement => $value) {
        if (!in_array($idelement, $elementosAIgnorar)) {
          mysql_unbuffered_query("UPDATE {$nombretabla} SET `respuesta` = '".mysql_real_escape_string($value)."' WHERE `{$nombretabla}`.`id_respuesta` = '".mysql_real_escape_string($idelement)."' AND `{$nombretabla}`.`id_user` =".(int)mysql_real_escape_string($idUser)." AND `{$nombretabla}`.`id_encuestado` =".(int)mysql_real_escape_string($this->idEncuestado)." AND `{$nombretabla}`.`concensoMode` ='".(int)mysql_real_escape_string($this->concensoMode)."' LIMIT 1");
        }
      }
                
		}
		else
		{set_time_limit(90);
                    
                    //print_r($arrayRespuestas);
			foreach ($arrayRespuestas as $idelement => $value) {
        
                            $sqlGuardar="";
                          if (!in_array($idelement, $elementosAIgnorar)) {
			   $sqlGuardar="INSERT INTO {$nombretabla} (id_respuesta ,respuesta,id_user,id_encuestado,concensoMode) VALUES (
				'".mysql_real_escape_string($idelement)."', 
				'".mysql_real_escape_string($value)."', 
				'".mysql_real_escape_string($idUser)."', 
				'".mysql_real_escape_string($this->idEncuestado)."', 
				'".mysql_real_escape_string($this->concensoMode)."' );"; 
				
			  
                          }
                           //echo $sqlGuardar;
                           mysql_query($sqlGuardar);
                        }
                       
                    
		}
		
		/*retorna true si todo OK*/
		return true; //puro chamullo, hay que buscar en la doc de php.net y ver si yo esoy casi seguro que el mysql_query retorna un estado parece, ese hay que usar para retornaar true o false aqui
	}

	public function generarListaBloqueadosCruce($idEncuestado,$nombretabla, $iduser1,$iduser2){
            
	$this->BD_Conectar();
        $elementosAIgnorar=sfConfig::get('app_supercontrolador_blacklist_'.$this->moduleName);
                
		$habraalgo_u1="SELECT id_respuesta,respuesta FROM `{$nombretabla}` WHERE `id_user`={$iduser1} AND `id_encuestado`={$idEncuestado} AND `concensoMode`=0";
		$habraalgo_u2="SELECT id_respuesta,respuesta FROM `{$nombretabla}` WHERE `id_user`={$iduser2} AND `id_encuestado`={$idEncuestado} AND `concensoMode`=0";

		$rows1 = mysql_query($habraalgo_u1);
        $results1 = array();
        while($row = mysql_fetch_array($rows1)){
          if (!in_array($row['id_respuesta'], $elementosAIgnorar)) {
            $results1[$row['id_respuesta']] = $row['respuesta'];
          }
        }
		
		$rows2 = mysql_query($habraalgo_u2);
        $results2 = array();
        while($row = mysql_fetch_array($rows2)){
          if (!in_array($row['id_respuesta'], $elementosAIgnorar)) {
            $results2[$row['id_respuesta']] = $row['respuesta'];
          }
        }		
	 //print_r($results1);
         //echo "<br><br>**************************";
         //print_r($results2);
         //echo "<br><br>**************************";
	  $result_array = array_intersect_assoc($results1, $results2);
          //print_r($result_array);
          /*for($i=0;$i<1000;$i++){
              echo "prometo no trabajar nunca más con psicólogos<br>";
          }*/
          
          return $result_array;
	}
        
	/**
	* Retorna todas las respuestas de un usuario en formato json para que sean
        * parseadas en JS con JQuery y recrear el formulario que estaba guardado
	* 
	* $concensoMode =1 Si se esta guardando en modo consenso , 0 en caso contrario
	* @return string Retorna un String que representa la cadena en formato JSON A parsear
	*/
	public function preparaMostrarFormulario(sfWebRequest $request,$nombretabla,$concensoMode=0,$nojson=false, $usuario=0)
	{
		$this->BD_Conectar();
                $idUser=$this->getUser()->getGuardUser()->getId();
                if($usuario!=0){
                    $idUser=$usuario;
                }
		
		$this->idEncuestado=$request->getParameter('idEncuestado');
		$this->forward404If(!$this->idEncuestado);
		$this->concensoMode=$concensoMode;
		

                $elementosAIgnorar=sfConfig::get('app_supercontrolador_blacklist_'.$this->moduleName);
                
		$habraalgo="SELECT id_respuesta,respuesta FROM `{$nombretabla}` WHERE `id_user`={$idUser} AND `id_encuestado`={$this->idEncuestado} AND `concensoMode`={$this->concensoMode}";
		$rows = mysql_query($habraalgo);
        
                $results = array();    
                while($row = mysql_fetch_array($rows))
                {
                  if (!in_array($row['id_respuesta'], $elementosAIgnorar)) {
                      $results[$row['id_respuesta']] = $row['respuesta'];
                    }
                }
                if($nojson){
                    return $results;
                }else{
                    return json_encode($results);
                }
	}
        //  cierra sfSuperControlador
        
	 /**
	 * Retorna true en caso de que sea un encuestado accesible, false si
         * no es un encuestado al que se pueda o deba acceder.
	 * @return string Retorna un Int que representa si o no
	 */
	public function esEncuestadoAccesibleAutoreporte(sfWebRequest $request)
	{
            $this->BD_Conectar();
            $idUser=$this->getUser()->getGuardUser()->getId();
            $this->idEncuestado=$request->getParameter('idEncuestado');
            $this->forward404If(!$this->idEncuestado);
            $habraalgo="SELECT *
             FROM `encuestado`
             WHERE `id_encuestado` ={$this->idEncuestado}
                 AND 
                   `id_user_responsable_principal` ={$idUser}
             LIMIT 1";
            $result = mysql_query($habraalgo);
            $rows=mysql_num_rows($result);

            if ($rows > 0)
            {
                return 1;
            }
            else{
                 return 0;
            }

	} 
        
	 /**
	 * Retorna true en caso de que el usuario actual(el que esta usando el sistema)
	 * sea un evaluador secundario para el encuestado con idEcuestado
	 *
	 * @return string Retorna un Int que representa si o no
	 */
	public function soyResponsableSecundario(sfWebRequest $request)
	{
            $this->BD_Conectar();
            $idUser=$this->getUser()->getGuardUser()->getId();
            $this->idEncuestado=$request->getParameter('idEncuestado');
            $this->forward404If(!$this->idEncuestado);
            $habraalgo="SELECT *
             FROM `encuestado`
             WHERE `id_encuestado` ={$this->idEncuestado}
                 AND 
                   `select_user_responsable_secundario1` ={$idUser}
             LIMIT 1";
            $result = mysql_query($habraalgo);
            $rows=mysql_num_rows($result);

            if ($rows > 0)
            {
                return 1;
            }
            else{
                 return 0;
            }

	}




  	 /**
	 * Retorna true en caso de que el usuario actual(el que esta usando el sistema)
	 * sea un evaluador secundario para el encuestado con idEcuestado
	 *
	 * @return string Retorna un Int que representa si o no
	 */
	public function soyResponsableSecundario_appsupervisor(sfWebRequest $request,$idUser)
	{
            $this->BD_Conectar();
           // $idUser=$this->getUser()->getGuardUser()->getId();
            $this->idEncuestado=$request->getParameter('idEncuestado');
            $this->forward404If(!$this->idEncuestado);
            $habraalgo="SELECT *
             FROM `encuestado`
             WHERE `id_encuestado` ={$this->idEncuestado}
                 AND
                   `select_user_responsable_secundario1` ={$idUser}
             LIMIT 1";
            $result = mysql_query($habraalgo);
            $rows=mysql_num_rows($result);

            if ($rows > 0)
            {
                return 1;
            }
            else{
                 return 0;
            }

	}



	 /**
	 * Obtiene el id del reponsable secundario
	 * @return number Retorna un Int que representa el id del responsable secundario
	 */
	public function getIDResponsableSecundario($idEncuestado)
	{
            $this->BD_Conectar();
			
            $habraalgo="SELECT select_user_responsable_secundario1  FROM `encuestado`
             WHERE `id_encuestado` ={$idEncuestado} LIMIT 1";
            $result = mysql_query($habraalgo);
            $result = mysql_fetch_array($result);
            return $result[0];
	}
        
	/**
	* Retorna 0 o 1 dependiendo si la tabla esta cerrada para dicho user y dicho idencuestado
        * funciona para todos los que usan el supercontrolador
        * 
	*/
	public function esCerrado(sfWebRequest $request,$nombretabla)
	{
            $this->BD_Conectar();
            $idUser=$this->getUser()->getGuardUser()->getId();
            $this->idEncuestado=$request->getParameter('idEncuestado');
            $this->forward404If(!$this->idEncuestado);

            $habraalgo="SELECT * FROM `{$nombretabla}` WHERE `id_user`={$idUser} AND `id_encuestado`={$this->idEncuestado} AND `id_respuesta`='CLOSE_FLAG' AND `respuesta`='CERRADO'";
            $result = mysql_query($habraalgo);
            $rows=mysql_num_rows($result);

            if ($rows > 0)
            {
                return 1;
            }
            else{
                 return 0;
            }
	}        
        
	/**
	* Retorna 0 o 1 dependiendo si la tabla esta cerrada para dicho user y dicho idencuestado
        * funciona para todos los que usan el supercontrolador
        * ARREGLO ESPECIAL PARA LOS DE JUICIO PROFESIONAL
	*/
	public function esCerrado2(sfWebRequest $request,$nombretabla,$consensoMode)
	{
            $this->BD_Conectar();
            $idUser=$this->getUser()->getGuardUser()->getId();
            $this->idEncuestado=$request->getParameter('idEncuestado');
            $this->forward404If(!$this->idEncuestado);

            $habraalgo="SELECT * FROM `{$nombretabla}` WHERE `id_user`={$idUser} AND `id_encuestado`={$this->idEncuestado} AND `id_respuesta`='CLOSE_FLAG' AND `respuesta`='CERRADO' AND `concensoMode`={$consensoMode}";
            //ECHO $habraalgo;
            $result = mysql_query($habraalgo);
            $rows=mysql_num_rows($result);

            if ($rows > 0)
            {
                return 1;
            }
            else{
                 return 0;
            }
	}   




  	/**
	* Retorna 0 o 1 dependiendo si la tabla esta cerrada para dicho user y dicho idencuestado
        * funciona para todos los que usan el supercontrolador
        *
	*/
	public function esCerrado_appsupervisor(sfWebRequest $request,$nombretabla,$idUser)
	{
            $this->BD_Conectar();
            $this->idEncuestado=$request->getParameter('idEncuestado');
            $this->forward404If(!$this->idEncuestado);

            $habraalgo="SELECT * FROM `{$nombretabla}` WHERE `id_user`={$idUser} AND `id_encuestado`={$this->idEncuestado} AND `id_respuesta`='CLOSE_FLAG' AND `respuesta`='CERRADO'";
            $result = mysql_query($habraalgo);
            $rows=mysql_num_rows($result);

            if ($rows > 0)
            {
                return 1;
            }
            else{
                 return 0;
            }
	}

	/**
	* Retorna 0 o 1 dependiendo si la tabla esta cerrada para dicho user y dicho idencuestado
        * funciona para todos los que usan el supercontrolador
        * ARREGLO ESPECIAL PARA LOS DE JUICIO PROFESIONAL
	*/
	public function esCerrado2_appsupervisor(sfWebRequest $request,$nombretabla,$consensoMode,$idUser)
	{
            $this->BD_Conectar();
           // $idUser=$this->getUser()->getGuardUser()->getId();
            $this->idEncuestado=$request->getParameter('idEncuestado');
            $this->forward404If(!$this->idEncuestado);

            $habraalgo="SELECT * FROM `{$nombretabla}` WHERE `id_user`={$idUser} AND `id_encuestado`={$this->idEncuestado} AND `id_respuesta`='CLOSE_FLAG' AND `respuesta`='CERRADO' AND `concensoMode`={$consensoMode}";
            //ECHO $habraalgo;
            $result = mysql_query($habraalgo);
            $rows=mysql_num_rows($result);

            if ($rows > 0)
            {
                return 1;
            }
            else{
                 return 0;
            }
	}


    public  function BD_Conectar(){
      $Error_mysql_connect=false;
      $Error_mysql_select_db=false;

      $dbhost = sfConfig::get('app_database_db_host');
      $dbname = sfConfig::get('app_database_db_name');
      $dbuser = sfConfig::get('app_database_db_user');
      $dbpass = sfConfig::get('app_database_db_pass');

      $coneccion = @mysql_connect($dbhost, $dbuser, $dbpass);
      mysql_query ("SET NAMES 'utf8'");
      if(!$coneccion)
       $Error_mysql_connect = true;

      $bd = @mysql_select_db($dbname) ;
      if(!$bd)
       $Error_mysql_select_db = true;

      if($Error_mysql_connect || $Error_mysql_select_db )
       return  false;
      else
       return true;
     }
     
     
     /* PORCENTAJES DE COMPLETAODS DE FORMA GLOBAL*/
     
    /**
     * Dado un usuario y un encuestado retorna el porcentaje de completado del
     * formulario IRNC para dicho encuestado.
     *
     * @param integer $id_user id del usuario que esta completo la encuesta en la red
     * @param integer $id_encuestado id del encuestado (adolecente infractor de ley)
     */
    public function getPorcentajeCompletadoIRNC($idUser,$idEncuestado){
      $this->BD_Conectar();
      /* en el procentaje de avance en este caso no se toma en cuenta las preguntas
       *  con checkbox, solo se consideran los radiobox porque sino no se podria
       * calcular
       */
      $SQL_CONSULTA_PORCENTAJE="SELECT ROUND( count( * ) *100 / (
                                  SELECT count( * )
                                  FROM `IRNC_preguntas` as irp WHERE irp.bloque_num < 9 )) AS porcCompletado
                                FROM `IRNC_respuestas`
                                WHERE id_user = '{$idUser}'
                                AND id_encuestado = '{$idEncuestado}'
                                AND id_pregunta_IRNC < 43
                                LIMIT 0 , 30";

    //echo $SQL_CONSULTA_PORCENTAJE;

      $porcCompletado = mysql_query($SQL_CONSULTA_PORCENTAJE);
      $porcCompletado = mysql_fetch_array($porcCompletado);
      return $porcCompletado[0];
    }


/**
 * Dado un usuario y un encuestado retorna el porcentaje de completado del
 * formulario MACI para dicho encuestado.
 *
 * @param integer $id_user id del usuario que esta completo la encuesta en la red
 * @param integer $id_encuestado id del encuestado (adolecente infractor de ley)
 */
public function getPorcentajeCompletadoMACI($idUser,$idEncuestado){
  $this->BD_Conectar();
  $SQL_CONSULTA_PORCENTAJE="SELECT ROUND( count( * ) *100 / (
                              SELECT count( * )
                              FROM `maci_preguntas` )) AS porcCompletado
                            FROM `maci_respuestas`
                            WHERE id_user = '{$idUser}'
                            AND id_encuestado = '{$idEncuestado}'
                            LIMIT 0 , 30";
  $porcCompletado = mysql_query($SQL_CONSULTA_PORCENTAJE);
  $porcCompletado = mysql_fetch_array($porcCompletado);
  return $porcCompletado[0];
}

/**
 * Dado un usuario y un encuestado retorna el porcentaje de completado del
 * formulario CAIE para dicho encuestado.
 *
 * @param integer $id_user id del usuario que esta completo la encuesta en la red
 * @param integer $id_encuestado id del encuestado (adolecente infractor de ley)
 */
public function getPorcentajeCompletadoCICUM1($idUser,$idEncuestado){
  $this->BD_Conectar();
  $SQL_CONSULTA_PORCENTAJE="SELECT ROUND( count( * ) *100 / (
                              SELECT count( * )
                              FROM `CAIE_preguntas` )) AS porcCompletado
                            FROM `CAIE_respuestas`
                            WHERE id_user = '{$idUser}'
                            AND id_encuestado = '{$idEncuestado}'
                            LIMIT 0 , 30";
  $porcCompletado = mysql_query($SQL_CONSULTA_PORCENTAJE);
  $porcCompletado = mysql_fetch_array($porcCompletado);
  return $porcCompletado[0];
}
public function getPorcentajeCompletadoCICUM2($idUser,$idEncuestado){
  $this->BD_Conectar();
  $SQL_CONSULTA_PORCENTAJE="SELECT ROUND( count( * ) *100 / (
                              SELECT count( * )
                              FROM `CAIE2_preguntas` )) AS porcCompletado
                            FROM `CAIE2_respuestas`
                            WHERE id_user = '{$idUser}'
                            AND id_encuestado = '{$idEncuestado}'
                            LIMIT 0 , 30";
  $porcCompletado = mysql_query($SQL_CONSULTA_PORCENTAJE);
  $porcCompletado = mysql_fetch_array($porcCompletado);
  return $porcCompletado[0];
}


public function getPorcentajeCompletadoCICUM($idUser,$idEncuestado){
  return ($this->getPorcentajeCompletadoCICUM1($idUser,$idEncuestado)+$this->getPorcentajeCompletadoCICUM2($idUser,$idEncuestado))/2;
}


    public function getPorcentajeCompletadoENTREVISTA($idUser,$idEncuestado){
        $this->BD_Conectar();
        $habraalgo="SELECT * FROM entrevista_respuestas WHERE `id_user`={$idUser} AND `id_encuestado`={$idEncuestado} AND `id_respuesta`='CLOSE_FLAG' AND `respuesta`='CERRADO'";
        $result = mysql_query($habraalgo);
        $rows=mysql_num_rows($result);

        if ($rows > 0)
        {
            return 100;
        }
        else{
             return 0;
        } 
    }

/**
 * Dado un usuario y un encuestado retorna el porcentaje de completado del
 * formulario EGED para dicho encuestado.
 *
 * @param integer $id_user id del usuario que esta completo la encuesta en la red
 * @param integer $id_encuestado id del encuestado (adolecente infractor de ley)
 */
public function getPorcentajeCompletadoEGED($idUser,$idEncuestado){
  $this->BD_Conectar();
  $SQL_CONSULTA_PORCENTAJE="SELECT ROUND( count( * ) *100 / (
                              SELECT count( * )
                              FROM `EGED_preguntas` )) AS porcCompletado
                            FROM `EGED_respuestas`
                            WHERE id_user = '{$idUser}'
                            AND id_encuestado = '{$idEncuestado}'
                            LIMIT 0 , 30";
  $porcCompletado = mysql_query($SQL_CONSULTA_PORCENTAJE);
  $porcCompletado = mysql_fetch_array($porcCompletado);
  return $porcCompletado[0];
} 
    
/**
 * Dado un usuario y un encuestado retorna el porcentaje de completado del
 * formulario CACSA para dicho encuestado.
 *
 * @param integer $id_user id del usuario que esta completo la encuesta en la red
 * @param integer $id_encuestado id del encuestado (adolecente infractor de ley)
 */
public function getPorcentajeCompletadoPart1CACSA($idUser,$idEncuestado){
  $this->BD_Conectar();
  $SQL_CONSULTA_PORCENTAJE="SELECT ROUND( count( * ) *100 / (
                              SELECT count( * )
                              FROM `CACSA2_preguntas` )) AS porcCompletado
                            FROM `CACSA2_respuestas`
                            WHERE id_user = '{$idUser}'
                            AND id_encuestado = '{$idEncuestado}'
                            LIMIT 0 , 30";
  $porcCompletado = mysql_query($SQL_CONSULTA_PORCENTAJE);
  $porcCompletado = mysql_fetch_array($porcCompletado);
  return $porcCompletado[0];
}

public function getPorcentajeCompletadoPart2CACSA($idUser,$idEncuestado){
  $this->BD_Conectar();
  $SQL_CONSULTA_PORCENTAJE="SELECT ROUND( count( * ) *100 / (
                              SELECT count( * )
                              FROM `CACSA3_preguntas` )) AS porcCompletado
                            FROM `CACSA3_respuestas`
                            WHERE id_user = '{$idUser}'
                            AND id_encuestado = '{$idEncuestado}'
                            LIMIT 0 , 30";
  $porcCompletado = mysql_query($SQL_CONSULTA_PORCENTAJE);
  $porcCompletado = mysql_fetch_array($porcCompletado);
  return $porcCompletado[0];
}

public function getPorcentajeCompletadoCACSA($idUser,$idEncuestado){
  return ($this->getPorcentajeCompletadoPart1CACSA($idUser,$idEncuestado)+$this->getPorcentajeCompletadoPart2CACSA($idUser,$idEncuestado))/2;
}

/**
 * Dado un usuario y un encuestado retorna el porcentaje de completado del
 * formulario SQIFA para dicho encuestado.
 *
 * @param integer $id_user id del usuario que esta completo la encuesta en la red
 * @param integer $id_encuestado id del encuestado (adolecente infractor de ley)
 */
public function getPorcentajeCompletadoSQIFA($idUser,$idEncuestado){
  $this->BD_Conectar();
  $SQL_CONSULTA_PORCENTAJE="SELECT ROUND( count( * ) *100 / (
                              SELECT count( * )
                              FROM `SQIFA_preguntas` )) AS porcCompletado
                            FROM `SQIFA_respuestas`
                            WHERE id_user = '{$idUser}'
                            AND id_encuestado = '{$idEncuestado}'
                            LIMIT 0 , 30";
  $porcCompletado = mysql_query($SQL_CONSULTA_PORCENTAJE);
  $porcCompletado = mysql_fetch_array($porcCompletado);
  return $porcCompletado[0];
}

/**
 * Dado un usuario y un encuestado retorna el porcentaje de completado del
 * formulario JIR para dicho encuestado.
 *
 * @param integer $id_user id del usuario que esta completo la encuesta en la red
 * @param integer $id_encuestado id del encuestado (adolecente infractor de ley)
 */
public function getPorcentajeCompletadoJIR($idUser,$idEncuestado){
  $this->BD_Conectar();
  $SQL_CONSULTA_PORCENTAJE="SELECT ROUND( count( * ) *100 / (
                              SELECT count( * )
                              FROM `JIR_preguntas` )) AS porcCompletado
                            FROM `JIR_respuestas`
                            WHERE id_user = '{$idUser}'
                            AND id_encuestado = '{$idEncuestado}'
                            LIMIT 0 , 30";
  $porcCompletado = mysql_query($SQL_CONSULTA_PORCENTAJE);
  $porcCompletado = mysql_fetch_array($porcCompletado);
  return $porcCompletado[0];
}

    public function getPorcentajeCompletadoCONCLUSIONES($idUser,$idEncuestado){
        $this->BD_Conectar();
        $habraalgo="SELECT * FROM conclusiones_respuestas WHERE `id_user`={$idUser} AND `id_encuestado`={$idEncuestado} AND `id_respuesta`='CLOSE_FLAG' AND `respuesta`='CERRADO'";
        $result = mysql_query($habraalgo);
        $rows=mysql_num_rows($result);

        if ($rows > 0)
        {
            return 100;
        }
        else{
             return 0;
        } 
    }
    
    /**
     * Dado un usuario y un encuestado retorna el porcentaje de completado del
     * formulario CSVE para dicho encuestado.
     *
     * @param integer $id_user id del usuario que esta completo la encuesta en la red
     * @param integer $id_encuestado id del encuestado (adolecente infractor de ley)
     */
    public function getPorcentajeCompletadoCSVE($idUser,$idEncuestado){
      $this->BD_Conectar();
      $SQL_CONSULTA_PORCENTAJE="SELECT ROUND( count( * ) *100 / (
                                  SELECT count( * )
                                  FROM `CSVE_preguntas` )) AS porcCompletado
                                FROM `CSVE_respuestas`
                                WHERE id_user = '{$idUser}'
                                AND id_encuestado = '{$idEncuestado}'
                                LIMIT 0 , 30";
      $porcCompletado = mysql_query($SQL_CONSULTA_PORCENTAJE);
      $porcCompletado = mysql_fetch_array($porcCompletado);
      return $porcCompletado[0];
    }


	 /**
	 * Retorna true en caso de que sea un encuestado accesible, false si
         * no es un encuestado al que se pueda o deba acceder.
	 * @return string Retorna un Int que representa si o no
	 */
	public function esEncuestadoAccesible(sfWebRequest $request)
	{
            $this->BD_Conectar();
            $idUser=$this->getUser()->getGuardUser()->getId();
            $this->idEncuestado=$request->getParameter('idEncuestado');

            $habraalgo="SELECT *
             FROM `encuestado`
             WHERE (`id_encuestado` ={$this->idEncuestado}
                 AND 
                   `id_user_responsable_principal` ={$idUser})
               OR (`id_encuestado` ={$this->idEncuestado}
                 AND 
                   `select_user_responsable_secundario1` ={$idUser})

             LIMIT 1";



            $result = mysql_query($habraalgo);
            $rows=mysql_num_rows($result);

            if ($rows > 0)
            {
                return 1;
            }
            else{
                 return 0;
            }

	}

}
