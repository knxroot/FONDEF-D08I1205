<?php

/**
 * CIngresoMateria form base class.
 *
 * @method CIngresoMateria getObject() Returns the current form's model object
 *
 * @package    psicologia
 * @subpackage form
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCIngresoMateriaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_materia' => new sfWidgetFormInputHidden(),
      'materia'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_materia' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_materia')), 'empty_value' => $this->getObject()->get('id_materia'), 'required' => false)),
      'materia'    => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->widgetSchema->setNameFormat('c_ingreso_materia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CIngresoMateria';
  }

}
