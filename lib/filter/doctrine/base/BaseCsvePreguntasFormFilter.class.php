<?php

/**
 * CsvePreguntas filter form base class.
 *
 * @package    psicologia
 * @subpackage filter
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCsvePreguntasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'num_pregunta'     => new sfWidgetFormFilterInput(),
      'texto'            => new sfWidgetFormFilterInput(),
      'es_requerido'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'num_pregunta'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'texto'            => new sfValidatorPass(array('required' => false)),
      'es_requerido'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('csve_preguntas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CsvePreguntas';
  }

  public function getFields()
  {
    return array(
      'id_pregunta_csve' => 'Number',
      'num_pregunta'     => 'Number',
      'texto'            => 'Text',
      'es_requerido'     => 'Number',
    );
  }
}
