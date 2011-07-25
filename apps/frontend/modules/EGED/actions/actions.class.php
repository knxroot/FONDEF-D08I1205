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
     
    $this->forward('EGED','mostrarFormulario');
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

                $this->GuardarInstrumento($request, 'eged2_respuestas',1); //guarda todas las variables del usuario actual cara de palo en la BD
                $this->GuardarTiempo($request,'EGED_CONSENSO');
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
                $this->GuardarInstrumento($request, 'eged2_respuestas');
                $this->GuardarTiempo($request,'EGED');
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
                $this->forward404If(!$this->esCerrado2($request, 'eged2_respuestas',0));

                
                // se verifica si ya se cerró el modo consenso
                if($this->esCerrado2($request, 'eged2_respuestas',1)){
                  return $this->forward('EGED','Cerrado'); 
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
                

                $this->coincidencias=$this->generarListaBloqueadosCruce($this->idEncuestado,'eged2_respuestas', $idUser, $idResponsableSecundario);
                unset($this->coincidencias['CLOSE_FLAG']);

                $this->respuestasGuardadas=$this->coincidencias;//a diferencia de los otros este no se va guardando entonces siempre carga las coincidencias en pantalla

                $this->respuestasGuardadas=json_encode($this->respuestasGuardadas);
                $this->tstart=$this->getTimeStart();
                $this->consenso=1;
                
                $sql_consulta_preguntas_bloque_EGED="SELECT mp.id_pregunta_EGED AS id_pregunta, mp.texto AS texto_pregunta, mp.es_requerido AS es_requerida, mp.instruccion AS instrucciones
                                                     FROM EGED_preguntas mp
                                                     ORDER BY mp.id_pregunta_EGED
                                                     LIMIT 20;";

                  $result = mysql_query($sql_consulta_preguntas_bloque_EGED);

                  /*pasa el resultado (de tipo mysql result) a un arreglo comun para iterarlo en la vista*/
                  while(($resultArray[] = mysql_fetch_assoc($result)) || array_pop($resultArray)){
                    $this->Preguntas_EGED=$resultArray;
                  }
                
            }else{
                
              if($this->esCerrado($request, 'eged2_respuestas')){
                return $this->forward('EGED','Cerrado');
              }
              $this->idEncuestado = $request->getParameter('idEncuestado');
              $this->forward404If(!$this->idEncuestado);
              $this->respuestasGuardadas=''; //solo para que no falle en la vista pero esto no se usa en el eged
              $this->tstart=$this->getTimeStart(); 
              $this->consenso=0;
              
                $sql_consulta_preguntas_bloque_EGED="SELECT mp.id_pregunta_EGED AS id_pregunta, mp.texto AS texto_pregunta, mp.es_requerido AS es_requerida, mp.instruccion AS instrucciones
                                                     FROM EGED_preguntas mp
                                                     ORDER BY mp.id_pregunta_EGED
                                                     LIMIT 20;";

                  $result = mysql_query($sql_consulta_preguntas_bloque_EGED);
                  /*pasa el resultado (de tipo mysql result) a un arreglo comun para iterarlo en la vista*/
                  while(($resultArray[] = mysql_fetch_assoc($result)) || array_pop($resultArray)){
                    $this->Preguntas_EGED=$resultArray;
                  }
            }
        }
        
        public function executeCerrado(sfWebRequest $request)
        {
               $this->idEncuestado=$request->getParameter('idEncuestado');
            
        }

}
