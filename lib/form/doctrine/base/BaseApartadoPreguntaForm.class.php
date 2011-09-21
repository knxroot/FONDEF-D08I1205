<?php

/**
 * ApartadoPregunta form base class.
 *
 * @method ApartadoPregunta getObject() Returns the current form's model object
 *
 * @package    psicologia
 * @subpackage form
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseApartadoPreguntaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'pregunta_seccion_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PreguntaSeccion'), 'add_empty' => true)),
      'apartado_pregunta_id' => new sfWidgetFormInputText(),
      'nombre'               => new sfWidgetFormInputText(),
      'titulo'               => new sfWidgetFormInputText(),
      'descripcion'          => new sfWidgetFormTextarea(),
      'unico'                => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'pregunta_seccion_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PreguntaSeccion'), 'required' => false)),
      'apartado_pregunta_id' => new sfValidatorInteger(array('required' => false)),
      'nombre'               => new sfValidatorString(array('max_length' => 140, 'required' => false)),
      'titulo'               => new sfValidatorString(array('max_length' => 140, 'required' => false)),
      'descripcion'          => new sfValidatorString(array('max_length' => 300, 'required' => false)),
      'unico'                => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('apartado_pregunta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ApartadoPregunta';
  }

}
