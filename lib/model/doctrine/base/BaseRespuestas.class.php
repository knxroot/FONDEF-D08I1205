<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Respuestas', 'doctrine');

/**
 * BaseRespuestas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $usuario
 * @property string $primernombre
 * @property string $inicialsegundonombre
 * @property string $primerapellido
 * @property string $segundoapellido
 * @property string $iniciales
 * 
 * @method integer    getId()                   Returns the current record's "id" value
 * @method string     getUsuario()              Returns the current record's "usuario" value
 * @method string     getPrimernombre()         Returns the current record's "primernombre" value
 * @method string     getInicialsegundonombre() Returns the current record's "inicialsegundonombre" value
 * @method string     getPrimerapellido()       Returns the current record's "primerapellido" value
 * @method string     getSegundoapellido()      Returns the current record's "segundoapellido" value
 * @method string     getIniciales()            Returns the current record's "iniciales" value
 * @method Respuestas setId()                   Sets the current record's "id" value
 * @method Respuestas setUsuario()              Sets the current record's "usuario" value
 * @method Respuestas setPrimernombre()         Sets the current record's "primernombre" value
 * @method Respuestas setInicialsegundonombre() Sets the current record's "inicialsegundonombre" value
 * @method Respuestas setPrimerapellido()       Sets the current record's "primerapellido" value
 * @method Respuestas setSegundoapellido()      Sets the current record's "segundoapellido" value
 * @method Respuestas setIniciales()            Sets the current record's "iniciales" value
 * 
 * @package    psicologia
 * @subpackage model
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRespuestas extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('respuestas');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('usuario', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('primernombre', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('inicialsegundonombre', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('primerapellido', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('segundoapellido', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('iniciales', 'string', 4, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}