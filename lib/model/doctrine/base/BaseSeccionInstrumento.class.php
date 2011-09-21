<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('SeccionInstrumento', 'doctrine');

/**
 * BaseSeccionInstrumento
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $instrumento_id
 * @property integer $seccion_id
 * @property string $nombre
 * @property string $titulo
 * @property string $descripcion
 * @property Instrumento $Instrumento
 * @property Doctrine_Collection $SeccionInstrumento
 * @property Doctrine_Collection $PreguntaSeccion
 * 
 * @method integer             getId()                 Returns the current record's "id" value
 * @method integer             getInstrumentoId()      Returns the current record's "instrumento_id" value
 * @method integer             getSeccionId()          Returns the current record's "seccion_id" value
 * @method string              getNombre()             Returns the current record's "nombre" value
 * @method string              getTitulo()             Returns the current record's "titulo" value
 * @method string              getDescripcion()        Returns the current record's "descripcion" value
 * @method Instrumento         getInstrumento()        Returns the current record's "Instrumento" value
 * @method Doctrine_Collection getSeccionInstrumento() Returns the current record's "SeccionInstrumento" collection
 * @method Doctrine_Collection getPreguntaSeccion()    Returns the current record's "PreguntaSeccion" collection
 * @method SeccionInstrumento  setId()                 Sets the current record's "id" value
 * @method SeccionInstrumento  setInstrumentoId()      Sets the current record's "instrumento_id" value
 * @method SeccionInstrumento  setSeccionId()          Sets the current record's "seccion_id" value
 * @method SeccionInstrumento  setNombre()             Sets the current record's "nombre" value
 * @method SeccionInstrumento  setTitulo()             Sets the current record's "titulo" value
 * @method SeccionInstrumento  setDescripcion()        Sets the current record's "descripcion" value
 * @method SeccionInstrumento  setInstrumento()        Sets the current record's "Instrumento" value
 * @method SeccionInstrumento  setSeccionInstrumento() Sets the current record's "SeccionInstrumento" collection
 * @method SeccionInstrumento  setPreguntaSeccion()    Sets the current record's "PreguntaSeccion" collection
 * 
 * @package    psicologia
 * @subpackage model
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSeccionInstrumento extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('seccion_instrumento');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('instrumento_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('seccion_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('nombre', 'string', 140, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 140,
             ));
        $this->hasColumn('titulo', 'string', 140, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 140,
             ));
        $this->hasColumn('descripcion', 'string', 300, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 300,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Instrumento', array(
             'local' => 'instrumento_id',
             'foreign' => 'id'));

        $this->hasMany('SeccionInstrumento', array(
             'local' => 'id',
             'foreign' => 'seccion_id'));

        $this->hasMany('PreguntaSeccion', array(
             'local' => 'id',
             'foreign' => 'seccion_id'));
    }
}