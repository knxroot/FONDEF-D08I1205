<?php

/**
 * PreguntaSeccion filter form base class.
 *
 * @package    psicologia
 * @subpackage filter
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePreguntaSeccionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'     => new sfWidgetFormFilterInput(),
      'enunciado'  => new sfWidgetFormFilterInput(),
      'seccion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SeccionInstrumento'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nombre'     => new sfValidatorPass(array('required' => false)),
      'enunciado'  => new sfValidatorPass(array('required' => false)),
      'seccion_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SeccionInstrumento'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('pregunta_seccion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PreguntaSeccion';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'nombre'     => 'Text',
      'enunciado'  => 'Text',
      'seccion_id' => 'ForeignKey',
    );
  }
}
