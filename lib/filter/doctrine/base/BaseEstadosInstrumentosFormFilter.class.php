<?php

/**
 * EstadosInstrumentos filter form base class.
 *
 * @package    psicologia
 * @subpackage filter
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEstadosInstrumentosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_encuestado'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Encuestado'), 'add_empty' => true)),
      'sigla_instrumento'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_user'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SfGuardUser'), 'add_empty' => true)),
      'estado'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_inicio'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_cierre'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'tiempo_total_utilizado' => new sfWidgetFormFilterInput(),
      'modalidad_respuesta'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_encuestado'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Encuestado'), 'column' => 'id_encuestado')),
      'sigla_instrumento'      => new sfValidatorPass(array('required' => false)),
      'id_user'                => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SfGuardUser'), 'column' => 'id')),
      'estado'                 => new sfValidatorPass(array('required' => false)),
      'fecha_inicio'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fecha_cierre'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'tiempo_total_utilizado' => new sfValidatorPass(array('required' => false)),
      'modalidad_respuesta'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('estados_instrumentos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EstadosInstrumentos';
  }

  public function getFields()
  {
    return array(
      'id_reg_ins'             => 'Number',
      'id_encuestado'          => 'ForeignKey',
      'sigla_instrumento'      => 'Text',
      'id_user'                => 'ForeignKey',
      'estado'                 => 'Text',
      'fecha_inicio'           => 'Date',
      'fecha_cierre'           => 'Date',
      'tiempo_total_utilizado' => 'Text',
      'modalidad_respuesta'    => 'Text',
    );
  }
}
