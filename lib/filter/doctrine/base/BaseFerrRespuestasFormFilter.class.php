<?php

/**
 * FerrRespuestas filter form base class.
 *
 * @package    psicologia
 * @subpackage filter
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseFerrRespuestasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'respuesta'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'respuesta'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ferr_respuestas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'FerrRespuestas';
  }

  public function getFields()
  {
    return array(
      'id_user'       => 'Number',
      'respuesta'     => 'Text',
      'id_encuestado' => 'Number',
      'id_respuesta'  => 'Number',
    );
  }
}
