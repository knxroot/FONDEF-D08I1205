<?php

/**
 * CaieRespuestas form base class.
 *
 * @method CaieRespuestas getObject() Returns the current form's model object
 *
 * @package    psicologia
 * @subpackage form
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCaieRespuestasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_user'          => new sfWidgetFormInputHidden(),
      'respuesta'        => new sfWidgetFormInputText(),
      'comentario'       => new sfWidgetFormTextarea(),
      'id_encuestado'    => new sfWidgetFormInputHidden(),
      'id_pregunta_caie' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id_user'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_user')), 'empty_value' => $this->getObject()->get('id_user'), 'required' => false)),
      'respuesta'        => new sfValidatorString(array('max_length' => 255)),
      'comentario'       => new sfValidatorString(array('max_length' => 281, 'required' => false)),
      'id_encuestado'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_encuestado')), 'empty_value' => $this->getObject()->get('id_encuestado'), 'required' => false)),
      'id_pregunta_caie' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_pregunta_caie')), 'empty_value' => $this->getObject()->get('id_pregunta_caie'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('caie_respuestas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CaieRespuestas';
  }

}
