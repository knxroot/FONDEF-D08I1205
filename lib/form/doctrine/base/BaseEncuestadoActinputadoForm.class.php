<?php

/**
 * EncuestadoActinputado form base class.
 *
 * @method EncuestadoActinputado getObject() Returns the current form's model object
 *
 * @package    psicologia
 * @subpackage form
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEncuestadoActinputadoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                                => new sfWidgetFormInputHidden(),
      'input_fecha_inicio_investigacion3' => new sfWidgetFormDate(),
      'input_plazo_investigacion3'        => new sfWidgetFormDate(),
      'select_tribunal3'                  => new sfWidgetFormInputText(),
      'select_tipo_materia3'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CIngresoMateria'), 'add_empty' => false)),
      'select_causa_delito3'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CIngresoCausa'), 'add_empty' => false)),
      'id_encuestado'                     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Encuestado'), 'add_empty' => false)),
      'input_ruk3'                        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'input_fecha_inicio_investigacion3' => new sfValidatorDate(),
      'input_plazo_investigacion3'        => new sfValidatorDate(),
      'select_tribunal3'                  => new sfValidatorString(array('max_length' => 254)),
      'select_tipo_materia3'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CIngresoMateria'))),
      'select_causa_delito3'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CIngresoCausa'))),
      'id_encuestado'                     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Encuestado'))),
      'input_ruk3'                        => new sfValidatorString(array('max_length' => 254)),
    ));

    $this->widgetSchema->setNameFormat('encuestado_actinputado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EncuestadoActinputado';
  }

}
