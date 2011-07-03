<?php

/**
 * IrncRespuestasFixedComxbloque form base class.
 *
 * @method IrncRespuestasFixedComxbloque getObject() Returns the current form's model object
 *
 * @package    psicologia
 * @subpackage form
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseIrncRespuestasFixedComxbloqueForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_user'       => new sfWidgetFormInputHidden(),
      'comentario'    => new sfWidgetFormInputText(),
      'id_encuestado' => new sfWidgetFormInputHidden(),
      'bloque_irnc'   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id_user'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_user')), 'empty_value' => $this->getObject()->get('id_user'), 'required' => false)),
      'comentario'    => new sfValidatorString(array('max_length' => 255)),
      'id_encuestado' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_encuestado')), 'empty_value' => $this->getObject()->get('id_encuestado'), 'required' => false)),
      'bloque_irnc'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('bloque_irnc')), 'empty_value' => $this->getObject()->get('bloque_irnc'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('irnc_respuestas_fixed_comxbloque[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'IrncRespuestasFixedComxbloque';
  }

}
