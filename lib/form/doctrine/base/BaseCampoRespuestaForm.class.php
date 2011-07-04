<?php

/**
 * CampoRespuesta form base class.
 *
 * @method CampoRespuesta getObject() Returns the current form's model object
 *
 * @package    psicologia
 * @subpackage form
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCampoRespuestaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'apartado_pregunta_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ApartadoPregunta'), 'add_empty' => false)),
      'tipo_dato'            => new sfWidgetFormInputText(),
      'nombre'               => new sfWidgetFormInputText(),
      'valor_defecto'        => new sfWidgetFormTextarea(),
      'calculado'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'apartado_pregunta_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ApartadoPregunta'))),
      'tipo_dato'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nombre'               => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'valor_defecto'        => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'calculado'            => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('campo_respuesta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CampoRespuesta';
  }

}
