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
                
                /* START para el loader del iframe*/
                $this->modoConsenso=$this->consenso;
                $this->idEncuestado=$request->getParameter('idEncuestado');
                $this->nombremodulo="FERR";
                /* END para el loader del iframe*/
            }else{
                
              if($this->esCerrado($request, 'ferr2_respuestas')){
                return $this->forward('FERR','Cerrado');
              }
              $this->idEncuestado = $request->getParameter('idEncuestado');
              $this->forward404If(!$this->idEncuestado);
              $this->respuestasGuardadas=$this->preparaMostrarFormulario($request, 'ferr2_respuestas');
              $this->tstart=$this->getTimeStart(); 
              $this->consenso=0;

                /* START para el loader del iframe*/
                $this->modoConsenso=$this->consenso;
                $this->idEncuestado=$request->getParameter('idEncuestado');
                $this->nombremodulo="FERR";
                /* END para el loader del iframe*/
            }
        }
        
        public function executeCerrado(sfWebRequest $request)
        {
               $this->idEncuestado=$request->getParameter('idEncuestado');
            
        }

}
