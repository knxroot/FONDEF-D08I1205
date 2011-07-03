<?php

/**
 * SeccionInstrumento form base class.
 *
 * @method SeccionInstrumento getObject() Returns the current form's model object
 *
 * @package    psicologia
 * @subpackage form
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSeccionInstrumentoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'instrumento_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Instrumento'), 'add_empty' => false)),
      'seccion_id'     => new sfWidgetFormInputText(),
      'nombre'         => new sfWidgetFormInputText(),
      'titulo'         => new sfWidgetFormInputText(),
      'descripcion'    => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'instrumento_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Instrumento'))),
      'seccion_id'     => new sfValidatorInteger(array('required' => false)),
      'nombre'         => new sfValidatorString(array('max_length' => 140)),
      'titulo'         => new sfValidatorString(array('max_length' => 140)),
      'descripcion'    => new sfValidatorString(array('max_length' => 300)),
    ));

    $this->widgetSchema->setNameFormat('seccion_instrumento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SeccionInstrumento';
  }

}
