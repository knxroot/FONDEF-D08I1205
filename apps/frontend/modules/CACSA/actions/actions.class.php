<?php

/**
 * CACSA actions.
 *
 * @package    psicologia
 * @subpackage CACSA
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CACSAActions extends Actions
{

 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    //$this->forward('CACSA','listarBloque');
     $this->idEncuestado=$request->getParameter('idEncuestado');
  }


 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeMostrarInstrucciones(sfWebRequest $request)
  {
    $this->forward('CACSA', 'proximoBloque');

  }

 /**
  * Executes proximoBloquePart1CACSA action
  *
  * @param sfRequest $request A request object
  */
public function executeProximoBloquePart1CACSA(sfWebRequest $request)
{
  $this->BD_Conectar();
  $idUser=$this->getUser()->getGuardUser()->getId();

  $this->idEncuestado=$request->getParameter('idEncuestado');
  /*si no llega el parametro idEncuestado entonces tirar un error 404*/
  $this->forward404If(!$this->idEncuestado);
  $arrayRespuestas=$request->getParameterHolder()->getAll();
  $SQL_INSERTAR_RESPUESTAS="";
  foreach ($arrayRespuestas as $r_nombre_parametro => $r_valor_parametro) {
     if (substr($r_nombre_parametro,0,strlen("radio_VorF_CACSA_")) == "radio_VorF_CACSA_"){

      $id_preg=substr($r_nombre_parametro,strlen("radio_VorF_CACSA_"),strlen($r_nombre_parametro));
      $valRespuesta=$r_valor_parametro;      

      $valRespuesta1=$request->getParameter('radio_VorF_CACSA_'.$id_preg);
      $valRespuesta2=$request->getParameter('respuesta2_CACSA_'.$id_preg);
      $valRespuesta3=$request->getParameter('radio_respuesta3_CACSA_'.$id_preg);


      $sql_insert_respuesta="INSERT INTO CACSA2_respuestas (
        `id_user` ,
        `respuesta` ,
        `respuesta2` ,
        `respuesta3` ,
        `comentario` ,
        `id_encuestado` ,
        `id_pregunta_CACSA`
      )
      VALUES (
        '{$idUser}', '{$valRespuesta}', '{$valRespuesta2}', '{$valRespuesta3}', '{$arrayRespuestas["comentario_{$id_preg}"]}', '{$this->idEncuestado}', '{$id_preg}');";

      $SQL_INSERTAR_RESPUESTAS=$SQL_INSERTAR_RESPUESTAS.$sql_insert_respuesta;
       mysql_query($sql_insert_respuesta);
     }
  }
    $this->forward('CACSA', 'showPart1CACSA');
}


 /**
  * Executes proximoBloque action
  *
  * @param sfRequest $request A request object
  */
public function executeProximoBloquePart2CACSA(sfWebRequest $request)
{
  $this->BD_Conectar();
  $idUser=$this->getUser()->getGuardUser()->getId();

  $this->idEncuestado=$request->getParameter('idEncuestado');
  /*si no llega el parametro idEncuestado entonces tirar un error 404*/
  $this->forward404If(!$this->idEncuestado);
  $arrayRespuestas=$request->getParameterHolder()->getAll();
  $SQL_INSERTAR_RESPUESTAS="";
  foreach ($arrayRespuestas as $r_nombre_parametro => $r_valor_parametro) {
     if (substr($r_nombre_parametro,0,strlen("radio_VorF_CACSA_")) == "radio_VorF_CACSA_"){

      $id_preg=substr($r_nombre_parametro,strlen("radio_VorF_CACSA_"),strlen($r_nombre_parametro));
      $valRespuesta=$r_valor_parametro;      

      $valRespuesta1=$request->getParameter('radio_VorF_CACSA_'.$id_preg);
      $valRespuesta2=$request->getParameter('respuesta2_CACSA_'.$id_preg);
      $valRespuesta3=$request->getParameter('radio_respuesta3_CACSA_'.$id_preg);


      $sql_insert_respuesta="INSERT INTO CACSA3_respuestas (
        `id_user` ,
        `respuesta` ,
        `respuesta2` ,
        `respuesta3` ,
        `comentario` ,
        `id_encuestado` ,
        `id_pregunta_CACSA`
      )
      VALUES (
        '{$idUser}', '{$valRespuesta}', '{$valRespuesta2}', '{$valRespuesta3}', '{$arrayRespuestas["comentario_{$id_preg}"]}', '{$this->idEncuestado}', '{$id_preg}');";

      $SQL_INSERTAR_RESPUESTAS=$SQL_INSERTAR_RESPUESTAS.$sql_insert_respuesta;
       mysql_query($sql_insert_respuesta);
     }
  }
    $this->forward('CACSA', 'showPart2CACSA');
}

public function executeShowPart1CACSA(sfWebRequest $request)
{
      $this->BD_Conectar();
      $idUser=$this->getUser()->getGuardUser()->getId();
      $this->idEncuestado=$request->getParameter('idEncuestado');

      /*si no llega el parametro idEncuestado entonces tirar un error 404*/
      $this->forward404If(!$this->idEncuestado);

      /* Por defecto no pasamos un numero de bloque dado que las respuestas que se
       * retornan al usar el limit inferior en cero y hacer un inner join con la tabla
       * de respuestas es justamente las preguntas que no estan respondidas asi es que
       * por defecto no es necesario usar un limite inferior en la consulta, de todas
       * formas deje eso en el codigo por si en el futuro necesito usarlo *
       */

      /*
      if ($request->hasParameter('numberBloque'))
      {
        $cantidad_ya_respondidas=$request->getParameter('numberBloque')*20;
      }else{*/
        $cantidad_ya_respondidas=0;
      /*}*/

      /*
      Consulta las preguntas a listar para un encuestado administrado por un usuario
      dado, tras la consulta devuelve las primeras 20 preguntas que aún no han sido
      respondidas por el encuestado y las devuelve ordenadas por el número de pregunta;
      el número de pregunta es mas bien el id de la pregunta dado que esta fue
      generada con un autoincrement.
      */
    $sql_consulta_preguntas_bloque_CACSA2="SELECT mp.id_pregunta_CACSA2 AS id_pregunta, mp.texto AS texto_pregunta, mp.es_requerido AS es_requerida
                                          FROM CACSA2_preguntas mp
                                          LEFT JOIN (
                                            SELECT *
                                            FROM `CACSA2_respuestas` mr
                                            WHERE id_user = '{$idUser}'
                                            AND id_encuestado = '{$this->idEncuestado}'
                                          ) mr ON mp.id_pregunta_CACSA2 = mr.id_pregunta_CACSA2
                                          WHERE mr.id_pregunta_CACSA2 IS NULL
                                          ORDER BY mp.id_pregunta_CACSA2
                                          LIMIT {$cantidad_ya_respondidas} , ".($cantidad_ya_respondidas+20).";";

      $result = mysql_query($sql_consulta_preguntas_bloque_CACSA2);
      if (!$result) {
          echo "error al realizar la consulta a la base de datos";
          exit;
      }
      if (mysql_num_rows($result) == 0) {
          $this->es_ultimo_bloque=true;
      }else{
      /*pasa el resultado (de tipo mysql result) a un arreglo comun para iterarlo en la vista*/
      while(($resultArray[] = mysql_fetch_assoc($result)) || array_pop($resultArray));
        $this->Preguntas_CACSA=$resultArray;
      }
      $this->porcCompletado=$this->getPorcentajeCompletadoPart1CACSA($idUser,$this->idEncuestado);

      if($this->porcCompletado >0){
        $this->is_show_instruccions='false';
      }else{
        $this->is_show_instruccions='true';
      }
}



public function executeShowPart2CACSA(sfWebRequest $request)
{
      $this->BD_Conectar();
      $idUser=$this->getUser()->getGuardUser()->getId();
      $this->idEncuestado=$request->getParameter('idEncuestado');

      /*si no llega el parametro idEncuestado entonces tirar un error 404*/
      $this->forward404If(!$this->idEncuestado);

      //$idEncuestado=12;
      //$idUser=124;

      /* Por defecto no pasamos un numero de bloque dado que las respuestas que se
       * retornan al usar el limit inferior en cero y hacer un inner join con la tabla
       * de respuestas es justamente las preguntas que no estan respondidas asi es que
       * por defecto no es necesario usar un limite inferior en la consulta, de todas
       * formas deje eso en el codigo por si en el futuro necesito usarlo *
       */

      /*
      if ($request->hasParameter('numberBloque'))
      {
        $cantidad_ya_respondidas=$request->getParameter('numberBloque')*20;
      }else{*/
        $cantidad_ya_respondidas=0;
      /*}*/


    /*
    $sql_chequea_respondidas="SELECT * FROM `CACSA_respuestas` WHERE  id_user = '{$idUser}' AND id_encuestado = '{$idEncuestado}'";
    if (mysql_num_rows(mysql_query($sql_chequea_respondidas)) > 0) {*/
      /*
      Consulta las preguntas a listar para un encuestado administrado por un usuario
      dado, tras la consulta devuelve las primeras 20 preguntas que aún no han sido
      respondidas por el encuestado y las devuelve ordenadas por el número de pregunta;
      el número de pregunta es mas bien el id de la pregunta dado que esta fue
      generada con un autoincrement.
      */
    $sql_consulta_preguntas_bloque_CACSA3="SELECT mp.id_pregunta_CACSA3 AS id_pregunta, mp.texto AS texto_pregunta, mp.es_requerido AS es_requerida
                                          FROM CACSA3_preguntas mp
                                          LEFT JOIN (
                                            SELECT *
                                            FROM `CACSA3_respuestas` mr
                                            WHERE id_user = '{$idUser}'
                                            AND id_encuestado = '{$this->idEncuestado}'
                                          ) mr ON mp.id_pregunta_CACSA3 = mr.id_pregunta_CACSA3
                                          WHERE mr.id_pregunta_CACSA3 IS NULL
                                          ORDER BY mp.id_pregunta_CACSA3
                                          LIMIT {$cantidad_ya_respondidas} , ".($cantidad_ya_respondidas+20).";";

    /*
    }else{
      $sql_consulta_preguntas_bloque_CACSA="SELECT mp.id_pregunta_CACSA as id_pregunta, mp.texto as texto_pregunta, mp.es_requerido as es_requerida
                                      FROM CACSA_preguntas mp";
    }*/


      //echo $sql_consulta_preguntas_bloque_CACSA;
      $result = mysql_query($sql_consulta_preguntas_bloque_CACSA3);
       if (!$result) {
          echo "error al realizar la consulta a la base de datos";
          exit;
      }
      if (mysql_num_rows($result) == 0) {
          $this->es_ultimo_bloque=true;
      }else{
      /*pasa el resultado (de tipo mysql result) a un arreglo comun para iterarlo en la vista*/
      while(($resultArray[] = mysql_fetch_assoc($result)) || array_pop($resultArray));
        $this->Preguntas_CACSA=$resultArray;
      }
      $this->porcCompletado=$this->getPorcentajeCompletadoPart2CACSA($idUser,$this->idEncuestado);

      if($this->porcCompletado >0){
        $this->is_show_instruccions='false';
      }else{
        $this->is_show_instruccions='true';
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

}
