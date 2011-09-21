<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('CIngresoMateria', 'doctrine');

/**
 * BaseCIngresoMateria
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_materia
 * @property string $materia
 * @property Doctrine_Collection $CIngresoCausa
 * @property Doctrine_Collection $EncuestadoActinputado
 * 
 * @method integer             getIdMateria()             Returns the current record's "id_materia" value
 * @method string              getMateria()               Returns the current record's "materia" value
 * @method Doctrine_Collection getCIngresoCausa()         Returns the current record's "CIngresoCausa" collection
 * @method Doctrine_Collection getEncuestadoActinputado() Returns the current record's "EncuestadoActinputado" collection
 * @method CIngresoMateria     setIdMateria()             Sets the current record's "id_materia" value
 * @method CIngresoMateria     setMateria()               Sets the current record's "materia" value
 * @method CIngresoMateria     setCIngresoCausa()         Sets the current record's "CIngresoCausa" collection
 * @method CIngresoMateria     setEncuestadoActinputado() Sets the current record's "EncuestadoActinputado" collection
 * 
 * @package    psicologia
 * @subpackage model
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCIngresoMateria extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('c_ingreso_materia');
        $this->hasColumn('id_materia', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('materia', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('CIngresoCausa', array(
             'local' => 'id_materia',
             'foreign' => 'id_materia'));

        $this->hasMany('EncuestadoActinputado', array(
             'local' => 'id_materia',
             'foreign' => 'select_tipo_materia3'));
    }
}