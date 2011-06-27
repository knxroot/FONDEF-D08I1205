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

        // 
        $this->iniciado = true;
    }
        
    /**
     * Guarda el instrumento y obtiene su porcentaje de llenado
     * @param sfWebRequest $request
     */
    public function executeSave(sfWebRequest $request)
    {
        $dom = new XmlDomConstruct('1.0', 'utf-8');
        $dom->fromMixed($request->getPostParameters());
        
        return $this->renderText(json_encode($request->getPostParameters()));
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
