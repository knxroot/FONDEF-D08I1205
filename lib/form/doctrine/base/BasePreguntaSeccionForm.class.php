<?php

/**
 * PreguntaSeccion form base class.
 *
 * @method PreguntaSeccion getObject() Returns the current form's model object
 *
 * @package    psicologia
 * @subpackage form
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePreguntaSeccionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'nombre'     => new sfWidgetFormInputText(),
      'enunciado'  => new sfWidgetFormTextarea(),
      'seccion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SeccionInstrumento'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 140, 'required' => false)),
      'enunciado'  => new sfValidatorString(array('max_length' => 300, 'required' => false)),
      'seccion_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SeccionInstrumento'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pregunta_seccion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PreguntaSeccion';
  }

}
