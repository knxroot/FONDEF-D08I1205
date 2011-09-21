<?php

/**
 * Encuestado form base class.
 *
 * @method Encuestado getObject() Returns the current form's model object
 *
 * @package    psicologia
 * @subpackage form
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEncuestadoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_encuestado'                       => new sfWidgetFormInputHidden(),
      'id_user_responsable_principal'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SfGuardUser'), 'add_empty' => false)),
      'select_user_responsable_secundario1' => new sfWidgetFormInputText(),
      'id_user_responsable_secundario'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SfGuardUser_2'), 'add_empty' => true)),
      'input_run_nconverificador'           => new sfWidgetFormInputText(),
      'input_primer_nombre'                 => new sfWidgetFormInputText(),
      'input_otros_nombres'                 => new sfWidgetFormInputText(),
      'input_primer_apellido'               => new sfWidgetFormInputText(),
      'input_segundo_apellido'              => new sfWidgetFormInputText(),
      'radio_sexo'                          => new sfWidgetFormInputText(),
      'input_fnacimiento'                   => new sfWidgetFormDateTime(),
      'select_region'                       => new sfWidgetFormInputText(),
      'select_provincia'                    => new sfWidgetFormInputText(),
      'select_comuna'                       => new sfWidgetFormInputText(),
      'radio_procedencia'                   => new sfWidgetFormInputText(),
      'input_localidad_indigena'            => new sfWidgetFormInputText(),
      'select_origen_etnico'                => new sfWidgetFormInputText(),
      'select_ingreso_familiar'             => new sfWidgetFormInputText(),
      'select_residencia_regular'           => new sfWidgetFormInputText(),
      'select_hijo'                         => new sfWidgetFormInputText(),
      'select_ultimcurso_aprobado'          => new sfWidgetFormInputText(),
      'input_anio_ultimocurso'              => new sfWidgetFormInputText(),
      'select_actesc_encurso'               => new sfWidgetFormInputText(),
      'select_tipo_asistencia'              => new sfWidgetFormInputText(),
      'select_asistencia_pconace'           => new sfWidgetFormInputText(),
      'select_tipo_pconace'                 => new sfWidgetFormInputText(),
      'created_at'                          => new sfWidgetFormDateTime(),
      'updated_at'                          => new sfWidgetFormDateTime(),
      'select_nacionalidad'                 => new sfWidgetFormInputText(),
      'input_domicilio'                     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_encuestado'                       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_encuestado')), 'empty_value' => $this->getObject()->get('id_encuestado'), 'required' => false)),
      'id_user_responsable_principal'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SfGuardUser'))),
      'select_user_responsable_secundario1' => new sfValidatorInteger(),
      'id_user_responsable_secundario'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SfGuardUser_2'), 'required' => false)),
      'input_run_nconverificador'           => new sfValidatorString(array('max_length' => 9)),
      'input_primer_nombre'                 => new sfValidatorString(array('max_length' => 255)),
      'input_otros_nombres'                 => new sfValidatorString(array('max_length' => 255)),
      'input_primer_apellido'               => new sfValidatorString(array('max_length' => 255)),
      'input_segundo_apellido'              => new sfValidatorString(array('max_length' => 255)),
      'radio_sexo'                          => new sfValidatorString(array('max_length' => 255)),
      'input_fnacimiento'                   => new sfValidatorDateTime(),
      'select_region'                       => new sfValidatorString(array('max_length' => 255)),
      'select_provincia'                    => new sfValidatorString(array('max_length' => 255)),
      'select_comuna'                       => new sfValidatorString(array('max_length' => 255)),
      'radio_procedencia'                   => new sfValidatorString(array('max_length' => 255)),
      'input_localidad_indigena'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'select_origen_etnico'                => new sfValidatorString(array('max_length' => 255)),
      'select_ingreso_familiar'             => new sfValidatorString(array('max_length' => 255)),
      'select_residencia_regular'           => new sfValidatorString(array('max_length' => 255)),
      'select_hijo'                         => new sfValidatorString(array('max_length' => 255)),
      'select_ultimcurso_aprobado'          => new sfValidatorString(array('max_length' => 255)),
      'input_anio_ultimocurso'              => new sfValidatorString(array('max_length' => 255)),
      'select_actesc_encurso'               => new sfValidatorString(array('max_length' => 255)),
      'select_tipo_asistencia'              => new sfValidatorString(array('max_length' => 255)),
      'select_asistencia_pconace'           => new sfValidatorString(array('max_length' => 255)),
      'select_tipo_pconace'                 => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'                          => new sfValidatorDateTime(),
      'updated_at'                          => new sfValidatorDateTime(),
      'select_nacionalidad'                 => new sfValidatorString(array('max_length' => 254)),
      'input_domicilio'                     => new sfValidatorString(array('max_length' => 254)),
    ));

    $this->widgetSchema->setNameFormat('encuestado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Encuestado';
  }

}
