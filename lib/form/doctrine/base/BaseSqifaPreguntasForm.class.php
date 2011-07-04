<?php

/**
 * SqifaPreguntas form base class.
 *
 * @method SqifaPreguntas getObject() Returns the current form's model object
 *
 * @package    psicologia
 * @subpackage form
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSqifaPreguntasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_pregunta_sqifa' => new sfWidgetFormInputHidden(),
      'num_pregunta'      => new sfWidgetFormInputText(),
      'texto'             => new sfWidgetFormInputText(),
      'es_requerido'      => new sfWidgetFormInputText(),
      'bloque_num'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_pregunta_sqifa' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_pregunta_sqifa')), 'empty_value' => $this->getObject()->get('id_pregunta_sqifa'), 'required' => false)),
      'num_pregunta'      => new sfValidatorInteger(array('required' => false)),
      'texto'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'es_requerido'      => new sfValidatorInteger(array('required' => false)),
      'bloque_num'        => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('sqifa_preguntas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SqifaPreguntas';
  }

}
