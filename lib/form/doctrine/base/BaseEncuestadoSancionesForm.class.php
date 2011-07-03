<?php

/**
 * EncuestadoSanciones form base class.
 *
 * @method EncuestadoSanciones getObject() Returns the current form's model object
 *
 * @package    psicologia
 * @subpackage form
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEncuestadoSancionesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                               => new sfWidgetFormInputHidden(),
      'select_sistema_atencion'          => new sfWidgetFormInputText(),
      'input_nombre_programa'            => new sfWidgetFormInputText(),
      'select_ciudad_programa'           => new sfWidgetFormInputText(),
      'input_tiempo_total_condena'       => new sfWidgetFormInputText(),
      'input_fecha_inicio_condena'       => new sfWidgetFormDateTime(),
      'select_tipo_materia'              => new sfWidgetFormInputText(),
      'select_causa_delito'              => new sfWidgetFormInputText(),
      'id_encuestado'                    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Encuestado'), 'add_empty' => false)),
      'select_tipo_tiempo_total_condena' => new sfWidgetFormInputText(),
      'input_ruk'                        => new sfWidgetFormInputText(),
      'input_fecha_detencion'            => new sfWidgetFormInputText(),
      'input_fecha_control_detencion'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'select_sistema_atencion'          => new sfValidatorString(array('max_length' => 255)),
      'input_nombre_programa'            => new sfValidatorString(array('max_length' => 255)),
      'select_ciudad_programa'           => new sfValidatorString(array('max_length' => 255)),
      'input_tiempo_total_condena'       => new sfValidatorInteger(),
      'input_fecha_inicio_condena'       => new sfValidatorDateTime(),
      'select_tipo_materia'              => new sfValidatorString(array('max_length' => 255)),
      'select_causa_delito'              => new sfValidatorString(array('max_length' => 255)),
      'id_encuestado'                    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Encuestado'))),
      'select_tipo_tiempo_total_condena' => new sfValidatorString(array('max_length' => 255)),
      'input_ruk'                        => new sfValidatorString(array('max_length' => 254)),
      'input_fecha_detencion'            => new sfValidatorString(array('max_length' => 254)),
      'input_fecha_control_detencion'    => new sfValidatorString(array('max_length' => 254)),
    ));

    $this->widgetSchema->setNameFormat('encuestado_sanciones[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EncuestadoSanciones';
  }

}
