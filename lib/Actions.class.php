<?php

class Actions extends sfActions
{
    protected $pdo = null;
    
    public function preExecute()
    {
        $this->createDbConnection();
        $this->pdo->exec("SET CHARACTER SET utf8;");
    }
    
    public function postExecute()
    {
        $this->pdo = null;
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
		$habraalgo="SELECT * FROM `{$nombretabla}` WHERE `id_user`={$idUser} AND `id_encuestado`={$this->idEncuestado} AND `concensoMode`={$this->concensoMode} LIMIT 1";
		$result = mysql_query($habraalgo);
		$rows=mysql_num_rows($result);
		$sqlGuardar=null;
                
		if ($rows > 0)
		{
                        $sqlGuardar="";
			foreach ($arrayRespuestas as $idelement => $value) {
                          if (!in_array($idelement, $elementosAIgnorar)) {
				$sqlGuardar=$sqlGuardar."UPDATE {$nombretabla} SET `respuesta` = '".mysql_real_escape_string($value)."' WHERE `{$nombretabla}`.`id_respuesta` = '".mysql_real_escape_string($idelement)."' AND `{$nombretabla}`.`id_user` =".(int)mysql_real_escape_string($idUser)." AND `{$nombretabla}`.`id_encuestado` =".(int)mysql_real_escape_string($this->idEncuestado)." AND `{$nombretabla}`.`concensoMode` =".(int)mysql_real_escape_string($this->concensoMode)." LIMIT 1;";
                                 
                          }
                        }
                        mysql_query($sqlGuardar); 
                        echo $sqlGuardar; 
		}
		else
		{
                    $sqlGuardar="";
			foreach ($arrayRespuestas as $idelement => $value) {
                          if (!in_array($idelement, $elementosAIgnorar)) {
			   $sqlGuardar=$sqlGuardar."INSERT INTO {$nombretabla} (id_respuesta ,respuesta,id_user,id_encuestado,concensoMode) VALUES (
				'".mysql_real_escape_string($idelement)."', 
				'".mysql_real_escape_string($value)."', 
				'".mysql_real_escape_string($idUser)."', 
				'".mysql_real_escape_string($this->idEncuestado)."', 
				'".mysql_real_escape_string($this->concensoMode)."' );"; 
				
				
                          }
                        }
                        mysql_query($sqlGuardar);
                        echo $sqlGuardar;
		}
		
		/*retorna true si todo OK*/
		return true; //puro chamullo, hay que buscar en la doc de php.net y ver si yo esoy casi seguro que el mysql_query retorna un estado parece, ese hay que usar para retornaar true o false aqui
	}

	/**
	* Retorna todas las respuestas de un usuario en formato json para que sean
        * parseadas en JS con JQuery y recrear el formulario que estaba guardado
	* 
	* $concensoMode =1 Si se esta guardando en modo consenso , 0 en caso contrario
	* @return string Retorna un String que representa la cadena en formato JSON A parsear
	*/
	public function preparaMostrarFormulario(sfWebRequest $request,$nombretabla,$concensoMode=0)
	{
		$this->BD_Conectar();
		$idUser=$this->getUser()->getGuardUser()->getId();
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
                return json_encode($results);

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
	* Retorna todas las respuestas de un usuario en formato json para que sean
        * parseadas en JS con JQuery y recrear el formulario que estaba guardado
	* 
	* $concensoMode =1 Si se esta guardando en modo consenso , 0 en caso contrario
	* @return string Retorna un String que representa la cadena en formato JSON A parsear
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
public function getPorcentajeCompletadoCICUM($idUser,$idEncuestado){
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

}
