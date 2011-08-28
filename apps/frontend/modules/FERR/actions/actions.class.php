<?php

/**
 * FERR actions.
 *
 * @package    psicologia
 * @subpackage FERR
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class FERRActions extends Actions
{

 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
     
    $this->forward('FERR','mostrarFormulario');
  }
  
        public function executeSubirArchivo(sfWebRequest $request)
        {
          //$fileName = $this->getRequest()->getFileName('file');
         // $this->getRequest()->moveFile('file', sfConfig::get('sf_upload_dir').'/'.$fileName);
          //$this->redirect('media/show?filename='.$fileName);
isset($_GET['qqfile'])


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

                $this->GuardarInstrumento($request, 'ferr2_respuestas',1); //guarda todas las variables del usuario actual cara de palo en la BD
                $this->GuardarTiempo($request,'FERR_CONSENSO');
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
                $this->GuardarInstrumento($request, 'ferr2_respuestas');
                $this->GuardarTiempo($request,'FERR');
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
                $this->forward404If(!$this->esCerrado2($request, 'ferr2_respuestas',0));

                
                // se verifica si ya se cerró el modo consenso
                if($this->esCerrado2($request, 'ferr2_respuestas',1)){
                  return $this->forward('FERR','Cerrado'); 
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
                
                $this->respuestasGuardadas=$this->preparaMostrarFormulario($request, 'ferr2_respuestas',1,true);
                $this->coincidencias=$this->generarListaBloqueadosCruce($this->idEncuestado,'ferr2_respuestas', $idUser, $idResponsableSecundario);
                unset($this->coincidencias['CLOSE_FLAG']);

                
                if(count($this->respuestasGuardadas)<=1){
                    $this->respuestasGuardadas=$this->coincidencias;//esto deberia ocurrir exclusivamente la primera vez solamente
                }


                
                $this->respuestasGuardadas=json_encode($this->respuestasGuardadas);
                $this->coincidencias=json_encode($this->coincidencias);      
                
                $this->tstart=$this->getTimeStart();
                $this->consenso=1;
                
            }else{
                
              if($this->esCerrado($request, 'ferr2_respuestas')){
                return $this->forward('FERR','Cerrado');
              }
              $this->idEncuestado = $request->getParameter('idEncuestado');
              $this->forward404If(!$this->idEncuestado);
              $this->respuestasGuardadas=$this->preparaMostrarFormulario($request, 'ferr2_respuestas');
              $this->tstart=$this->getTimeStart(); 
              $this->consenso=0;
            }
        }
        
        public function executeCerrado(sfWebRequest $request)
        {
               $this->idEncuestado=$request->getParameter('idEncuestado');
            
        }

}
