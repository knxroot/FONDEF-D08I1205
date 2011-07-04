<?php

/**
 * DepAdoRespuestas form base class.
 *
 * @method DepAdoRespuestas getObject() Returns the current form's model object
 *
 * @package    psicologia
 * @subpackage form
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDepAdoRespuestasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_user'             => new sfWidgetFormInputHidden(),
      'respuesta'           => new sfWidgetFormInputText(),
      'comentario'          => new sfWidgetFormTextarea(),
      'id_encuestado'       => new sfWidgetFormInputHidden(),
      'id_pregunta_dep_ado' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id_user'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_user')), 'empty_value' => $this->getObject()->get('id_user'), 'required' => false)),
      'respuesta'           => new sfValidatorString(array('max_length' => 255)),
      'comentario'          => new sfValidatorString(array('max_length' => 281, 'required' => false)),
      'id_encuestado'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_encuestado')), 'empty_value' => $this->getObject()->get('id_encuestado'), 'required' => false)),
      'id_pregunta_dep_ado' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_pregunta_dep_ado')), 'empty_value' => $this->getObject()->get('id_pregunta_dep_ado'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dep_ado_respuestas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DepAdoRespuestas';
  }

}
