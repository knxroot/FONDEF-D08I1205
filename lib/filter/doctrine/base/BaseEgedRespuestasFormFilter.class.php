<?php

/**
 * EgedRespuestas filter form base class.
 *
 * @package    psicologia
 * @subpackage filter
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEgedRespuestasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'respuesta'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comentario'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'respuesta'        => new sfValidatorPass(array('required' => false)),
      'comentario'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('eged_respuestas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EgedRespuestas';
  }

  public function getFields()
  {
    return array(
      'id_user'          => 'Number',
      'respuesta'        => 'Text',
      'comentario'       => 'Text',
      'id_encuestado'    => 'Number',
      'id_pregunta_eged' => 'Number',
    );
  }
}
