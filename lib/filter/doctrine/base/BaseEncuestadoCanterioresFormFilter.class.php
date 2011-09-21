<?php

/**
 * EncuestadoCanteriores filter form base class.
 *
 * @package    psicologia
 * @subpackage filter
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEncuestadoCanterioresFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'input_fecha_inicio_condena2'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'input_fecha_termino_condena2'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'select_tribunal2'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'select_tipo_materia2'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'select_causa_delito2'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_encuestado'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Encuestado'), 'add_empty' => true)),
      'input_ruk2'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'input_fecha_detencion2'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'input_fecha_control_detencion2' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'input_fecha_inicio_condena2'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'input_fecha_termino_condena2'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'select_tribunal2'               => new sfValidatorPass(array('required' => false)),
      'select_tipo_materia2'           => new sfValidatorPass(array('required' => false)),
      'select_causa_delito2'           => new sfValidatorPass(array('required' => false)),
      'id_encuestado'                  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Encuestado'), 'column' => 'id_encuestado')),
      'input_ruk2'                     => new sfValidatorPass(array('required' => false)),
      'input_fecha_detencion2'         => new sfValidatorPass(array('required' => false)),
      'input_fecha_control_detencion2' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('encuestado_canteriores_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EncuestadoCanteriores';
  }

  public function getFields()
  {
    return array(
      'id'                             => 'Number',
      'input_fecha_inicio_condena2'    => 'Date',
      'input_fecha_termino_condena2'   => 'Date',
      'select_tribunal2'               => 'Text',
      'select_tipo_materia2'           => 'Text',
      'select_causa_delito2'           => 'Text',
      'id_encuestado'                  => 'ForeignKey',
      'input_ruk2'                     => 'Text',
      'input_fecha_detencion2'         => 'Text',
      'input_fecha_control_detencion2' => 'Text',
    );
  }
}
