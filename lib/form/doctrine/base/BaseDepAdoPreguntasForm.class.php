<?php

/**
 * DepAdoPreguntas form base class.
 *
 * @method DepAdoPreguntas getObject() Returns the current form's model object
 *
 * @package    psicologia
 * @subpackage form
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDepAdoPreguntasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_pregunta_dep_ado' => new sfWidgetFormInputHidden(),
      'num_pregunta'        => new sfWidgetFormInputText(),
      'texto'               => new sfWidgetFormInputText(),
      'es_requerido'        => new sfWidgetFormInputText(),
      'bloque_dep_ado'      => new sfWidgetFormInputText(),
      'bloque_num'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_pregunta_dep_ado' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_pregunta_dep_ado')), 'empty_value' => $this->getObject()->get('id_pregunta_dep_ado'), 'required' => false)),
      'num_pregunta'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'texto'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'es_requerido'        => new sfValidatorInteger(array('required' => false)),
      'bloque_dep_ado'      => new sfValidatorString(array('max_length' => 255)),
      'bloque_num'          => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('dep_ado_preguntas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DepAdoPreguntas';
  }

}
