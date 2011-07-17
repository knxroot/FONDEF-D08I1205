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

          $directory=sfConfig::get('sf_upload_dir')."/GNOPRO/";
          if ($request->isXmlHttpRequest())
          {
            $uploader = new qqFileUploader();
            $result = $uploader->handleUpload($directory);
            $result = htmlspecialchars(json_encode($result), ENT_NOQUOTES);
            return $this->renderText($result);
          }
        }
        
	public function executeGuardarInstrumento(sfWebRequest $request)
	{
		$this->GuardarInstrumento($request, 'ferr2_respuestas'); //guarda todas las variables del usuario actual cara de palo en la BD
                 $this->GuardarTiempo($request,'FERR');
	}
         /**
          * Lista las preguntas del formulario
          *
          * @param sfRequest $request A request object
          */
        public function executeMostrarFormulario(sfWebRequest $request)
        {
              // preparaMostrarFormulario retorna un JSON que se usa para mostrar el instrumento
    if($this->esCerrado($request, 'ferr2_respuestas')){
         return $this->forward('FERR','Cerrado');;
    }
             $this->respuestasGuardadas=$this->preparaMostrarFormulario($request, 'ferr2_respuestas');
        
             
                $this->tstart=$this->getTimeStart();  
        }
        
        public function executeCerrado(sfWebRequest $request)
        {
               $this->idEncuestado=$request->getParameter('idEncuestado');
            
        }

}
