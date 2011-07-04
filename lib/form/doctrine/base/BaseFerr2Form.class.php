<?php

/**
 * Ferr2 form base class.
 *
 * @method Ferr2 getObject() Returns the current form's model object
 *
 * @package    psicologia
 * @subpackage form
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFerr2Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'id_respuesta'  => new sfWidgetFormInputText(),
      'id_user'       => new sfWidgetFormInputText(),
      'id_encuestado' => new sfWidgetFormInputText(),
      'respuesta'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'id_respuesta'  => new sfValidatorString(array('max_length' => 255)),
      'id_user'       => new sfValidatorInteger(),
      'id_encuestado' => new sfValidatorInteger(),
      'respuesta'     => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->widgetSchema->setNameFormat('ferr2[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ferr2';
  }

}
