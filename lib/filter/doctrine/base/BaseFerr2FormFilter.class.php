<?php

/**
 * Ferr2 filter form base class.
 *
 * @package    psicologia
 * @subpackage filter
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseFerr2FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_respuesta'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_user'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_encuestado' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'respuesta'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_respuesta'  => new sfValidatorPass(array('required' => false)),
      'id_user'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_encuestado' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'respuesta'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ferr2_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ferr2';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'id_respuesta'  => 'Text',
      'id_user'       => 'Number',
      'id_encuestado' => 'Number',
      'respuesta'     => 'Text',
    );
  }
}
