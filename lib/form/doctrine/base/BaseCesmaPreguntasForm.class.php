<?php

/**
 * CesmaPreguntas form base class.
 *
 * @method CesmaPreguntas getObject() Returns the current form's model object
 *
 * @package    psicologia
 * @subpackage form
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCesmaPreguntasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_pregunta_cesma' => new sfWidgetFormInputHidden(),
      'num_pregunta'      => new sfWidgetFormInputText(),
      'texto'             => new sfWidgetFormInputText(),
      'es_requerido'      => new sfWidgetFormInputText(),
      'bloque_num'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_pregunta_cesma' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_pregunta_cesma')), 'empty_value' => $this->getObject()->get('id_pregunta_cesma'), 'required' => false)),
      'num_pregunta'      => new sfValidatorInteger(array('required' => false)),
      'texto'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'es_requerido'      => new sfValidatorInteger(array('required' => false)),
      'bloque_num'        => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('cesma_preguntas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CesmaPreguntas';
  }

}
