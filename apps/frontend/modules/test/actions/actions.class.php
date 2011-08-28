<?php

/**
 * test actions.
 *
 * @package    psicologia
 * @subpackage test
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class testActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
  //  $this->forward('default', 'module');

     $this->idUser=$this->getUser()->getGuardUser()->getId();
     $this->idEncuestado=$request->getParameter('idEncuestado');
  }
}
