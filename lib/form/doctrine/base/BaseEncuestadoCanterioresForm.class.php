<?php

/**
 * EncuestadoCanteriores form base class.
 *
 * @method EncuestadoCanteriores getObject() Returns the current form's model object
 *
 * @package    psicologia
 * @subpackage form
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEncuestadoCanterioresForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                             => new sfWidgetFormInputHidden(),
      'input_fecha_inicio_condena2'    => new sfWidgetFormDateTime(),
      'input_fecha_termino_condena2'   => new sfWidgetFormDateTime(),
      'select_tribunal2'               => new sfWidgetFormInputText(),
      'select_tipo_materia2'           => new sfWidgetFormInputText(),
      'select_causa_delito2'           => new sfWidgetFormInputText(),
      'id_encuestado'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Encuestado'), 'add_empty' => false)),
      'input_ruk2'                     => new sfWidgetFormInputText(),
      'input_fecha_detencion2'         => new sfWidgetFormInputText(),
      'input_fecha_control_detencion2' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'input_fecha_inicio_condena2'    => new sfValidatorDateTime(),
      'input_fecha_termino_condena2'   => new sfValidatorDateTime(),
      'select_tribunal2'               => new sfValidatorString(array('max_length' => 254)),
      'select_tipo_materia2'           => new sfValidatorString(array('max_length' => 255)),
      'select_causa_delito2'           => new sfValidatorString(array('max_length' => 255)),
      'id_encuestado'                  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Encuestado'))),
      'input_ruk2'                     => new sfValidatorString(array('max_length' => 254)),
      'input_fecha_detencion2'         => new sfValidatorString(array('max_length' => 254)),
      'input_fecha_control_detencion2' => new sfValidatorString(array('max_length' => 254)),
    ));

    $this->widgetSchema->setNameFormat('encuestado_canteriores[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EncuestadoCanteriores';
  }

}
