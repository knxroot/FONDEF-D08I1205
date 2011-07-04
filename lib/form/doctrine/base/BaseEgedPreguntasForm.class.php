<?php

/**
 * EgedPreguntas form base class.
 *
 * @method EgedPreguntas getObject() Returns the current form's model object
 *
 * @package    psicologia
 * @subpackage form
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEgedPreguntasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_pregunta_eged' => new sfWidgetFormInputHidden(),
      'num_pregunta'     => new sfWidgetFormInputText(),
      'texto'            => new sfWidgetFormInputText(),
      'instruccion'      => new sfWidgetFormInputText(),
      'es_requerido'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_pregunta_eged' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_pregunta_eged')), 'empty_value' => $this->getObject()->get('id_pregunta_eged'), 'required' => false)),
      'num_pregunta'     => new sfValidatorInteger(array('required' => false)),
      'texto'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'instruccion'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'es_requerido'     => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('eged_preguntas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EgedPreguntas';
  }

}
