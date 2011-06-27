<?php

/**
 * ENTREVISTA actions.
 *
 * @package    psicologia
 * @subpackage ENTREVISTA
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ENTREVISTAActions extends Actions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('ENTREVISTA', 'mostrarFormulario');
  }
  
 /**
  * Lista las preguntas del formulario
  *
  * @param sfRequest $request A request object
  */
   public function executeMostrarFormulario(sfWebRequest $request)
   {
     $this->BD_Conectar();
     $idUser=$this->getUser()->getGuardUser()->getId();
     $this->idEncuestado=$request->getParameter('idEncuestado');
     $this->forward404If(!$this->idEncuestado);
    /* Siempre se muestra vacio dado que una vez que envia el formulari
      ya no puede volver a modificarlo, por lo tanto se va directo a la vista*/
     if($this->esCerrado($request, 'entrevista_respuestas')){
         return  sfView::ERROR;
     }
     return sfView::SUCCESS;
   }
   
   
 /**
  * Lista las preguntas del formulario
  *
  * @param sfRequest $request A request object
  */
   public function executeGuardarInstrumento(sfWebRequest $request)
   {
     $this->BD_Conectar();
     $idUser=$this->getUser()->getGuardUser()->getId();
     $this->idEncuestado=$request->getParameter('idEncuestado');
     $this->forward404If(!$this->idEncuestado);
     $this->GuardarInstrumento($request, 'entrevista_respuestas');
     
   }
   
   
   
   
   
}
