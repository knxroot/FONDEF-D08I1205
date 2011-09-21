<?php

/**
 * JirPreguntas filter form base class.
 *
 * @package    psicologia
 * @subpackage filter
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseJirPreguntasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'num_pregunta'    => new sfWidgetFormFilterInput(),
      'texto'           => new sfWidgetFormFilterInput(),
      'es_requerido'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'num_pregunta'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'texto'           => new sfValidatorPass(array('required' => false)),
      'es_requerido'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('jir_preguntas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JirPreguntas';
  }

  public function getFields()
  {
    return array(
      'id_pregunta_jir' => 'Number',
      'num_pregunta'    => 'Number',
      'texto'           => 'Text',
      'es_requerido'    => 'Number',
    );
  }
}
