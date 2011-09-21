<?php

/**
 * Ferr2Respuestas form base class.
 *
 * @method Ferr2Respuestas getObject() Returns the current form's model object
 *
 * @package    psicologia
 * @subpackage form
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFerr2RespuestasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'id_respuesta'  => new sfWidgetFormInputText(),
      'respuesta'     => new sfWidgetFormInputText(),
      'id_user'       => new sfWidgetFormInputText(),
      'id_encuestado' => new sfWidgetFormInputText(),
      'concensomode'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'id_respuesta'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'respuesta'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'id_user'       => new sfValidatorInteger(array('required' => false)),
      'id_encuestado' => new sfValidatorInteger(array('required' => false)),
      'concensomode'  => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ferr2_respuestas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ferr2Respuestas';
  }

}
