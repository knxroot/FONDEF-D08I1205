<?php

/**
 * Encuestado filter form base class.
 *
 * @package    psicologia
 * @subpackage filter
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEncuestadoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_user_responsable_principal'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SfGuardUser'), 'add_empty' => true)),
      'select_user_responsable_secundario1' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_user_responsable_secundario'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SfGuardUser_2'), 'add_empty' => true)),
      'input_run_nconverificador'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'input_primer_nombre'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'input_otros_nombres'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'input_primer_apellido'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'input_segundo_apellido'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'radio_sexo'                          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'input_fnacimiento'                   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'select_region'                       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'select_provincia'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'select_comuna'                       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'radio_procedencia'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'input_localidad_indigena'            => new sfWidgetFormFilterInput(),
      'select_origen_etnico'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'select_ingreso_familiar'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'select_residencia_regular'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'select_hijo'                         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'select_ultimcurso_aprobado'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'input_anio_ultimocurso'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'select_actesc_encurso'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'select_tipo_asistencia'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'select_asistencia_pconace'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'select_tipo_pconace'                 => new sfWidgetFormFilterInput(),
      'created_at'                          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'select_nacionalidad'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'input_domicilio'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_user_responsable_principal'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SfGuardUser'), 'column' => 'id')),
      'select_user_responsable_secundario1' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_user_responsable_secundario'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SfGuardUser_2'), 'column' => 'id')),
      'input_run_nconverificador'           => new sfValidatorPass(array('required' => false)),
      'input_primer_nombre'                 => new sfValidatorPass(array('required' => false)),
      'input_otros_nombres'                 => new sfValidatorPass(array('required' => false)),
      'input_primer_apellido'               => new sfValidatorPass(array('required' => false)),
      'input_segundo_apellido'              => new sfValidatorPass(array('required' => false)),
      'radio_sexo'                          => new sfValidatorPass(array('required' => false)),
      'input_fnacimiento'                   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'select_region'                       => new sfValidatorPass(array('required' => false)),
      'select_provincia'                    => new sfValidatorPass(array('required' => false)),
      'select_comuna'                       => new sfValidatorPass(array('required' => false)),
      'radio_procedencia'                   => new sfValidatorPass(array('required' => false)),
      'input_localidad_indigena'            => new sfValidatorPass(array('required' => false)),
      'select_origen_etnico'                => new sfValidatorPass(array('required' => false)),
      'select_ingreso_familiar'             => new sfValidatorPass(array('required' => false)),
      'select_residencia_regular'           => new sfValidatorPass(array('required' => false)),
      'select_hijo'                         => new sfValidatorPass(array('required' => false)),
      'select_ultimcurso_aprobado'          => new sfValidatorPass(array('required' => false)),
      'input_anio_ultimocurso'              => new sfValidatorPass(array('required' => false)),
      'select_actesc_encurso'               => new sfValidatorPass(array('required' => false)),
      'select_tipo_asistencia'              => new sfValidatorPass(array('required' => false)),
      'select_asistencia_pconace'           => new sfValidatorPass(array('required' => false)),
      'select_tipo_pconace'                 => new sfValidatorPass(array('required' => false)),
      'created_at'                          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'select_nacionalidad'                 => new sfValidatorPass(array('required' => false)),
      'input_domicilio'                     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('encuestado_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Encuestado';
  }

  public function getFields()
  {
    return array(
      'id_encuestado'                       => 'Number',
      'id_user_responsable_principal'       => 'ForeignKey',
      'select_user_responsable_secundario1' => 'Number',
      'id_user_responsable_secundario'      => 'ForeignKey',
      'input_run_nconverificador'           => 'Text',
      'input_primer_nombre'                 => 'Text',
      'input_otros_nombres'                 => 'Text',
      'input_primer_apellido'               => 'Text',
      'input_segundo_apellido'              => 'Text',
      'radio_sexo'                          => 'Text',
      'input_fnacimiento'                   => 'Date',
      'select_region'                       => 'Text',
      'select_provincia'                    => 'Text',
      'select_comuna'                       => 'Text',
      'radio_procedencia'                   => 'Text',
      'input_localidad_indigena'            => 'Text',
      'select_origen_etnico'                => 'Text',
      'select_ingreso_familiar'             => 'Text',
      'select_residencia_regular'           => 'Text',
      'select_hijo'                         => 'Text',
      'select_ultimcurso_aprobado'          => 'Text',
      'input_anio_ultimocurso'              => 'Text',
      'select_actesc_encurso'               => 'Text',
      'select_tipo_asistencia'              => 'Text',
      'select_asistencia_pconace'           => 'Text',
      'select_tipo_pconace'                 => 'Text',
      'created_at'                          => 'Date',
      'updated_at'                          => 'Date',
      'select_nacionalidad'                 => 'Text',
      'input_domicilio'                     => 'Text',
    );
  }
}
