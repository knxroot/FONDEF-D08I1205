<?php

/**
 * CIngresoMateria filter form base class.
 *
 * @package    psicologia
 * @subpackage filter
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCIngresoMateriaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'materia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'materia'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('c_ingreso_materia_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CIngresoMateria';
  }

  public function getFields()
  {
    return array(
      'id_materia' => 'Number',
      'materia'    => 'Text',
    );
  }
}
