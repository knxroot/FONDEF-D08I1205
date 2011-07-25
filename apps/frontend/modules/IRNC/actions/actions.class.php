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
     
    $this->forward('IRNC','mostrarFormulario');
  }
  
        public function executeSubirArchivo(sfWebRequest $request)
        {
          //$fileName = $this->getRequest()->getFileName('file');
         // $this->getRequest()->moveFile('file', sfConfig::get('sf_upload_dir').'/'.$fileName);
          //$this->redirect('media/show?filename='.$fileName);

          $directory=sfConfig::get('sf_upload_dir')."/GNOPRO/";
          if ($request->isXmlHttpRequest())
          {
            $uploader = new qqFileUploader();
            $result = $uploader->handleUpload($directory);
            $result = htmlspecialchars(json_encode($result), ENT_NOQUOTES);
            return $this->renderText($result);
          }
        }
        
	public function executeGuardarInstrumento(sfWebRequest $request){
            $modoConsenso = $request->getParameter('modoConsenso');
            
            // si se esta tratando de responder en modoConsenso
            if($modoConsenso==true){
                $this->consenso=1;
               /* verifica que quien esta tratando de entrar en modo consenso no
                sea un evaluador secundario que se esta 'balsiando'*/ 
                $esEvaluadorSecundario=$this->soyResponsableSecundario($request);
                $this->forward404If($esEvaluadorSecundario);

                $this->GuardarInstrumento($request, 'irnc2_respuestas',1); //guarda todas las variables del usuario actual cara de palo en la BD
                $this->GuardarTiempo($request,'IRNC_CONSENSO');
                // El tiempo del consenso se guarda como si fuera otro módulo,
                //ok, se que estarás pensando: ¿cómo es posible que no siga un 
                //estándar para guardar las cosas relacionadas al modo consenso?
                //,quiero aclara que esto es exclusivamente por culpa de los 
                // psicólogos que andan cambiando las cosas a último momento!!,
                // y tengo que estar trabajando en un poyecto horriblemente mal
                // planificado. No pienso cambiar a último momento la BD porque
                // afecta la estabilidad del sistema que ya esta ultra inestable
                // por lo lo que preferí usar un nombre de módulo diferente
                // para no afectar todo el resto de módulos que usan este método.
            }else{
                $this->GuardarInstrumento($request, 'irnc2_respuestas');
                $this->GuardarTiempo($request,'IRNC');
            }

	}
         /**
          * Lista las preguntas del formulario
          *
          * @param sfRequest $request A request object
          */
       public function executeMostrarFormulario(sfWebRequest $request)
        {
            $modoConsenso = $request->getParameter('modoConsenso');
            // si se esta tratando de responder en modoConsenso
            if($modoConsenso==true){
                
                /* verifica que quien esta tratando de entra en modo consenso no
                sea un evaluador secundario que se esta balsiando*/ 
                $esEvaluadorSecundario=$this->soyResponsableSecundario($request);
                $this->forward404If($esEvaluadorSecundario);
                
                /* para que el evaluador principal pueda entrar a modo consenso
                 * debe primero haber cerrado el formulario en modo normal.
                 * se verifica entonces que si ya se cerró en modo normal, sino
                 * lo envío a 404.
                 */
                $this->forward404If(!$this->esCerrado2($request, 'irnc2_respuestas',0));

                
                // se verifica si ya se cerró el modo consenso
                if($this->esCerrado2($request, 'irnc2_respuestas',1)){
                  return $this->forward('IRNC','Cerrado'); 
                }
                
                

                // ademas obviamente debe traer un id encuestado 
                $this->idEncuestado = $request->getParameter('idEncuestado');
                $this->forward404If(!$this->idEncuestado);
                
                /*primero obtengo las respuestas que fueron guardadas en modo
                 * consenso, es decir, con el usuario actual (principal)marcando
                 *  modo consenso. Luego obtengo lo que el usuario actual había
                 * respondido sin modo consenso.
                 */
                $idResponsableSecundario=$this->getIDResponsableSecundario($this->idEncuestado);
                
                $idUser=$this->getUser()->getGuardUser()->getId();
                
                $this->respuestasGuardadas=$this->preparaMostrarFormulario($request, 'irnc2_respuestas',1,true);
                $this->coincidencias=$this->generarListaBloqueadosCruce($this->idEncuestado,'irnc2_respuestas', $idUser, $idResponsableSecundario);
                unset($this->coincidencias['CLOSE_FLAG']);

                
                if(count($this->respuestasGuardadas)<=1){
                    $this->respuestasGuardadas=$this->coincidencias;//esto deberia ocurrir exclusivamente la primera vez solamente
                }


                
                $this->respuestasGuardadas=json_encode($this->respuestasGuardadas);
                $this->coincidencias=json_encode($this->coincidencias);      
                
                $this->tstart=$this->getTimeStart();
                $this->consenso=1;
                
            }else{
                
              if($this->esCerrado($request, 'irnc2_respuestas')){
                return $this->forward('IRNC','Cerrado');
              }
              $this->idEncuestado = $request->getParameter('idEncuestado');
              $this->forward404If(!$this->idEncuestado);
              $this->respuestasGuardadas=$this->preparaMostrarFormulario($request, 'irnc2_respuestas');
              $this->tstart=$this->getTimeStart(); 
              $this->consenso=0;
            }
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


      
            
            
        }
        
        public function executeCerrado(sfWebRequest $request)
        {
               $this->idEncuestado=$request->getParameter('idEncuestado');
            
        }

}
