<?php

/**
 * CIngresoCausa form base class.
 *
 * @method CIngresoCausa getObject() Returns the current form's model object
 *
 * @package    psicologia
 * @subpackage form
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCIngresoCausaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_materia'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CIngresoMateria'), 'add_empty' => false)),
      'id_causa'      => new sfWidgetFormInputHidden(),
      'causa_nombre'  => new sfWidgetFormInputText(),
      'codigo_delito' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('EncuestadoActinputado'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_materia'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CIngresoMateria'))),
      'id_causa'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_causa')), 'empty_value' => $this->getObject()->get('id_causa'), 'required' => false)),
      'causa_nombre'  => new sfValidatorString(array('max_length' => 255)),
      'codigo_delito' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('EncuestadoActinputado'))),
    ));

    $this->widgetSchema->setNameFormat('c_ingreso_causa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CIngresoCausa';
  }

}
