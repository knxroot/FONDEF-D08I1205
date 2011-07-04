<?php

/**
 * Test form base class.
 *
 * @method Test getObject() Returns the current form's model object
 *
 * @package    psicologia
 * @subpackage form
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTestForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'prueba1' => new sfWidgetFormInputHidden(),
      'texto'   => new sfWidgetFormInputText(),
      'idtest'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'prueba1' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('prueba1')), 'empty_value' => $this->getObject()->get('prueba1'), 'required' => false)),
      'texto'   => new sfValidatorString(array('max_length' => 255)),
      'idtest'  => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('test[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Test';
  }

}
