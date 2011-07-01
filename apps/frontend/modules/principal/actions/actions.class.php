<?php

class principalActions extends Actions
{
    public function executeIndex(sfWebRequest $request)
    {
    }

    public function executeDashboard(sfWebRequest $request)
    {
        $this->BD_Conectar(); 
        $idUser = $this->getUser()->getGuardUser()->getId();
        $this->idEncuestado = $request->getParameter('idEncuestado');

        // redireccionar si no se ha indicado encuestado
        $this->forward404If(!$this->idEncuestado);

        // obtener porcentajes completados
        $this->porcCompletadoMACI = $this->getPorcentajeCompletadoMACI($idUser,$this->idEncuestado);
        $this->porcCompletadoJIR  = $this->getPorcentajeCompletadoJIR($idUser,$this->idEncuestado);
        $this->porcCompletadoCAIE = $this->getPorcentajeCompletadoCAIE($idUser,$this->idEncuestado);

        $SQL_NOMBRES_RESPONSABLE_PRINCIPAL="SELECT `first_name` , `last_name`
            FROM `sf_guard_user`
            WHERE `id` = (
                SELECT `id_user_responsable_principal`
                FROM `encuestado`
                WHERE `encuestado`.`id_encuestado` ={$this->idEncuestado} 
            ) LIMIT 1";

        $r = mysql_fetch_array(mysql_query($SQL_NOMBRES_RESPONSABLE_PRINCIPAL));
        $this->responsable_principal=$r[0]." ".$r[1];


$SQL_NOMBRES_RESPONSABLE_SECUNDARIO="SELECT count(*),`first_name` , `last_name`
  FROM `sf_guard_user`
  WHERE `id` = (
    SELECT `id_user_responsable_secundario1`
    FROM `encuestado`
    WHERE `encuestado`.`id_encuestado` ={$this->idEncuestado} )
  LIMIT 1";
  $r = mysql_fetch_array(mysql_query($SQL_NOMBRES_RESPONSABLE_SECUNDARIO));
  if($r[0]>0){
  $this->responsable_secundario=$r[1]." ".$r[2];
  }else{$this->responsable_secundario="NO ASIGNADO";}

$SQL_CONSULTA_NOMBRE="SELECT `input_primer_nombre` , `input_otros_nombres` , `input_primer_apellido` , `input_segundo_apellido`
                            FROM `encuestado`
                            WHERE `id_encuestado` = '{$this->idEncuestado}'
                            LIMIT 1";
  $r = mysql_fetch_array(mysql_query($SQL_CONSULTA_NOMBRE));
  $this->nombreEncuestado=$r[0]." ".$r[1]." ".$r[2]." ".$r[3];

    if($this->BD_Conectar()) {
       return sfView::SUCCESS;
    }else{
       return sfView::ERROR;
    }  
  }


 /**
  * El home inicial que ve un encuestador al iniciar session action
  *
  * @param sfRequest $request A request object
  */
  public function executeHome(sfWebRequest $request)
  {
    $this->showtable=$request->getParameter('showtable');
    if($this->BD_Conectar()) {

    $sql_listar_encuestados="SELECT `id_encuestado` ,`input_run_nconverificador`, `input_primer_nombre` , `input_otros_nombres` , `input_primer_apellido` , `input_segundo_apellido` , `input_fnacimiento` , `created_at` , `updated_at` FROM `encuestado` WHERE `id_user_responsable_principal` = '{$this->getUser()->getGuardUser()->getId()}'";
    sfConfig::set('sf_escaping_strategy', false);
      $this->encuestados = mysql_query($sql_listar_encuestados);

 $sql_listar_coevaluados="SELECT `id_encuestado` ,`input_run_nconverificador`, `input_primer_nombre` , `input_otros_nombres` , `input_primer_apellido` , `input_segundo_apellido` , `input_fnacimiento` , `created_at` , `updated_at` FROM `encuestado` WHERE `select_user_responsable_secundario1` = '{$this->getUser()->getGuardUser()->getId()}'";
    sfConfig::set('sf_escaping_strategy', false);
      $this->coevaluados = mysql_query($sql_listar_coevaluados);
      
      
      
       return sfView::SUCCESS;
    }else{
       return sfView::ERROR;
    }
  }



  public function executeLlenar(sfWebRequest $request)
  {
    $this->forward('principal', 'index');

  }
public function executeConsultaRegiones(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
    $esAjax = $request->isXmlHttpRequest();/*true si es una peticion por ajax*/
    $this->forward404Unless($esAjax);/*lo envia a error 404 a menos que sea una peticion ajax*/
    //$this->getResponse()->setHttpHeader('Content-type','text/json');
      /*MysqlBD::BD_Conectar();CONECTO CON MI CLASE TEMPORAL PARA NO COMPLICARME CON ORM*/
      $this->BD_Conectar();

      $sql_obtieneRegiones = "SELECT `REGION_ID`,`REGION_NOMBRE` FROM `region`";
      $regiones = mysql_query($sql_obtieneRegiones);
      $respuesta="";
      while($region=mysql_fetch_array($regiones))
      {
        $respuesta=$respuesta."<option value='".$region["REGION_ID"]."'>".$region["REGION_NOMBRE"]."</option><br>";
      }
      return $this->renderText($respuesta);


  }

  public function executeConsultaProvincias(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
    $esAjax = $request->isXmlHttpRequest();/*true si es una peticion por ajax*/
    $this->forward404Unless($esAjax);/*lo envia a error 404 a menos que sea una peticion ajax*/
    //$this->getResponse()->setHttpHeader('Content-type','text/json');
    $this->regionSeleccionada = $request->getParameter('region');
      /*MysqlBD::BD_Conectar();CONECTO CON MI CLASE TEMPORAL PARA NO COMPLICARME CON ORM*/
      $this->BD_Conectar();
    $sql_obtieneProvincias = "SELECT `PROVINCIA_ID`,`PROVINCIA_NOMBRE` FROM `provincia` where `PROVINCIA_REGION_ID` like '$this->regionSeleccionada'";

    $provincias = mysql_query($sql_obtieneProvincias);
    $respuesta="";
    while($provincia=mysql_fetch_array($provincias))
    {
      $respuesta=$respuesta."<option value='".$provincia["PROVINCIA_ID"]."'>".$provincia["PROVINCIA_NOMBRE"]."</option><br>";
    }
    return $this->renderText($respuesta);
  }

  public function executeConsultaComunas(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
    $esAjax = $request->isXmlHttpRequest();/*true si es una peticion por ajax*/
    $this->forward404Unless($esAjax);/*lo envia a error 404 a menos que sea una peticion ajax*/
    //$this->getResponse()->setHttpHeader('Content-type','text/json');
    $this->provinciaSeleccionada = $request->getParameter('provincia');
      /*MysqlBD::BD_Conectar();CONECTO CON MI CLASE TEMPORAL PARA NO COMPLICARME CON ORM*/
      $this->BD_Conectar();
    $sql_obtieneComunas = "SELECT `COMUNA_ID` , `COMUNA_NOMBRE` FROM `comuna` WHERE `COMUNA_PROVINCIA_ID` LIKE '$this->provinciaSeleccionada'";

    $comunas = mysql_query($sql_obtieneComunas);
    $respuesta="";
    while($comuna=mysql_fetch_array($comunas))
    {
      $respuesta=$respuesta."<option value='".$comuna["COMUNA_ID"]."'>".$comuna["COMUNA_NOMBRE"]."</option><br>";
    }
    return $this->renderText($respuesta);
  }


public function executeConsultaMateriaDelito(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
    $esAjax = $request->isXmlHttpRequest();/*true si es una peticion por ajax*/
    $this->forward404Unless($esAjax);/*lo envia a error 404 a menos que sea una peticion ajax*/
    //$this->getResponse()->setHttpHeader('Content-type','text/json');
      /*MysqlBD::BD_Conectar();CONECTO CON MI CLASE TEMPORAL PARA NO COMPLICARME CON ORM*/
      $this->BD_Conectar();

      $sql_obtieneMateriasDelito = "SELECT
                                    c_ingreso_materia.id_materia,
                                    c_ingreso_materia.materia
                                  FROM
                                    c_ingreso_materia
                                  ORDER BY
                                    c_ingreso_materia.id_materia ASC";


      $materias = mysql_query($sql_obtieneMateriasDelito);
      $respuesta="";
      while($materia=mysql_fetch_array($materias))
      {
        $respuesta=$respuesta."<option value='".$materia["id_materia"]."'>".$materia["materia"]."</option><br>";
      }
      return $this->renderText($respuesta);
  }

  public function executeConsultaCoEvaluador(sfWebRequest $request)
 {
    //$this->forward('default', 'module');
    $esAjax = $request->isXmlHttpRequest();/*true si es una peticion por ajax*/
    $this->forward404Unless($esAjax);/*lo envia a error 404 a menos que sea una peticion ajax*/
    //$this->getResponse()->setHttpHeader('Content-type','text/json');
      /*MysqlBD::BD_Conectar();CONECTO CON MI CLASE TEMPORAL PARA NO COMPLICARME CON ORM*/
      $this->BD_Conectar();

      $sql_obtieneMateriasDelito = "SELECT
                                    sf_guard_user.id,
                                    sf_guard_user.last_name,
									sf_guard_user.first_name
                                  FROM
                                   sf_guard_user
                                  ORDER BY
                                    sf_guard_user.id ASC";


      $materias = mysql_query($sql_obtieneMateriasDelito);
      $respuesta="";
      while($materia=mysql_fetch_array($materias))
      {
        $respuesta=$respuesta."<option value='".$materia["id"]."'>".$materia["first_name"]." ".$materia["last_name"]."</option><br>";
      }
      return $this->renderText($respuesta);
  }


public function executeConsultaCausaDelito(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
    $esAjax = $request->isXmlHttpRequest();/*true si es una peticion por ajax*/
    $this->forward404Unless($esAjax);/*lo envia a error 404 a menos que sea una peticion ajax*/
    //$this->getResponse()->setHttpHeader('Content-type','text/json');
      /*MysqlBD::BD_Conectar();CONECTO CON MI CLASE TEMPORAL PARA NO COMPLICARME CON ORM*/
      $this->BD_Conectar();

      $sql_obtieneCausasDelitos = "SELECT
                                c_ingreso_causa.id_causa,
                                c_ingreso_causa.causa_nombre,
                                c_ingreso_causa.id_materia
                              FROM
                                c_ingreso_causa
                              INNER JOIN c_ingreso_materia ON c_ingreso_materia.id_materia = c_ingreso_causa.id_materia
                              WHERE
                                c_ingreso_causa.id_materia = '".$request->getParameter('materia')."'";
      

      $causas = mysql_query($sql_obtieneCausasDelitos);
      $respuesta="";
      while($causa=mysql_fetch_array($causas))
      {
        $respuesta=$respuesta."<option value='".$causa["id_causa"]."'>".$causa["causa_nombre"]."</option><br>";
      }
      return $this->renderText($respuesta);
  }

    public function executeTest(sfWebRequest $request)
  {
    $this->BD_Conectar(); /*CONECTO CON MI CLASE TEMPORAL PARA NO COMPLICARME CON ORM*/
    $sql_test= "INSERT INTO `psico`.`test` (`id`, `valor`) VALUES (NULL, 'ALO');";
    $estado = mysql_query($sql_test);
 return sfView::SUCCESS;
  }
  
  
  
    /**
     * Procesar formulario de nuevo encuestado
     *
     * @param $request sfWebRequest
     */
    public function executeProcesarForm(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod('post'));
        
        // Obtener datos base sin bloques "Sancion vigente"
        $manyToMany = array();
        $params = $request->getPostParameters();
        foreach($params as $param => $value) {
            if(is_array($value)) {
                $manyToMany[$param] = $value;
                unset($params[$param]);
            }
        }
        
        // Agregar otros parametros
        
        $params['id_user_responsable_principal'] = $this->getUser()->getGuardUser()->getId();
        $params['created_at'] = $params['updated_at'] = '"NOW()"';
        
        // Guardar
        $sql = DatabaseUtils::prepareInsertQuery('encuestado', $params);                    
        $query = $this->pdo->prepare($sql);        
        if(!$query->execute($params)) {
            return sfView::ERROR;        
        }

        // Obtener id de encuestado recien añadido
        $id = $this->pdo->lastInsertId();
       
        // Obtener sanciones vigentes como objetos
        $count = count($request->getParameter('select_sistema_atencion'));
        $sancionesVigentes = array();
        
        for($i = 0; $i < $count; $i++) {
            foreach($manyToMany as $key => $value) {
                $sancionesVigentes[$i][$key] = $value[$i];
            }
            $sancionesVigentes[$i]['id_encuestado'] = $id;
        }

        // Guardar las sanciones vigentes; transaccion para mejor rendimiento
        try {
            $this->pdo->beginTransaction();            
            foreach($sancionesVigentes as $sancion) {
                $sql = DatabaseUtils::prepareInsertQuery('encuestado_sanciones', $sancion);
                $query = $this->pdo->prepare($sql);
                $query->execute($sancion);
            }
            $this->pdo->commit();
        }
        catch(Exception $e) {
            $this->pdo->rollBack();
            return sfView::ERROR;
        }

        $this->username = $this->getUser()->getUsername();
		
		
		//sanciones anteriores
		
	       
        // Obtener sanciones vigentes como objetos
		 $id2 = $this->pdo->lastInsertId();
        $count2 = count($request->getParameter('input_ruk_2'));
        $sancionesAnteriores = array();
        
        for($j = 0; $j < $count2; $j++) {
            foreach($manyToMany as $key => $value) {
                $sancionesAnteriores[$j][$key] = $value[$j];
            }
            $sancionesAnteriores[$j]['id_encuestado'] = $id;
        }

        // Guardar las sanciones vigentes; transaccion para mejor rendimiento
        try {
            $this->pdo->beginTransaction();            
            foreach($ssancionesAnteriores as $sancionant) {
                $sql = DatabaseUtils::prepareInsertQuery('encuestado_canteriores', $sancionant);
                $query = $this->pdo->prepare($sql);
                $query->execute($sancionant);
            }
            $this->pdo->commit();
        }
        catch(Exception $e) {
            $this->pdo->rollBack();
            return sfView::ERROR;
        }

        $this->username = $this->getUser()->getUsername();
		
		//
    }

/**
 * Dado un RUN verifica si es valido sintaxticamente
 * case 0 : echo 'Todo bien!!'; break;
 * case 1 : echo 'RUT viene vacío'; break;
 * case 2 : echo 'El RUT no viene con el mínimo de caracteres necesarios para validarlo'; break;
 * case 3 : echo 'El RUT no viene en un formato numérico'; break;
 * case 4 : echo 'El RUT o el dígito viene vacío.'; break;
 * case 5 : echo 'El RUT y el dígito verificador no coinciden'; break;
 * default: echo 'Error de la décimanovena dimensión!!! Corran en círculos!!!'; break; <==== QUE MIERDA ES ESO???
 * @param string $run RUN sin punto ni guion
 */
public function verificaRUNENPHP($run=''){
  $sep = array();  $multi = 2;  $suma = 0;
  if (empty($rut)) return 1;
  $tmpRUT = preg_replace('/[^0-9kK]/','',$rut);
  if (strlen($tmpRUT) == 8 ) $tmpRUT = '0'.$tmpRUT;
  if (strlen($tmpRUT) != 9) return 2;
  $sep['rut'] = substr($tmpRUT,0,8);
  $sep['dv']  = substr($tmpRUT, -1);
  if ($sep['dv'] == 'k') $sep['dv'] = 'K';
  if (!is_numeric($sep['rut'])) return 3;
  if (empty($sep['rut']) OR $sep['dv'] == '') return 4;
  for ($i=strlen($sep['rut']) - 1; $i >= 0; $i--) {
    $suma = $suma + $sep['rut'][$i] * $multi;
    if ($multi == 7) $multi = 2;
    else $multi++;
  }
  $resto = $suma % 11;
  if ($resto == 1) $sep['dvt'] = 'K';
  else {
    if ($resto == 0) $sep['dvt'] = '0';
    else $sep['dvt'] = 11 - $resto;
  }
  if ($sep['dvt'] != $sep['dv']) return 5;
  return 0;
}


/**
 * Dado un RUN retorna si dicho rut ya existe o no en la base de datos.
 *
 * @param string $run RUN sin punto ni guion
 */
public function executeGetSiRUNYaRegistrado(sfWebRequest $request){
  $esAjax = $request->isXmlHttpRequest();/*true si es una peticion por ajax*/
  $this->forward404Unless($esAjax);/*lo envia a error 404 a menos que sea una peticion ajax*/
  $run=$request->getParameter('run');
  $this->BD_Conectar();
  $SQL_VERIFICA_RUN="SELECT count(*) FROM `encuestado` WHERE `input_run_nconverificador`='{$run}'";
  $r = mysql_query($SQL_VERIFICA_RUN);
  $r = mysql_fetch_array($r);
  if($r[0]>0){
    return $this->renderText('yaExiste');
  }else{return $this->renderText('noExiste');}
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


/**
 * Dado un usuario y un encuestado retorna el porcentaje de completado del
 * formulario CAIE para dicho encuestado.
 *
 * @param integer $id_user id del usuario que esta completo la encuesta en la red
 * @param integer $id_encuestado id del encuestado (adolecente infractor de ley)
 */
public function getPorcentajeCompletadoCAIE($idUser,$idEncuestado){
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


}
