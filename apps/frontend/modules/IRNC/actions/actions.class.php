<?php

/**
 * IRNC actions.
 *
 * @package    psicologia
 * @subpackage IRNC
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class IRNCActions extends Actions
{

 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('IRNC','listarBloque');
  }

 /**
  * Executes proximoBloque action
  *
  * @param sfRequest $request A request object
  */
public function executeGuardarInstrumento(sfWebRequest $request)
{
  $this->BD_Conectar();
  $idUser=$this->getUser()->getGuardUser()->getId();

  $this->idEncuestado=$request->getParameter('idEncuestado');


  /*si no llega el parametro idEncuestado entonces tirar un error 404*/
  $this->forward404If(!$this->idEncuestado);
  $arrayRespuestas=$request->getParameterHolder()->getAll();

  $sql_borrarcheckbooks="DELETE FROM IRNC_respuestas WHERE `IRNC_respuestas`.`id_user` = '{$idUser}' AND `IRNC_respuestas`.`id_encuestado` = '{$this->idEncuestado}' AND `IRNC_respuestas`.`id_pregunta_IRNC` >= 43";
  mysql_query($sql_borrarcheckbooks);

  $sql_borrarCOMENTARIOScheckbooks="DELETE FROM IRNC_respuestas_fixed_comxbloque WHERE `IRNC_respuestas_fixed_comxbloque`.`id_user` = '{$idUser}' AND `IRNC_respuestas_fixed_comxbloque`.`id_encuestado` = '{$this->idEncuestado}'";
  mysql_query($sql_borrarCOMENTARIOScheckbooks);

  foreach ($arrayRespuestas as $r_nombre_parametro => $r_valor_parametro) {
  if (substr($r_nombre_parametro,0,strlen("radio_VorF_IRNC_")) == "radio_VorF_IRNC_"){//INICIO
      $id_preg=substr($r_nombre_parametro,strlen("radio_VorF_IRNC_"),strlen($r_nombre_parametro));
      $valRespuesta=$r_valor_parametro;

      $this->sql_update_or_insert_respuesta=

//¿Existe una respuesta registrada para la pregunta {$id_preg} correspondiente
//al encuestado '{$this->idEncuestado}' y registrada por el usuario '{$idUser}'?
     $sql_chequear_siexisterespuesta="select count(*) from IRNC_respuestas
where
	`id_user`='{$idUser}' AND
	`id_encuestado`='{$this->idEncuestado}' AND
	`id_pregunta_IRNC`='{$id_preg}'";
  $respExiste = mysql_query($sql_chequear_siexisterespuesta);
  $respExiste = mysql_fetch_array($respExiste);

 // ECHO "EL IF DIJO ->".$respExiste[0]."<-";
  if($respExiste[0]>0){
    // si la respuesta a la pregunta estaba registrada entonces actualizo la respuesta
    $this->sql_regustrar_respuesta="
UPDATE IRNC_respuestas
	 SET
		`respuesta` = '{$valRespuesta}',
		`comentario` = '{$arrayRespuestas["comentario_{$id_preg}"]}' 
	 WHERE
		`IRNC_respuestas`.`id_user`='{$idUser}' AND
		`IRNC_respuestas`.`id_encuestado`='{$this->idEncuestado}' AND
		`IRNC_respuestas`.`id_pregunta_IRNC` ='{$id_preg}';";
  }
  else{
    //si la respuesta a la pregunta no estaba registrada entonces la registro como nueva
    $this->sql_regustrar_respuesta="
      INSERT INTO `IRNC_respuestas` (
              `id_user` ,
              `respuesta` ,
              `comentario` ,
              `id_encuestado` ,
              `id_pregunta_IRNC`
            )
            VALUES (
              '{$idUser}', '{$valRespuesta}', '{$arrayRespuestas["comentario_{$id_preg}"]}', '{$this->idEncuestado}', '{$id_preg}')";
  }

   //  echo $this->sql_regustrar_respuesta;
     mysql_query($this->sql_regustrar_respuesta);
     } // <| fiiiin>

//****************************
  if (substr($r_nombre_parametro,0,strlen("check_VorF_IRNC_")) == "check_VorF_IRNC_"){//INICIO
      $id_preg=substr($r_nombre_parametro,strlen("check_VorF_IRNC_"),strlen($r_nombre_parametro));
      $valRespuesta=$r_valor_parametro;

    //si la respuesta a la pregunta no estaba registrada entonces la registro como nueva
    $sql_regustrar_respuesta="
      INSERT INTO `IRNC_respuestas` (
              `id_user` ,
              `respuesta` ,
              `comentario` ,
              `id_encuestado` ,
              `id_pregunta_IRNC`
            )
            VALUES (
              '{$idUser}', '{$valRespuesta}', '{$arrayRespuestas["check_VorF_IRNComfix_{$id_preg}"]}', '{$this->idEncuestado}', '{$id_preg}')";
 // echo $sql_regustrar_respuesta;
     mysql_query($sql_regustrar_respuesta);
     } // <| fiiiin>
//****************************
  if (substr($r_nombre_parametro,0,strlen("comentario_bloque")) == "comentario_bloque"){//INICIO
      $num_bloque=substr($r_nombre_parametro,strlen("comentario_bloque"),strlen($r_nombre_parametro));
      $valRespuesta=$r_valor_parametro;

    //si la respuesta a la pregunta no estaba registrada entonces la registro como nueva
    $sql_regustrar_respuesta_cometariosfixed="
      INSERT INTO `IRNC_respuestas_fixed_comxbloque` (
              `id_user` ,
              `comentario` ,
              `id_encuestado` ,
              `bloque_IRNC`
            )
            VALUES (
              '{$idUser}', '{$valRespuesta}', '{$this->idEncuestado}', '{$num_bloque}')";
     //echo $sql_regustrar_respuesta_cometariosfixed;
     mysql_query($sql_regustrar_respuesta_cometariosfixed);
     } // <| fiiiin>

//****************************

  }

if($request->getParameter('esCerrarForm')=="CERRAR"){
  $this->forwardIf(($this->getPorcentajeCompletadoIRNC($idUser,$this->idEncuestado)>=100), $this->getModuleName(),'cerrarInstrumento');
}

}


 /**
  * FINALIZA EL INSTRUMENTO
  *
  * @param sfRequest $request A request object
  */
public function executeCerrarInstrumento(sfWebRequest $request)
{
    $idUser=$this->getUser()->getGuardUser()->getId();
    $this->idEncuestado=$request->getParameter('idEncuestado');

    $sql_actualizar_estadoinistrumento="
    UPDATE estados_instrumentos SET
    `estado` = 'CERRADO',
    `fecha_cierre` = NOW()
     WHERE id_encuestado ='{$this->idEncuestado}' AND
    id_user='{$idUser}' AND
    sigla_instrumento='IRNC' AND
    modalidad_respuesta='SOLO';
    ";
    //echo $sql_actualizar_estadoinistrumento;
    mysql_query($sql_actualizar_estadoinistrumento);
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

$sql_consulta_si_esta_cerrado="SELECT estado,fecha_cierre,tiempo_total_utilizado FROM estados_instrumentos where id_encuestado='{$this->idEncuestado}' AND id_user='{$idUser}' AND modalidad_respuesta='SOLO'";
//echo $sql_consulta_si_esta_cerrado;
$esCerrado = mysql_query($sql_consulta_si_esta_cerrado);
  $esCerrado = mysql_fetch_array($esCerrado);

  if(trim($esCerrado[0])!="CERRADO"){
/**
 * retorna un array con los numeros de bloques y los respectivos nombres del bloque
 */
$sql_listar_bloques="
SELECT pins.`bloque_num`as numBLoque ,pins.bloque_IRNC as textoBloque
            FROM IRNC_preguntas pins where bloque_num<=8
            group by pins.`bloque_num`";

$bloques_result=mysql_query($sql_listar_bloques);
$this->Preguntas_IRNC=array();

while($bloque = mysql_fetch_array($bloques_result)) {

   /**
    * Consulta las preguntas a listar para un encuestado administrado por un usuario
    * dado, tras la consulta devuelve las primeras 20 preguntas que aún no han sido
    * respondidas por el encuestado y las devuelve ordenadas por el número de pregunta;
    * el número de pregunta es mas bien el id de la pregunta dado que esta fue
    * generada con un autoincrement.
    * pins= preguntas del instrumento
    * rins= respuestas del instrumento
    */
    $sql_consulta_preguntas_bloque_IRNC="SELECT pins.id_pregunta_IRNC AS id_pregunta, pins.num_pregunta AS num_pregunta, pins.texto AS texto_pregunta, pins.es_requerido AS es_requerida, pins.bloque_IRNC as textoBloque
        FROM IRNC_preguntas pins
        WHERE pins.`bloque_num` = '{$bloque["numBLoque"]}'
        ORDER BY pins.id_pregunta_IRNC LIMIT 20;";
    //echo $sql_consulta_preguntas_bloque_IRNC."<BR><BR>";
      $result = mysql_query($sql_consulta_preguntas_bloque_IRNC);
      $this->PreguntasDelBloqueArray=array();
      /*pasa el resultado (de tipo mysql result) a un arreglo comun para iterarlo en la vista*/
     while(($resultArray[] = mysql_fetch_assoc($result)) || array_pop($resultArray)){
        $this->PreguntasDelBloqueArray=$resultArray;
     }
     unset($resultArray);
    // print_r($this->PreguntasDelBloqueArray);
  //   echo "<br>";
    $Preguntas_IRNC_local[] = array(
                  "numBLoque"  => $bloque["numBLoque"],
                  "textoBloque"  => $bloque["textoBloque"],
                  "preguntasDelBloque"   => $this->PreguntasDelBloqueArray);
   unset($this->PreguntasDelBloqueArray);

   mysql_free_result($result);
}
mysql_free_result($bloques_result);


      $this->Preguntas_IRNC=$Preguntas_IRNC_local;//fixed error

      $sql_respuestas_pordefecto="
        SELECT respuesta,comentario,id_pregunta_IRNC FROM IRNC_respuestas
           WHERE
            `IRNC_respuestas`.`id_user`='{$idUser}' AND
            `IRNC_respuestas`.`id_encuestado`='{$this->idEncuestado}'";

      $result = mysql_query($sql_respuestas_pordefecto);
      $Respuestas=array();
      /*pasa el resultado (de tipo mysql result) a un arreglo comun para iterarlo en la vista*/
     while(($resultArray[] = mysql_fetch_assoc($result)) || array_pop($resultArray)){
        $Respuestas=$resultArray;
     }

     $this->respuestas=$Respuestas;



$sql_consulta_comentariodebloque9="SELECT comentario FROM IRNC_respuestas_fixed_comxbloque where id_user='{$idUser}' AND id_encuestado='{$this->idEncuestado}' AND bloque_IRNC=9";
$comentariobloque9 = mysql_query($sql_consulta_comentariodebloque9);
$comentariobloque9 = mysql_fetch_array($comentariobloque9);
$this->comentariobloque9=$comentariobloque9[0];



$sql_consulta_comentariodebloque10="SELECT comentario FROM IRNC_respuestas_fixed_comxbloque where id_user='{$idUser}' AND id_encuestado='{$this->idEncuestado}' AND bloque_IRNC=10";
$comentariobloque10 = mysql_query($sql_consulta_comentariodebloque10);
$comentariobloque10 = mysql_fetch_array($comentariobloque10);
$this->comentariobloque10=$comentariobloque10[0];

     //  echo "DDDD".$this->respuestas[0]["respuesta"]."DDDD";

     $this->porcCompletado=$this->getPorcentajeCompletadoIRNC($idUser,$this->idEncuestado);
     // $this->porcCompletado=0;

      if($this->porcCompletado >0){
        $this->is_show_instruccions='false';
      }else{
        $this->is_show_instruccions='false';//true
      }
      return sfView::SUCCESS;
  }//FIN IF
  else{

$this->datocierre="Cerrado el ".$esCerrado[1].", en un tiempo total de respuesta de ".$esCerrado[2];

    return sfView::ERROR;
  }


}




}
