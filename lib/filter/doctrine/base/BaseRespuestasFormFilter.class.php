<?php

/**
 * Respuestas filter form base class.
 *
 * @package    psicologia
 * @subpackage filter
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRespuestasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'usuario'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'primernombre'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'inicialsegundonombre' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'primerapellido'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'segundoapellido'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'iniciales'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'usuario'              => new sfValidatorPass(array('required' => false)),
      'primernombre'         => new sfValidatorPass(array('required' => false)),
      'inicialsegundonombre' => new sfValidatorPass(array('required' => false)),
      'primerapellido'       => new sfValidatorPass(array('required' => false)),
      'segundoapellido'      => new sfValidatorPass(array('required' => false)),
      'iniciales'            => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('respuestas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Respuestas';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'usuario'              => 'Text',
      'primernombre'         => 'Text',
      'inicialsegundonombre' => 'Text',
      'primerapellido'       => 'Text',
      'segundoapellido'      => 'Text',
      'iniciales'            => 'Text',
    );
  }
}
