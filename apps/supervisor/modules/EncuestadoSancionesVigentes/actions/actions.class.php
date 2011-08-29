<?php

/**
 * EncuestadoSancionesVigentes actions.
 *
 * @package    psicologia
 * @subpackage EncuestadoSancionesVigentes
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EncuestadoSancionesVigentesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->encuestado_sancioness = Doctrine::getTable('EncuestadoSanciones')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new EncuestadoSancionesForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new EncuestadoSancionesForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($encuestado_sanciones = Doctrine::getTable('EncuestadoSanciones')->find(array($request->getParameter('id'))), sprintf('Object encuestado_sanciones does not exist (%s).', $request->getParameter('id')));
    $this->form = new EncuestadoSancionesForm($encuestado_sanciones);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($encuestado_sanciones = Doctrine::getTable('EncuestadoSanciones')->find(array($request->getParameter('id'))), sprintf('Object encuestado_sanciones does not exist (%s).', $request->getParameter('id')));
    $this->form = new EncuestadoSancionesForm($encuestado_sanciones);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($encuestado_sanciones = Doctrine::getTable('EncuestadoSanciones')->find(array($request->getParameter('id'))), sprintf('Object encuestado_sanciones does not exist (%s).', $request->getParameter('id')));
    $encuestado_sanciones->delete();

    $this->redirect('EncuestadoSancionesVigentes/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $encuestado_sanciones = $form->save();

      $this->redirect('EncuestadoSancionesVigentes/edit?id='.$encuestado_sanciones->getId());
    }
  }
}
