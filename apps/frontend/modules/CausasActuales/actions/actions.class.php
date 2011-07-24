<?php

/**
 * FERR actions.
 *
 * @package    psicologia
 * @subpackage FERR
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CausasActualesActions extends Actions
{

 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('CausasActuales','mostrarFormulario');
  }
  
       
        
	public function executeGuardarInstrumento(sfWebRequest $request)
	{
		$this->GuardarInstrumento($request, 'causasactuales_respuestas'); //guarda todas las variables del usuario actual cara de palo en la BD
                  $this->GuardarTiempo($request,'CausasActuales');
	}
         /**
          * Lista las preguntas del formulario
          *
          * @param sfRequest $request A request object
          */
        public function executeMostrarFormulario(sfWebRequest $request)
        {
              // preparaMostrarFormulario retorna un JSON que se usa para mostrar el instrumento
    if($this->esCerrado($request, 'causasactuales_respuestas')){
         return $this->forward('CausasActuales','Cerrado');;
    }
             $this->respuestasGuardadas=$this->preparaMostrarFormulario($request, 'causasactuales_respuestas');
        
                $this->tstart=$this->getTimeStart();  
             
        }
        
        public function executeCerrado(sfWebRequest $request)
        {
               $this->idEncuestado=$request->getParameter('idEncuestado');
            
        }
}
