<?php

/**
 * modorespuesta actions.
 *
 * @package    psicologia
 * @subpackage modorespuesta
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class modorespuestaActions extends Actions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->BD_Conectar();
		$idUser=$this->getUser()->getGuardUser()->getId();
		$this->idEncuestado=$request->getParameter('idEncuestado');
    $this->nombremodulo=$request->getParameter('nombremodulo');
		$this->forward404If(!$this->idEncuestado);
    $MOD_VALIDOS = array("ENTREVISTA", "CAIE", "CACSA", "EDA", "SQIFA", "DEP_ADO", "MACI", "CSVE", "JIR", "CONCLUSIONES");
    $this->forward404If(!in_array($this->nombremodulo, $MOD_VALIDOS));
    $habraalgo="SELECT * FROM `modo_respuesta` WHERE `id_user`={$idUser} AND `id_encuestado`={$this->idEncuestado} AND `nombre_modulo`='{$this->nombremodulo}' LIMIT 1";
    $result = mysql_query($habraalgo);
		$rows=mysql_num_rows($result);
    if ($rows > 0)
		{
      $this->redirect($this->nombremodulo.'/index?idEncuestado='.$this->idEncuestado);
    }
    
    $SQL_CONSULTA_NOMBRE="SELECT `input_primer_nombre` , `input_otros_nombres` , `input_primer_apellido` , `input_segundo_apellido`
                              FROM `encuestado`
                              WHERE `id_encuestado` = '{$this->idEncuestado}'
                              LIMIT 1";
    $r = mysql_fetch_array(mysql_query($SQL_CONSULTA_NOMBRE));
    $this->nombreEncuestado=$r[0]." ".$r[1]." ".$r[2]." ".$r[3];
  }
  
  public function executeGuardarModoRespuesta(sfWebRequest $request)
  {
    $this->BD_Conectar();
		$idUser=$this->getUser()->getGuardUser()->getId();
		$this->idEncuestado=$request->getParameter('idEncuestado');
    $this->nombremodulo=$request->getParameter('nombremodulo');
    $this->modalidad=$request->getParameter('modalidad');
    
		$this->forward404If(!$this->idEncuestado);
    $MOD_VALIDOS = array("ENTREVISTA", "CAIE", "CACSA", "EDA", "SQIFA", "DEP_ADO", "MACI", "CSVE", "JIR", "CONCLUSIONES");
    $this->forward404If(!in_array($this->nombremodulo, $MOD_VALIDOS));
    
    $sqlGuardar="INSERT INTO `modo_respuesta` (modo ,nombre_modulo,id_user,id_encuestado) VALUES (
				'{$this->modalidad}', 
				'{$this->nombremodulo}', 
				'{$idUser}', 
				'{$this->idEncuestado}' );"; 
				
     $result = mysql_query($sqlGuardar);
     if (!$result) {
      $message  = 'Consulta invalida en la BD: ' . mysql_error() . "\n";
      die($message);
     }

      $this->redirect($this->nombremodulo.'/index?idEncuestado='.$this->idEncuestado);
      
  }
}
