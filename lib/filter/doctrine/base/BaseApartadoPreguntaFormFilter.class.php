<?php

/**
 * ApartadoPregunta filter form base class.
 *
 * @package    psicologia
 * @subpackage filter
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseApartadoPreguntaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'pregunta_seccion_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PreguntaSeccion'), 'add_empty' => true)),
      'apartado_pregunta_id' => new sfWidgetFormFilterInput(),
      'nombre'               => new sfWidgetFormFilterInput(),
      'titulo'               => new sfWidgetFormFilterInput(),
      'descripcion'          => new sfWidgetFormFilterInput(),
      'unico'                => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'pregunta_seccion_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PreguntaSeccion'), 'column' => 'id')),
      'apartado_pregunta_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nombre'               => new sfValidatorPass(array('required' => false)),
      'titulo'               => new sfValidatorPass(array('required' => false)),
      'descripcion'          => new sfValidatorPass(array('required' => false)),
      'unico'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('apartado_pregunta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ApartadoPregunta';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'pregunta_seccion_id'  => 'ForeignKey',
      'apartado_pregunta_id' => 'Number',
      'nombre'               => 'Text',
      'titulo'               => 'Text',
      'descripcion'          => 'Text',
      'unico'                => 'Number',
    );
  }
}
