<?php

/**
 * JIR actions.
 *
 * @package    psicologia
 * @subpackage JIR
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class JIRActions extends Actions
{

 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('JIR','listarBloque');
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
     if (substr($r_nombre_parametro,0,strlen("radio_VorF_JIR_")) == "radio_VorF_JIR_"){
      $id_preg=substr($r_nombre_parametro,strlen("radio_VorF_JIR_"),strlen($r_nombre_parametro));
      $valRespuesta=$r_valor_parametro;
      $sql_insert_respuesta="INSERT INTO JIR_respuestas (
        `id_user` ,
        `respuesta` ,
        `comentario` ,
        `id_encuestado` ,
        `id_pregunta_JIR`
      )
      VALUES (
        '{$idUser}', '{$valRespuesta}', '{$arrayRespuestas["comentario_{$id_preg}"]}', '{$this->idEncuestado}', '{$id_preg}');";

     mysql_query($sql_insert_respuesta);
     }
  }
  $this->GuardarTiempo($request,'JIR');
  $this->forward('JIR', 'listarBloque');
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


   /**
    * Consulta las preguntas a listar para un encuestado administrado por un usuario
    * dado, tras la consulta devuelve las primeras 20 preguntas que aún no han sido
    * respondidas por el encuestado y las devuelve ordenadas por el número de pregunta;
    * el número de pregunta es mas bien el id de la pregunta dado que esta fue
    * generada con un autoincrement.
    */
    $sql_consulta_preguntas_bloque_JIR="SELECT mp.id_pregunta_JIR AS id_pregunta, mp.texto AS texto_pregunta, mp.es_requerido AS es_requerida
                                          FROM JIR_preguntas mp
                                          LEFT JOIN (
                                            SELECT *
                                            FROM `JIR_respuestas` mr
                                            WHERE id_user = '{$idUser}'
                                            AND id_encuestado = '{$this->idEncuestado}'
                                          ) mr ON mp.id_pregunta_JIR = mr.id_pregunta_JIR
                                          WHERE mr.id_pregunta_JIR IS NULL
                                          ORDER BY mp.id_pregunta_JIR
                                          LIMIT 20;";

      $result = mysql_query($sql_consulta_preguntas_bloque_JIR);
      if (!$result) {
          echo "error al realizar la consulta a la base de datos";
          exit;
      }
      if (mysql_num_rows($result) == 0) {
          $this->es_ultimo_bloque=true;
      }else{
      /*pasa el resultado (de tipo mysql result) a un arreglo comun para iterarlo en la vista*/
      while(($resultArray[] = mysql_fetch_assoc($result)) || array_pop($resultArray));
        $this->Preguntas_JIR=$resultArray;
      }
      $this->porcCompletado=$this->getPorcentajeCompletadoJIR($idUser,$this->idEncuestado);

      if($this->porcCompletado >0){
        $this->is_show_instruccions='false';
      }else{
        $this->is_show_instruccions='true';
      }
      $this->tstart=$this->getTimeStart();
}
}
