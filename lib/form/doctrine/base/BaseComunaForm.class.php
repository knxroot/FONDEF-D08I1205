<?php

/**
 * Comuna form base class.
 *
 * @method Comuna getObject() Returns the current form's model object
 *
 * @package    psicologia
 * @subpackage form
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseComunaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'comuna_id'           => new sfWidgetFormInputHidden(),
      'comuna_nombre'       => new sfWidgetFormInputText(),
      'comuna_provincia_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Provincia'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'comuna_id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('comuna_id')), 'empty_value' => $this->getObject()->get('comuna_id'), 'required' => false)),
      'comuna_nombre'       => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'comuna_provincia_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Provincia'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('comuna[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Comuna';
  }

}
