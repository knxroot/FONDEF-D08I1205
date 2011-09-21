<?php

/**
 * FERR actions.
 *
 * @package    psicologia
 * @subpackage FERR
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CausasAnterioresActions extends Actions
{

 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('CausasAnteriores','mostrarFormulario');
  }
  
       
        
	public function executeGuardarInstrumento(sfWebRequest $request)
	{
		$this->GuardarInstrumento($request, 'CausasAnteriores_respuestas'); //guarda todas las variables del usuario actual cara de palo en la BD
                  $this->GuardarTiempo($request,'CausasAnteriores');
	}
         /**
          * Lista las preguntas del formulario
          *
          * @param sfRequest $request A request object
          */
        public function executeMostrarFormulario(sfWebRequest $request)
        {
              // preparaMostrarFormulario retorna un JSON que se usa para mostrar el instrumento
    if($this->esCerrado($request, 'causasanteriores_respuestas')){
         return $this->forward('CausasAnteriores','Cerrado');;
    }
             $this->respuestasGuardadas=$this->preparaMostrarFormulario($request, 'causasanteriores_respuestas');
        
                $this->tstart=$this->getTimeStart();  
             
        }
        
        public function executeCerrado(sfWebRequest $request)
        {
               $this->idEncuestado=$request->getParameter('idEncuestado');
            
        }
            public function executeConsultaMateriaDelito(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
    $esAjax = $request->isXmlHttpRequest();/*true si es una peticion por ajax*/
    $this->forward404Unless($esAjax);/*lo envia a error 404 a menos que sea una peticion ajax*/
    //$this->getResponse()->setHttpHeader('Content-type','text/json');
      /*MysqlBD::BD_Conectar();CONECTO CON MI CLASE TEMPORAL PARA NO COMPLICARME CON ORM*/
      $this->BD_Conectar();

      $sql_obtieneMateriasDelito = "SELECT
                                    c_ingreso_materia.id_materia,
                                    c_ingreso_materia.materia
                                  FROM
                                    c_ingreso_materia
                                  ORDER BY
                                    c_ingreso_materia.id_materia ASC";


      $materias = mysql_query($sql_obtieneMateriasDelito);
      $respuesta="";
      while($materia=mysql_fetch_array($materias))
      {
        $respuesta=$respuesta."<option value='".$materia["id_materia"]."'>".$materia["materia"]."</option><br>";
      }
      return $this->renderText($respuesta);
  }
  public function executeConsultaCausaDelito(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
    $esAjax = $request->isXmlHttpRequest();/*true si es una peticion por ajax*/
    $this->forward404Unless($esAjax);/*lo envia a error 404 a menos que sea una peticion ajax*/
    //$this->getResponse()->setHttpHeader('Content-type','text/json');
      /*MysqlBD::BD_Conectar();CONECTO CON MI CLASE TEMPORAL PARA NO COMPLICARME CON ORM*/
      $this->BD_Conectar();

      $sql_obtieneCausasDelitos = "SELECT
                                c_ingreso_causa.id_causa,
                                c_ingreso_causa.causa_nombre,
                                c_ingreso_causa.id_materia
                              FROM
                                c_ingreso_causa
                              INNER JOIN c_ingreso_materia ON c_ingreso_materia.id_materia = c_ingreso_causa.id_materia
                              WHERE
                                c_ingreso_causa.id_materia = '".$request->getParameter('materia')."'";
      

      $causas = mysql_query($sql_obtieneCausasDelitos);
      $respuesta="";
      while($causa=mysql_fetch_array($causas))
      {
        $respuesta=$respuesta."<option value='".$causa["id_causa"]."'>".$causa["causa_nombre"]."</option><br>";
      }
      return $this->renderText($respuesta);
  }
}
