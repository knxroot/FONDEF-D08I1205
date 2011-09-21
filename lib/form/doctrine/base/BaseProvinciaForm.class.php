<?php

/**
 * Provincia form base class.
 *
 * @method Provincia getObject() Returns the current form's model object
 *
 * @package    psicologia
 * @subpackage form
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProvinciaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'provincia_id'        => new sfWidgetFormInputHidden(),
      'provincia_nombre'    => new sfWidgetFormInputText(),
      'provincia_region_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Region'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'provincia_id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('provincia_id')), 'empty_value' => $this->getObject()->get('provincia_id'), 'required' => false)),
      'provincia_nombre'    => new sfValidatorString(array('max_length' => 23, 'required' => false)),
      'provincia_region_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Region'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('provincia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Provincia';
  }

}
