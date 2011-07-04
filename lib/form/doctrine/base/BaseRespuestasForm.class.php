<?php

/**
 * Respuestas form base class.
 *
 * @method Respuestas getObject() Returns the current form's model object
 *
 * @package    psicologia
 * @subpackage form
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRespuestasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'usuario'              => new sfWidgetFormInputText(),
      'primernombre'         => new sfWidgetFormInputText(),
      'inicialsegundonombre' => new sfWidgetFormInputText(),
      'primerapellido'       => new sfWidgetFormInputText(),
      'segundoapellido'      => new sfWidgetFormInputText(),
      'iniciales'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'usuario'              => new sfValidatorString(array('max_length' => 50)),
      'primernombre'         => new sfValidatorString(array('max_length' => 50)),
      'inicialsegundonombre' => new sfValidatorString(array('max_length' => 50)),
      'primerapellido'       => new sfValidatorString(array('max_length' => 50)),
      'segundoapellido'      => new sfValidatorString(array('max_length' => 50)),
      'iniciales'            => new sfValidatorString(array('max_length' => 4)),
    ));

    $this->widgetSchema->setNameFormat('respuestas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Respuestas';
  }

}
