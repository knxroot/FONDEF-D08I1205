<?php

/**
 * CAIE actions.
 *
 * @package    psicologia
 * @subpackage CAIE
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CAIEActions extends Actions
{

 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */

  public function executeIndex(sfWebRequest $request)
  {

     $this->idEncuestado=$request->getParameter('idEncuestado');
     $idUser=$this->getUser()->getGuardUser()->getId();
     $this->porcCompletadoCAIE=$this->getPorcentajeCompletadoCAIE($idUser, $this->idEncuestado);
     $this->porcCompletadoCAIE2=$this->getPorcentajeCompletadoCAIE2($idUser, $this->idEncuestado);
  }



 /**
  * Executes proximoBloque action
  *
  * @param sfRequest $request A request object
  */
public function executeProximoBloque(sfWebRequest $request)
{
               

  $this->BD_Conectar();
  $idUser=$this->getUser()->getGuardUser()->getId();

  $this->idEncuestado=$request->getParameter('idEncuestado');
  /*si no llega el parametro idEncuestado entonces tirar un error 404*/
  $this->forward404If(!$this->idEncuestado);
  $arrayRespuestas=$request->getParameterHolder()->getAll();
  foreach ($arrayRespuestas as $r_nombre_parametro => $r_valor_parametro) {
     if (substr($r_nombre_parametro,0,strlen("radio_VorF_CAIE_")) == "radio_VorF_CAIE_"){
      $id_preg=substr($r_nombre_parametro,strlen("radio_VorF_CAIE_"),strlen($r_nombre_parametro));
      $valRespuesta=$r_valor_parametro;
      
      /* Para el caso que la religión en que participa no sea la de la lista tomar la que se especifico en el input*/
      if($id_preg=='39' && $valRespuesta=='Otra'){$valRespuesta=$request->getParameter('input_otra_iglesia');}

      $sql_insert_respuesta="INSERT INTO CAIE_respuestas (
        `id_user` ,
        `respuesta` ,
        `comentario` ,
        `id_encuestado` ,
        `id_pregunta_CAIE`
      )
      VALUES (
        '{$idUser}', '{$valRespuesta}', '{$arrayRespuestas["comentario_{$id_preg}"]}', '{$this->idEncuestado}', '{$id_preg}');";

     mysql_query($sql_insert_respuesta);
     }
      
  }
  $this->GuardarTiempo($request,'CICUM');//guarda el tiempo
  $this->forward('CAIE', 'listarBloque');
}


 /**
  * Lista las preguntas del formulario
  *
  * @param sfRequest $request A request object
  */
public function executeListarBloque(sfWebRequest $request)
   {        $this->tstart=$this->getTimeStart(); //inicializa el contador de tiempo

      $this->BD_Conectar();
      $idUser=$this->getUser()->getGuardUser()->getId();
      $this->idEncuestado=$request->getParameter('idEncuestado');

      /*si no llega el parametro idEncuestado entonces tirar un error 404*/
      $this->forward404If(!$this->idEncuestado);


   /**
    * Consulta las preguntas a listar para un encuestado administrado por un usuario
    * dado, tras la consulta devuelve las primeras 20 preguntas que aún no han sido
    * respondidas por el encuestado y las devuelve ordenadas por el número de pregunta;
    * el número de pregunta es mas bien el id de la pregunta dado que esta fue
    * generada con un autoincrement.
    */
    $sql_consulta_preguntas_bloque_CAIE="SELECT mp.id_pregunta_CAIE AS id_pregunta, mp.texto AS texto_pregunta, mp.es_requerido AS es_requerida
                                          FROM CAIE_preguntas mp
                                          LEFT JOIN (
                                            SELECT *
                                            FROM `CAIE_respuestas` mr
                                            WHERE id_user = '{$idUser}'
                                            AND id_encuestado = '{$this->idEncuestado}'
                                          ) mr ON mp.id_pregunta_CAIE = mr.id_pregunta_CAIE
                                          WHERE mr.id_pregunta_CAIE IS NULL
                                          ORDER BY mp.id_pregunta_CAIE
                                          LIMIT 20;";

      $result = mysql_query($sql_consulta_preguntas_bloque_CAIE);
      if (!$result) {
          echo "error al realizar la consulta a la base de datos";
          exit;
      }
      if (mysql_num_rows($result) == 0) {
          $this->es_ultimo_bloque=true;
      }else{
      /*pasa el resultado (de tipo mysql result) a un arreglo comun para iterarlo en la vista*/
      while(($resultArray[] = mysql_fetch_assoc($result)) || array_pop($resultArray));
        $this->Preguntas_CAIE=$resultArray;
      }
      $this->porcCompletado=$this->getPorcentajeCompletadoCAIE($idUser,$this->idEncuestado);

      if($this->porcCompletado >0){
        $this->is_show_instruccions='false';
      }else{
        $this->is_show_instruccions='true';
      }
       $this->tstart=$this->getTimeStart(); //inicializa el contador de tiempo
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

/**
 * Dado un usuario y un encuestado retorna el porcentaje de completado del
 * formulario CAIE para dicho encuestado.
 *
 * @param integer $id_user id del usuario que esta completo la encuesta en la red
 * @param integer $id_encuestado id del encuestado (adolecente infractor de ley)
 */
public function getPorcentajeCompletadoCAIE2($idUser,$idEncuestado){
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





// PARTE 2


 /**
  * Executes proximoBloque action
  *
  * @param sfRequest $request A request object
  */
public function executeProximoBloque2(sfWebRequest $request)
{


  $this->BD_Conectar();
  $idUser=$this->getUser()->getGuardUser()->getId();

  $this->idEncuestado=$request->getParameter('idEncuestado');
  /*si no llega el parametro idEncuestado entonces tirar un error 404*/
  $this->forward404If(!$this->idEncuestado);
  $arrayRespuestas=$request->getParameterHolder()->getAll();
  foreach ($arrayRespuestas as $r_nombre_parametro => $r_valor_parametro) {
     if (substr($r_nombre_parametro,0,strlen("radio_VorF_CAIE_")) == "radio_VorF_CAIE_"){
      $id_preg=substr($r_nombre_parametro,strlen("radio_VorF_CAIE_"),strlen($r_nombre_parametro));
      $valRespuesta=$r_valor_parametro;

      /* Para el caso que la religión en que participa no sea la de la lista tomar la que se especifico en el input*/

      $sql_insert_respuesta="INSERT INTO caie2_respuestas (
        `id_user` ,
        `respuesta` ,
        `comentario` ,
        `id_encuestado` ,
        `id_pregunta_CAIE`
      )
      VALUES (
        '{$idUser}', '{$valRespuesta}', '{$arrayRespuestas["comentario_{$id_preg}"]}', '{$this->idEncuestado}', '{$id_preg}');";

     mysql_query($sql_insert_respuesta);
     }

  }
  $this->GuardarTiempo($request,'CICUM_PARTE2');//guarda el tiempo
  $this->forward('CAIE', 'listarBloque2');
}


 /**
  * Lista las preguntas del formulario
  *
  * @param sfRequest $request A request object
  */
public function executeListarBloque2(sfWebRequest $request)
   {        $this->tstart=$this->getTimeStart(); //inicializa el contador de tiempo

      $this->BD_Conectar();
      $idUser=$this->getUser()->getGuardUser()->getId();
      $this->idEncuestado=$request->getParameter('idEncuestado');

      /*si no llega el parametro idEncuestado entonces tirar un error 404*/
      $this->forward404If(!$this->idEncuestado);


   /**
    * Consulta las preguntas a listar para un encuestado administrado por un usuario
    * dado, tras la consulta devuelve las primeras 20 preguntas que aún no han sido
    * respondidas por el encuestado y las devuelve ordenadas por el número de pregunta;
    * el número de pregunta es mas bien el id de la pregunta dado que esta fue
    * generada con un autoincrement.
    */
    $sql_consulta_preguntas_bloque_CAIE="SELECT mp.id_pregunta_CAIE AS id_pregunta, mp.texto AS texto_pregunta, mp.es_requerido AS es_requerida
                                          FROM caie2_preguntas mp
                                          LEFT JOIN (
                                            SELECT *
                                            FROM `caie2_respuestas` mr
                                            WHERE id_user = '{$idUser}'
                                            AND id_encuestado = '{$this->idEncuestado}'
                                          ) mr ON mp.id_pregunta_CAIE = mr.id_pregunta_CAIE
                                          WHERE mr.id_pregunta_CAIE IS NULL
                                          ORDER BY mp.id_pregunta_CAIE
                                          LIMIT 20;";

      $result = mysql_query($sql_consulta_preguntas_bloque_CAIE);
      if (!$result) {
          echo "error al realizar la consulta a la base de datos";
          exit;
      }
      if (mysql_num_rows($result) == 0) {
          $this->es_ultimo_bloque=true;
      }else{
      /*pasa el resultado (de tipo mysql result) a un arreglo comun para iterarlo en la vista*/
      while(($resultArray[] = mysql_fetch_assoc($result)) || array_pop($resultArray));
        $this->Preguntas_CAIE=$resultArray;
      }
      $this->porcCompletado=$this->getPorcentajeCompletadoCAIE($idUser,$this->idEncuestado);

      if($this->porcCompletado >0){
        $this->is_show_instruccions='false';
      }else{
        $this->is_show_instruccions='true';
      }
       $this->tstart=$this->getTimeStart(); //inicializa el contador de tiempo
}










}
