<?php

/**
 * SeccionInstrumento filter form base class.
 *
 * @package    psicologia
 * @subpackage filter
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSeccionInstrumentoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'instrumento_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Instrumento'), 'add_empty' => true)),
      'seccion_id'     => new sfWidgetFormFilterInput(),
      'nombre'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'titulo'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descripcion'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'instrumento_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Instrumento'), 'column' => 'id')),
      'seccion_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nombre'         => new sfValidatorPass(array('required' => false)),
      'titulo'         => new sfValidatorPass(array('required' => false)),
      'descripcion'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('seccion_instrumento_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SeccionInstrumento';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'instrumento_id' => 'ForeignKey',
      'seccion_id'     => 'Number',
      'nombre'         => 'Text',
      'titulo'         => 'Text',
      'descripcion'    => 'Text',
    );
  }
}
