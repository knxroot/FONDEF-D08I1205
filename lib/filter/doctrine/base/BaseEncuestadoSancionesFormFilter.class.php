<?php

/**
 * EncuestadoSanciones filter form base class.
 *
 * @package    psicologia
 * @subpackage filter
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEncuestadoSancionesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'select_sistema_atencion'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'input_nombre_programa'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'select_ciudad_programa'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'input_tiempo_total_condena'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'input_fecha_inicio_condena'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'select_tipo_materia'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'select_causa_delito'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_encuestado'                    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Encuestado'), 'add_empty' => true)),
      'select_tipo_tiempo_total_condena' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'input_ruk'                        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'input_fecha_detencion'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'input_fecha_control_detencion'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'select_sistema_atencion'          => new sfValidatorPass(array('required' => false)),
      'input_nombre_programa'            => new sfValidatorPass(array('required' => false)),
      'select_ciudad_programa'           => new sfValidatorPass(array('required' => false)),
      'input_tiempo_total_condena'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'input_fecha_inicio_condena'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'select_tipo_materia'              => new sfValidatorPass(array('required' => false)),
      'select_causa_delito'              => new sfValidatorPass(array('required' => false)),
      'id_encuestado'                    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Encuestado'), 'column' => 'id_encuestado')),
      'select_tipo_tiempo_total_condena' => new sfValidatorPass(array('required' => false)),
      'input_ruk'                        => new sfValidatorPass(array('required' => false)),
      'input_fecha_detencion'            => new sfValidatorPass(array('required' => false)),
      'input_fecha_control_detencion'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('encuestado_sanciones_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EncuestadoSanciones';
  }

  public function getFields()
  {
    return array(
      'id'                               => 'Number',
      'select_sistema_atencion'          => 'Text',
      'input_nombre_programa'            => 'Text',
      'select_ciudad_programa'           => 'Text',
      'input_tiempo_total_condena'       => 'Number',
      'input_fecha_inicio_condena'       => 'Date',
      'select_tipo_materia'              => 'Text',
      'select_causa_delito'              => 'Text',
      'id_encuestado'                    => 'ForeignKey',
      'select_tipo_tiempo_total_condena' => 'Text',
      'input_ruk'                        => 'Text',
      'input_fecha_detencion'            => 'Text',
      'input_fecha_control_detencion'    => 'Text',
    );
  }
}
