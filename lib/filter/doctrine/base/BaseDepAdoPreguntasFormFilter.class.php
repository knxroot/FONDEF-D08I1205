<?php

/**
 * DepAdoPreguntas filter form base class.
 *
 * @package    psicologia
 * @subpackage filter
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDepAdoPreguntasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'num_pregunta'        => new sfWidgetFormFilterInput(),
      'texto'               => new sfWidgetFormFilterInput(),
      'es_requerido'        => new sfWidgetFormFilterInput(),
      'bloque_dep_ado'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bloque_num'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'num_pregunta'        => new sfValidatorPass(array('required' => false)),
      'texto'               => new sfValidatorPass(array('required' => false)),
      'es_requerido'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'bloque_dep_ado'      => new sfValidatorPass(array('required' => false)),
      'bloque_num'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('dep_ado_preguntas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DepAdoPreguntas';
  }

  public function getFields()
  {
    return array(
      'id_pregunta_dep_ado' => 'Number',
      'num_pregunta'        => 'Text',
      'texto'               => 'Text',
      'es_requerido'        => 'Number',
      'bloque_dep_ado'      => 'Text',
      'bloque_num'          => 'Number',
    );
  }
}
