<?php

/**
 * IrncRespuestasFixedComxbloque filter form base class.
 *
 * @package    psicologia
 * @subpackage filter
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseIrncRespuestasFixedComxbloqueFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'comentario'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'comentario'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('irnc_respuestas_fixed_comxbloque_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'IrncRespuestasFixedComxbloque';
  }

  public function getFields()
  {
    return array(
      'id_user'       => 'Number',
      'comentario'    => 'Text',
      'id_encuestado' => 'Number',
      'bloque_irnc'   => 'Number',
    );
  }
}
