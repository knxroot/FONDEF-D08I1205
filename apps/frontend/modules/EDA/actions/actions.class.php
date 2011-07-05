<?php

class EDAActions extends Actions
{   
    /**
     * Muestra el instrumento vacio para llenarlo
     * @param sfWebRequest $request
     */
    public function executeIndex(sfWebRequest $request)
    {
        // Cargar configuracion de instrumento
        $this->config = $this->loadItems(__DIR__.'/../config/items.yml');

        $this->iniciado = true;
      $this->respuestasGuardadas=$this->preparaMostrarFormulario($request, 'eda_respuestas');
       
      if($this->esCerrado($request, 'eda_respuestas')){
         return      $this->forward('EDA','Cerrado');;
     }
     return sfView::SUCCESS;
    }
    
     public function executeMostrarFormulario(sfWebRequest $request)
        {
              // preparaMostrarFormulario retorna un JSON que se usa para mostrar el instrumento

             $this->respuestasGuardadas=$this->preparaMostrarFormulario($request, 'eda_respuestas');
        }
        
        public function executeCerrado(sfWebRequest $request)
        {
               $this->idEncuestado=$request->getParameter('idEncuestado');
            
        }

        
    /**
     * Guarda el instrumento y obtiene su porcentaje de llenado
     * @param sfWebRequest $request
     */
   public function executeGuardarInstrumento(sfWebRequest $request)
	{
		$this->GuardarInstrumento($request, 'eda_respuestas'); //guarda todas las variables del usuario actual cara de palo en la BD
	}
    
    /**
     * Lee los datos de un instrumento especifico a un usuario y
     * entrevistador. Luego redirige a executeIndex para mostrarlo.
     * @param sfWebRequest $request
     */
    public function executeRead(sfWebRequest $request)
    {
        // Obtiene el Id de Encuestado 
        $encuestadoId = $request->getParameter('idEncuestado');
        
        // Verifica si existe una entrada en la base de datos para
        // esta encuesta respondida
        
        // Si es si, se obtienen las respuestas
        
        // Si es no, se redirecciona a 
    }
}   
