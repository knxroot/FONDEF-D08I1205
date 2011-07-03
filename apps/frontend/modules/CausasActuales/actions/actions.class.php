<?php

/**
 * CausasActuales actions.
 *
 * @package    psicologia
 * @subpackage CausasActuales
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CausasActualesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->encuestado_actinputados = Doctrine::getTable('EncuestadoActinputado')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new EncuestadoActinputadoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new EncuestadoActinputadoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($encuestado_actinputado = Doctrine::getTable('EncuestadoActinputado')->find(array($request->getParameter('id'))), sprintf('Object encuestado_actinputado does not exist (%s).', $request->getParameter('id')));
    $this->form = new EncuestadoActinputadoForm($encuestado_actinputado);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($encuestado_actinputado = Doctrine::getTable('EncuestadoActinputado')->find(array($request->getParameter('id'))), sprintf('Object encuestado_actinputado does not exist (%s).', $request->getParameter('id')));
    $this->form = new EncuestadoActinputadoForm($encuestado_actinputado);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($encuestado_actinputado = Doctrine::getTable('EncuestadoActinputado')->find(array($request->getParameter('id'))), sprintf('Object encuestado_actinputado does not exist (%s).', $request->getParameter('id')));
    $encuestado_actinputado->delete();

    $this->redirect('CausasActuales/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $encuestado_actinputado = $form->save();

      $this->redirect('CausasActuales/edit?id='.$encuestado_actinputado->getId());
    }
  }
}
