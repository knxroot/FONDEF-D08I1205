<?php

/**
 * SQIFA actions.
 *
 * @package    psicologia
 * @subpackage SQIFA
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SQIFAActions extends Actions
{

 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('SQIFA','listarBloque');
  }


 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeMostrarInstrucciones(sfWebRequest $request)
  {
    //$this->forward('SQIFA', 'proximoBloque');

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
     if (substr($r_nombre_parametro,0,strlen("radio_VorF_SQIFA_")) == "radio_VorF_SQIFA_"){

      $id_preg=substr($r_nombre_parametro,strlen("radio_VorF_SQIFA_"),strlen($r_nombre_parametro));
      $valRespuesta=$r_valor_parametro;
      $sql_insert_respuesta="INSERT INTO SQIFA_respuestas (
        `id_user` ,
        `respuesta` ,
        `comentario` ,
        `id_encuestado` ,
        `id_pregunta_SQIFA`
      )
      VALUES (
        '{$idUser}', '{$valRespuesta}', '{$arrayRespuestas["comentario_{$id_preg}"]}', '{$this->idEncuestado}', '{$id_preg}');";

      $SQL_INSERTAR_RESPUESTAS=$SQL_INSERTAR_RESPUESTAS.$sql_insert_respuesta;
        mysql_query($sql_insert_respuesta);
     }
  }
//echo $SQL_INSERTAR_RESPUESTAS;
 // mysql_query("");
 /* echo "uAAA".$estado_grabacionformulario."BBBu";
  if($estado_grabacionformulario){
    $this->forward('SQIFA', 'listarBloque');
  }else{
   return sfView::ERROR;
  }*/
    $this->forward('SQIFA', 'listarBloque');

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
    $sql_chequea_respondidas="SELECT * FROM `SQIFA_respuestas` WHERE  id_user = '{$idUser}' AND id_encuestado = '{$idEncuestado}'";
    if (mysql_num_rows(mysql_query($sql_chequea_respondidas)) > 0) {*/
      /*
      Consulta las preguntas a listar para un encuestado administrado por un usuario
      dado, tras la consulta devuelve las primeras 20 preguntas que aún no han sido
      respondidas por el encuestado y las devuelve ordenadas por el número de pregunta;
      el número de pregunta es mas bien el id de la pregunta dado que esta fue
      generada con un autoincrement.
      */
    $sql_consulta_SQIFA="SELECT mp.id_pregunta_SQIFA AS id_pregunta, mp.texto AS texto_pregunta, mp.es_requerido AS es_requerida, mp.bloque_num as bloque_num
                                          FROM SQIFA_preguntas mp
                                          LEFT JOIN (
                                            SELECT *
                                            FROM `SQIFA_respuestas` mr
                                            WHERE id_user = '{$idUser}'
                                            AND id_encuestado = '{$this->idEncuestado}'
                                          ) mr ON mp.id_pregunta_SQIFA = mr.id_pregunta_SQIFA
                                          WHERE mr.id_pregunta_SQIFA IS NULL
                                          ORDER BY mp.id_pregunta_SQIFA;"
                                          //LIMIT {$cantidad_ya_respondidas} , ".($cantidad_ya_respondidas+20).";"
                                          ;

    /*
    }else{
      $sql_consulta_preguntas_bloque_SQIFA="SELECT mp.id_pregunta_SQIFA as id_pregunta, mp.texto as texto_pregunta, mp.es_requerido as es_requerida
                                      FROM SQIFA_preguntas mp";
    }*/
    $resultado = mysql_query($sql_consulta_SQIFA);
    $res[]= mysql_fetch_array($resultado);
   // echo '<br> Primer registro: <br>____ id_pregunta = '.$res[0][0].'<br>____ texto pregunta ='.$res[0][1].'<br>____ es_requerida = '.$res[0][2].'<br>____ num_bloque'.$res[0][3].'<br>';


    $primera=$res[0][bloque_num];
    //echo $sql_consulta_SQIFA;
    //echo '__numero bloque___'.$primera.'____';
    //echo $res[0][bloque_num];
   // echo $sql_consulta_SQIFA;
  //  echo '<br>    '.$primera.'_____<br>' ;
    //echo "<br><br>";
    //echo $res[0][bloque_num];
      //if ($res[0][bloque_num]==1){

          $sql_consulta_preguntas_bloque_SQIFA="SELECT mp.id_pregunta_SQIFA AS id_pregunta, mp.texto AS texto_pregunta, mp.es_requerido AS es_requerida
                                          FROM SQIFA_preguntas mp
                                          LEFT JOIN (
                                            SELECT *
                                            FROM `SQIFA_respuestas` mr
                                            WHERE id_user = '{$idUser}'
                                            AND id_encuestado = '{$this->idEncuestado}'
                                          ) mr ON mp.id_pregunta_SQIFA = mr.id_pregunta_SQIFA
                                          WHERE mr.id_pregunta_SQIFA IS NULL and mp.bloque_num= '$primera'
                                          ORDER BY mp.id_pregunta_SQIFA;";

      //if ($primera=2);
      
/*
      if ($res[0][bloque_num]==2){

          $sql_consulta_preguntas_bloque_SQIFA="SELECT mp.id_pregunta_SQIFA AS id_pregunta, mp.texto AS texto_pregunta, mp.es_requerido AS es_requerida
                                          FROM SQIFA_preguntas mp
                                          LEFT JOIN (
                                            SELECT *
                                            FROM `SQIFA_respuestas` mr
                                            WHERE id_user = '{$idUser}'
                                            AND id_encuestado = '{$this->idEncuestado}'
                                          ) mr ON mp.id_pregunta_SQIFA = mr.id_pregunta_SQIFA
                                          WHERE mr.id_pregunta_SQIFA IS NULL and mp.bloque_num= 2
                                          ORDER BY mp.id_pregunta_SQIFA;";


      }

      if ($res[0][bloque_num]==3){

          $sql_consulta_preguntas_bloque_SQIFA="SELECT mp.id_pregunta_SQIFA AS id_pregunta, mp.texto AS texto_pregunta, mp.es_requerido AS es_requerida
                                          FROM SQIFA_preguntas mp
                                          LEFT JOIN (
                                            SELECT *
                                            FROM `SQIFA_respuestas` mr
                                            WHERE id_user = '{$idUser}'
                                            AND id_encuestado = '{$this->idEncuestado}'
                                          ) mr ON mp.id_pregunta_SQIFA = mr.id_pregunta_SQIFA
                                          WHERE mr.id_pregunta_SQIFA IS NULL and mp.bloque_num= 3
                                          ORDER BY mp.id_pregunta_SQIFA;";


      }*/
      //echo $sql_consulta_preguntas_bloque_SQIFA;
      $result = mysql_query($sql_consulta_preguntas_bloque_SQIFA);
      if (!$result) {
          echo "error al realizar la consulta a la base de datos";
          exit;
      }
     // echo $result;
      //$respuesta= mysql_fetch_array($result);
      //echo $respuesta[0][bloque_num]."<br>";
      //echo $respuesta[0][id_pregunta];
      if (mysql_num_rows($result) == 0) {
          $this->es_ultimo_bloque=true;
      }else{
      /*pasa el resultado (de tipo mysql result) a un arreglo comun para iterarlo en la vista*/
      while(($resultArray[] = mysql_fetch_assoc($result)) || array_pop($resultArray));
        $this->Preguntas_SQIFA=$resultArray;
      }
     // echo $sql_consulta_preguntas_bloque_SQIFA;
      $this->porcCompletado=$this->getPorcentajeCompletadoSQIFA($idUser,$this->idEncuestado);

      if($this->porcCompletado >0){
        $this->is_show_instruccions='false';
      }else{
        $this->is_show_instruccions='true';
      }
      $this->bloque_valor=$primera;
}



}
