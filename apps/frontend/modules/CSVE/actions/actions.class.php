<?php

/**
 * CSVE actions.
 *
 * @package    Fondef D08I1205
 * @subpackage CSVE
 * @author     Gustavo Lacoste <gustavo@lacosox.org>, Miguel Hernández <miguelhernandez.icii@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CSVEActions extends Actions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('CSVE', 'showCSVE');
  }
  
  
  /**
  * Executes proximoBloquePart1CSVE action
  *
  * @param sfRequest $request A request object
  */
public function executeProximoBloqueCSVE(sfWebRequest $request)
{
  $this->BD_Conectar();
  $idUser=$this->getUser()->getGuardUser()->getId();

  $this->idEncuestado=$request->getParameter('idEncuestado');
  /*si no llega el parametro idEncuestado entonces tirar un error 404*/
  $this->forward404If(!$this->idEncuestado);
  $arrayRespuestas=$request->getParameterHolder()->getAll();
  $SQL_INSERTAR_RESPUESTAS="";
  foreach ($arrayRespuestas as $r_nombre_parametro => $r_valor_parametro) {
     if (substr($r_nombre_parametro,0,strlen("radio_VorF_CSVE_")) == "radio_VorF_CSVE_"){

      $id_preg=substr($r_nombre_parametro,strlen("radio_VorF_CSVE_"),strlen($r_nombre_parametro));
      $valRespuesta=$r_valor_parametro;      

      $valRespuesta1=$request->getParameter('radio_VorF_CSVE_'.$id_preg);
      $valRespuesta2=$request->getParameter('respuesta2_CSVE_'.$id_preg);
      $valRespuesta3=$request->getParameter('radio_respuesta3_CSVE_'.$id_preg);


      $sql_insert_respuesta="INSERT INTO CSVE_respuestas (
        `id_user` ,
        `respuesta` ,
        `respuesta2` ,
        `respuesta3` ,
        `comentario` ,
        `id_encuestado` ,
        `id_pregunta_CSVE`
      )
      VALUES (
        '{$idUser}', '{$valRespuesta}', '{$valRespuesta2}', '{$valRespuesta3}', '{$arrayRespuestas["comentario_{$id_preg}"]}', '{$this->idEncuestado}', '{$id_preg}');";

      $SQL_INSERTAR_RESPUESTAS=$SQL_INSERTAR_RESPUESTAS.$sql_insert_respuesta;
       mysql_query($sql_insert_respuesta);
     }
  }
    $this->forward('CSVE', 'showCSVE');
}

  
     /**
      * Lista las preguntas del formulario
      *
      * @param sfRequest $request A request object
      */
    public function executeShowCSVE(sfWebRequest $request)
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
        $sql_chequea_respondidas="SELECT * FROM `CSVE_respuestas` WHERE  id_user = '{$idUser}' AND id_encuestado = '{$idEncuestado}'";
        if (mysql_num_rows(mysql_query($sql_chequea_respondidas)) > 0) {*/
          /*
          Consulta las preguntas a listar para un encuestado administrado por un usuario
          dado, tras la consulta devuelve las primeras 20 preguntas que aún no han sido
          respondidas por el encuestado y las devuelve ordenadas por el número de pregunta;
          el número de pregunta es mas bien el id de la pregunta dado que esta fue
          generada con un autoincrement.
          */
        $sql_consulta_preguntas_bloque_CSVE="SELECT mp.id_pregunta_CSVE AS id_pregunta, mp.texto AS texto_pregunta, mp.es_requerido AS es_requerida
                                              FROM CSVE_preguntas mp
                                              LEFT JOIN (
                                                SELECT *
                                                FROM `CSVE_respuestas` mr
                                                WHERE id_user = '{$idUser}'
                                                AND id_encuestado = '{$this->idEncuestado}'
                                              ) mr ON mp.id_pregunta_CSVE = mr.id_pregunta_CSVE
                                              WHERE mr.id_pregunta_CSVE IS NULL
                                              ORDER BY mp.id_pregunta_CSVE
                                              LIMIT {$cantidad_ya_respondidas} , ".($cantidad_ya_respondidas+20).";";

        /*
        }else{
          $sql_consulta_preguntas_bloque_CSVE="SELECT mp.id_pregunta_CSVE as id_pregunta, mp.texto as texto_pregunta, mp.es_requerido as es_requerida
                                          FROM CSVE_preguntas mp";
        }*/


          //echo $sql_consulta_preguntas_bloque_CSVE;
          $result = mysql_query($sql_consulta_preguntas_bloque_CSVE);
          if (!$result) {
              echo "error al realizar la consulta a la base de datos";
              exit;
          }
          if (mysql_num_rows($result) == 0) {
              $this->es_ultimo_bloque=true;
          }else{
          /*pasa el resultado (de tipo mysql result) a un arreglo comun para iterarlo en la vista*/
          while(($resultArray[] = mysql_fetch_assoc($result)) || array_pop($resultArray));
            $this->Preguntas_CSVE=$resultArray;
          }
          $this->porcCompletado=$this->getPorcentajeCompletadoCSVE($idUser,$this->idEncuestado);

          if($this->porcCompletado >0){
            $this->is_show_instruccions='false';
          }else{
            $this->is_show_instruccions='true';
          }
    }
    

}
