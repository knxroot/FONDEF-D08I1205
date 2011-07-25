<?php

/**
 * EGED actions.
 *
 * @package    psicologia
 * @subpackage EGED
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EGEDActions extends Actions
{

 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('EGED','listarBloque');
  }


 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeMostrarInstrucciones(sfWebRequest $request)
  {
    //$this->forward('EGED', 'proximoBloque');

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
  
  $this->concensoMode=
          
          
  $arrayRespuestas=$request->getParameterHolder()->getAll();
  $SQL_INSERTAR_RESPUESTAS="";
  foreach ($arrayRespuestas as $r_nombre_parametro => $r_valor_parametro) {
     if (substr($r_nombre_parametro,0,strlen("radio_VorF_EGED_")) == "radio_VorF_EGED_"){

      $id_preg=substr($r_nombre_parametro,strlen("radio_VorF_EGED_"),strlen($r_nombre_parametro));
      $valRespuesta=$r_valor_parametro;
      $sql_insert_respuesta="INSERT INTO EGED_respuestas (
        `id_user` ,
        `respuesta` ,
        `comentario` ,
        `id_encuestado` ,
        `id_pregunta_EGED`,
        `concensoMode`
      )
      VALUES (
        '{$idUser}', '{$valRespuesta}', '{$arrayRespuestas["comentario_{$id_preg}"]}', '{$this->idEncuestado}', '{$id_preg}', '{$this->concensoMode}');";
      echo 
      $SQL_INSERTAR_RESPUESTAS=$SQL_INSERTAR_RESPUESTAS.$sql_insert_respuesta;
        mysql_query($sql_insert_respuesta);
     }
  }

  
  
  $this->GuardarTiempo($request,'EGED');
  
    $this->forward('EGED', 'listarBloque');

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

        $cantidad_ya_respondidas=0;

    $sql_consulta_preguntas_bloque_EGED="SELECT mp.id_pregunta_EGED AS id_pregunta, mp.texto AS texto_pregunta, mp.es_requerido AS es_requerida, mp.instruccion AS instrucciones
                                          FROM EGED_preguntas mp
                                          LEFT JOIN (
                                            SELECT *
                                            FROM `EGED_respuestas` mr
                                            WHERE id_user = '{$idUser}'
                                            AND id_encuestado = '{$this->idEncuestado}'
                                          ) mr ON mp.id_pregunta_EGED = mr.id_pregunta_EGED
                                          WHERE mr.id_pregunta_EGED IS NULL
                                          ORDER BY mp.id_pregunta_EGED
                                          LIMIT {$cantidad_ya_respondidas} , ".($cantidad_ya_respondidas+20).";";

      $result = mysql_query($sql_consulta_preguntas_bloque_EGED);
      if (!$result) {
          echo "error al realizar la consulta a la base de datos";
          exit;
      }
      if (mysql_num_rows($result) == 0) {
          $this->es_ultimo_bloque=true;
      }else{
      /*pasa el resultado (de tipo mysql result) a un arreglo comun para iterarlo en la vista*/
      while(($resultArray[] = mysql_fetch_assoc($result)) || array_pop($resultArray));
        $this->Preguntas_EGED=$resultArray;
      }
      $this->porcCompletado=$this->getPorcentajeCompletadoEGED($idUser,$this->idEncuestado);

      if($this->porcCompletado >0){
        $this->is_show_instruccions='false';
      }else{
        $this->is_show_instruccions='true';
      }

    $this->tstart=$this->getTimeStart();  
     
      
      
}




}
