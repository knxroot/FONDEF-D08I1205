<?php

/**
 * FerrRespuestas form base class.
 *
 * @method FerrRespuestas getObject() Returns the current form's model object
 *
 * @package    psicologia
 * @subpackage form
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFerrRespuestasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_user'       => new sfWidgetFormInputHidden(),
      'respuesta'     => new sfWidgetFormInputText(),
      'id_encuestado' => new sfWidgetFormInputHidden(),
      'id_respuesta'  => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id_user'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_user')), 'empty_value' => $this->getObject()->get('id_user'), 'required' => false)),
      'respuesta'     => new sfValidatorString(array('max_length' => 255)),
      'id_encuestado' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_encuestado')), 'empty_value' => $this->getObject()->get('id_encuestado'), 'required' => false)),
      'id_respuesta'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_respuesta')), 'empty_value' => $this->getObject()->get('id_respuesta'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ferr_respuestas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'FerrRespuestas';
  }

}
