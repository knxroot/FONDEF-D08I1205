<?php

/**
 * FERR actions.
 *
 * @package    psicologia
 * @subpackage FERR
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class FCMFActions extends Actions
{

 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('FCMF','mostrarFormulario');
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
                $this->GuardarInstrumento($request, 'fcmf_respuestas',1); //guarda todas las variables del usuario actual cara de palo en la BD
            }else{
                $this->GuardarInstrumento($request, 'fcmf_respuestas'); 
            }
          $this->GuardarTiempo($request,'FCMF');
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
                
                // se verifica si ya se cerró el modo consenso
                if($this->esCerrado2($request, 'fcmf_respuestas',1)){
                  return $this->forward('FCMF','Cerrado'); 
                }

                // ademas obiamente debe traer un id encuestado 
                $this->idEncuestado = $request->getParameter('idEncuestado');
                $this->forward404If(!$this->idEncuestado);
                
                /*primero obtengo las respuestas que fueron guardadas en modo
                 * consenso, es decir, con el usuario actual (principal)marcando
                 *  modo consenso. Luego obtengo lo que el usuario actual había
                 * respondido sin modo consenso.
                 */
                $idResponsableSecundario=$this->getIDResponsableSecundario($this->idEncuestado);
                
                $idUser=$this->getUser()->getGuardUser()->getId();
                
                $this->respuestasGuardadas=$this->preparaMostrarFormulario($request, 'fcmf_respuestas',1,true);
                $this->coincidencias=$this->generarListaBloqueadosCruce($this->idEncuestado,'fcmf_respuestas', $idUser, $idResponsableSecundario);
                if(count($this->respuestasGuardadas)<=1){
                    $this->respuestasGuardadas=$this->coincidencias;//esto deberia ocurrir exclusivamente la primera vez solamente
                }
                $this->respuestasGuardadas=json_encode($this->respuestasGuardadas);
                $this->coincidencias=json_encode($this->coincidencias);      
                
                $this->tstart=$this->getTimeStart();
                $this->consenso=1;
                
            }else{
                
              if($this->esCerrado($request, 'fcmf_respuestas')){
                return $this->forward('FCMF','Cerrado');
              }
              $this->idEncuestado = $request->getParameter('idEncuestado');
              $this->forward404If(!$this->idEncuestado);
              $this->respuestasGuardadas=$this->preparaMostrarFormulario($request, 'fcmf_respuestas');
              $this->tstart=$this->getTimeStart(); 
              $this->consenso=0;
            }
        }
        
        public function executeCerrado(sfWebRequest $request)
        {
               $this->idEncuestado=$request->getParameter('idEncuestado');
            
        }
}
