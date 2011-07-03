<?php

/**
 * EncuestadoActinputado filter form base class.
 *
 * @package    psicologia
 * @subpackage filter
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEncuestadoActinputadoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'input_fecha_inicio_investigacion3' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'input_plazo_investigacion3'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'select_tribunal3'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'select_tipo_materia3'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CIngresoMateria'), 'add_empty' => true)),
      'select_causa_delito3'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CIngresoCausa'), 'add_empty' => true)),
      'id_encuestado'                     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Encuestado'), 'add_empty' => true)),
      'input_ruk3'                        => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'input_fecha_inicio_investigacion3' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'input_plazo_investigacion3'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'select_tribunal3'                  => new sfValidatorPass(array('required' => false)),
      'select_tipo_materia3'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CIngresoMateria'), 'column' => 'id_materia')),
      'select_causa_delito3'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CIngresoCausa'), 'column' => 'id_causa')),
      'id_encuestado'                     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Encuestado'), 'column' => 'id_encuestado')),
      'input_ruk3'                        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('encuestado_actinputado_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EncuestadoActinputado';
  }

  public function getFields()
  {
    return array(
      'id'                                => 'Number',
      'input_fecha_inicio_investigacion3' => 'Date',
      'input_plazo_investigacion3'        => 'Date',
      'select_tribunal3'                  => 'Text',
      'select_tipo_materia3'              => 'ForeignKey',
      'select_causa_delito3'              => 'ForeignKey',
      'id_encuestado'                     => 'ForeignKey',
      'input_ruk3'                        => 'Text',
    );
  }
}
