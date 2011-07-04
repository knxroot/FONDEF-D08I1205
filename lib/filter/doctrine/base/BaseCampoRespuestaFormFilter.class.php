<?php

/**
 * CampoRespuesta filter form base class.
 *
 * @package    psicologia
 * @subpackage filter
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCampoRespuestaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'apartado_pregunta_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ApartadoPregunta'), 'add_empty' => true)),
      'tipo_dato'            => new sfWidgetFormFilterInput(),
      'nombre'               => new sfWidgetFormFilterInput(),
      'valor_defecto'        => new sfWidgetFormFilterInput(),
      'calculado'            => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'apartado_pregunta_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ApartadoPregunta'), 'column' => 'id')),
      'tipo_dato'            => new sfValidatorPass(array('required' => false)),
      'nombre'               => new sfValidatorPass(array('required' => false)),
      'valor_defecto'        => new sfValidatorPass(array('required' => false)),
      'calculado'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('campo_respuesta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CampoRespuesta';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'apartado_pregunta_id' => 'ForeignKey',
      'tipo_dato'            => 'Text',
      'nombre'               => 'Text',
      'valor_defecto'        => 'Text',
      'calculado'            => 'Number',
    );
  }
}
