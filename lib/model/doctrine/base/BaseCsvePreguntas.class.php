<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('CsvePreguntas', 'doctrine');

/**
 * BaseCsvePreguntas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_pregunta_csve
 * @property integer $num_pregunta
 * @property string $texto
 * @property integer $es_requerido
 * @property Doctrine_Collection $CsveRespuestas
 * 
 * @method integer             getIdPreguntaCsve()   Returns the current record's "id_pregunta_csve" value
 * @method integer             getNumPregunta()      Returns the current record's "num_pregunta" value
 * @method string              getTexto()            Returns the current record's "texto" value
 * @method integer             getEsRequerido()      Returns the current record's "es_requerido" value
 * @method Doctrine_Collection getCsveRespuestas()   Returns the current record's "CsveRespuestas" collection
 * @method CsvePreguntas       setIdPreguntaCsve()   Sets the current record's "id_pregunta_csve" value
 * @method CsvePreguntas       setNumPregunta()      Sets the current record's "num_pregunta" value
 * @method CsvePreguntas       setTexto()            Sets the current record's "texto" value
 * @method CsvePreguntas       setEsRequerido()      Sets the current record's "es_requerido" value
 * @method CsvePreguntas       setCsveRespuestas()   Sets the current record's "CsveRespuestas" collection
 * 
 * @package    psicologia
 * @subpackage model
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCsvePreguntas extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('csve_preguntas');
        $this->hasColumn('id_pregunta_csve', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('num_pregunta', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('texto', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('es_requerido', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('CsveRespuestas', array(
             'local' => 'id_pregunta_csve',
             'foreign' => 'id_pregunta_csve'));
    }
}