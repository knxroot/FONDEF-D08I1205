<?php

/**
 * CIngresoCausa filter form base class.
 *
 * @package    psicologia
 * @subpackage filter
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCIngresoCausaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_materia'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CIngresoMateria'), 'add_empty' => true)),
      'causa_nombre'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codigo_delito' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('EncuestadoActinputado'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id_materia'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CIngresoMateria'), 'column' => 'id_materia')),
      'causa_nombre'  => new sfValidatorPass(array('required' => false)),
      'codigo_delito' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('EncuestadoActinputado'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('c_ingreso_causa_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CIngresoCausa';
  }

  public function getFields()
  {
    return array(
      'id_materia'    => 'ForeignKey',
      'id_causa'      => 'Number',
      'causa_nombre'  => 'Text',
      'codigo_delito' => 'ForeignKey',
    );
  }
}
