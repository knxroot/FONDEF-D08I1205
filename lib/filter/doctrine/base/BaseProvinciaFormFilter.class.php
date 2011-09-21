<?php

/**
 * Provincia filter form base class.
 *
 * @package    psicologia
 * @subpackage filter
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProvinciaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'provincia_nombre'    => new sfWidgetFormFilterInput(),
      'provincia_region_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Region'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'provincia_nombre'    => new sfValidatorPass(array('required' => false)),
      'provincia_region_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Region'), 'column' => 'region_id')),
    ));

    $this->widgetSchema->setNameFormat('provincia_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Provincia';
  }

  public function getFields()
  {
    return array(
      'provincia_id'        => 'Number',
      'provincia_nombre'    => 'Text',
      'provincia_region_id' => 'ForeignKey',
    );
  }
}
