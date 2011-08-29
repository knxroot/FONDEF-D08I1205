<?php

/**
 * MACI actions.
 *
 * @package    psicologia
 * @subpackage MACI
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class MACIActions extends Actions
{

 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('MACI','listarBloque');
  }


 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeMostrarInstrucciones(sfWebRequest $request)
  {
    //$this->forward('MACI', 'proximoBloque');

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
  //$idEncuestado=12;
  //$idUser=124;
  $arrayRespuestas=$request->getParameterHolder()->getAll();
  $SQL_INSERTAR_RESPUESTAS="";
  foreach ($arrayRespuestas as $r_nombre_parametro => $r_valor_parametro) {
     if (substr($r_nombre_parametro,0,strlen("radio_VorF_MACI_")) == "radio_VorF_MACI_"){

      $id_preg=substr($r_nombre_parametro,strlen("radio_VorF_MACI_"),strlen($r_nombre_parametro));
      $valRespuesta=$r_valor_parametro;
      $sql_insert_respuesta="INSERT INTO maci_respuestas (
        `id_user` ,
        `respuesta` ,
        `comentario` ,
        `id_encuestado` ,
        `id_pregunta_maci`
      )
      VALUES (
        '{$idUser}', '{$valRespuesta}', '{$arrayRespuestas["comentario_{$id_preg}"]}', '{$this->idEncuestado}', '{$id_preg}');";

      $SQL_INSERTAR_RESPUESTAS=$SQL_INSERTAR_RESPUESTAS.$sql_insert_respuesta;
        mysql_query($sql_insert_respuesta);
     }

}
  $this->GuardarTiempo($request,'MACI');
//echo $SQL_INSERTAR_RESPUESTAS;
 // mysql_query("");
 /* echo "uAAA".$estado_grabacionformulario."BBBu";
  if($estado_grabacionformulario){
    $this->forward('MACI', 'listarBloque');
  }else{
   return sfView::ERROR;
  }*/
    $this->forward('MACI', 'listarBloque');

}


 /**
  * Lista las preguntas del formulario
  *
  * @param sfRequest $request A request object
  */
public function executeListarBloque(sfWebRequest $request)
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
    $sql_chequea_respondidas="SELECT * FROM `maci_respuestas` WHERE  id_user = '{$idUser}' AND id_encuestado = '{$idEncuestado}'";
    if (mysql_num_rows(mysql_query($sql_chequea_respondidas)) > 0) {*/
      /*
      Consulta las preguntas a listar para un encuestado administrado por un usuario
      dado, tras la consulta devuelve las primeras 20 preguntas que aún no han sido
      respondidas por el encuestado y las devuelve ordenadas por el número de pregunta;
      el número de pregunta es mas bien el id de la pregunta dado que esta fue
      generada con un autoincrement.
      */
    $sql_consulta_preguntas_bloque_MACI="SELECT mp.id_pregunta_maci AS id_pregunta, mp.texto AS texto_pregunta, mp.es_requerido AS es_requerida
                                          FROM maci_preguntas mp
                                          LEFT JOIN (
                                            SELECT *
                                            FROM `maci_respuestas` mr
                                            WHERE id_user = '{$idUser}'
                                            AND id_encuestado = '{$this->idEncuestado}'
                                          ) mr ON mp.id_pregunta_maci = mr.id_pregunta_maci
                                          WHERE mr.id_pregunta_maci IS NULL
                                          ORDER BY mp.id_pregunta_maci
                                          LIMIT {$cantidad_ya_respondidas} , ".($cantidad_ya_respondidas+20).";";

    /*
    }else{
      $sql_consulta_preguntas_bloque_MACI="SELECT mp.id_pregunta_maci as id_pregunta, mp.texto as texto_pregunta, mp.es_requerido as es_requerida
                                      FROM maci_preguntas mp";
    }*/


      //echo $sql_consulta_preguntas_bloque_MACI;
      $result = mysql_query($sql_consulta_preguntas_bloque_MACI);
      if (!$result) {
          echo "error al realizar la consulta a la base de datos";
          exit;
      }
      if (mysql_num_rows($result) == 0) {
          $this->es_ultimo_bloque=true;
      }else{
      /*pasa el resultado (de tipo mysql result) a un arreglo comun para iterarlo en la vista*/
      while(($resultArray[] = mysql_fetch_assoc($result)) || array_pop($resultArray));
        $this->Preguntas_MACI=$resultArray;
      }
      $this->porcCompletado=$this->getPorcentajeCompletadoMACI($idUser,$this->idEncuestado);

      if($this->porcCompletado >0){
        $this->is_show_instruccions='false';
      }else{
        $this->is_show_instruccions='true';
      }
      $this->tstart=$this->getTimeStart();
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

}
