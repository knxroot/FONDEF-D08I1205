<?php

/**
 * EstadosInstrumentos form base class.
 *
 * @method EstadosInstrumentos getObject() Returns the current form's model object
 *
 * @package    psicologia
 * @subpackage form
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEstadosInstrumentosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_reg_ins'             => new sfWidgetFormInputHidden(),
      'id_encuestado'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Encuestado'), 'add_empty' => false)),
      'sigla_instrumento'      => new sfWidgetFormInputText(),
      'id_user'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SfGuardUser'), 'add_empty' => false)),
      'estado'                 => new sfWidgetFormInputText(),
      'fecha_inicio'           => new sfWidgetFormDateTime(),
      'fecha_cierre'           => new sfWidgetFormDateTime(),
      'tiempo_total_utilizado' => new sfWidgetFormTime(),
      'modalidad_respuesta'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_reg_ins'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_reg_ins')), 'empty_value' => $this->getObject()->get('id_reg_ins'), 'required' => false)),
      'id_encuestado'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Encuestado'))),
      'sigla_instrumento'      => new sfValidatorString(array('max_length' => 10)),
      'id_user'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SfGuardUser'))),
      'estado'                 => new sfValidatorString(array('max_length' => 20)),
      'fecha_inicio'           => new sfValidatorDateTime(array('required' => false)),
      'fecha_cierre'           => new sfValidatorDateTime(array('required' => false)),
      'tiempo_total_utilizado' => new sfValidatorTime(array('required' => false)),
      'modalidad_respuesta'    => new sfValidatorString(array('max_length' => 20)),
    ));

    $this->widgetSchema->setNameFormat('estados_instrumentos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EstadosInstrumentos';
  }

}
