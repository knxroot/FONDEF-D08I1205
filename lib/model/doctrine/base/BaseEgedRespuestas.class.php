<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('EgedRespuestas', 'doctrine');

/**
 * BaseEgedRespuestas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_user
 * @property string $respuesta
 * @property string $comentario
 * @property integer $id_encuestado
 * @property integer $id_pregunta_eged
 * @property SfGuardUser $SfGuardUser
 * @property Encuestado $Encuestado
 * @property EgedPreguntas $EgedPreguntas
 * 
 * @method integer        getIdUser()           Returns the current record's "id_user" value
 * @method string         getRespuesta()        Returns the current record's "respuesta" value
 * @method string         getComentario()       Returns the current record's "comentario" value
 * @method integer        getIdEncuestado()     Returns the current record's "id_encuestado" value
 * @method integer        getIdPreguntaEged()   Returns the current record's "id_pregunta_eged" value
 * @method SfGuardUser    getSfGuardUser()      Returns the current record's "SfGuardUser" value
 * @method Encuestado     getEncuestado()       Returns the current record's "Encuestado" value
 * @method EgedPreguntas  getEgedPreguntas()    Returns the current record's "EgedPreguntas" value
 * @method EgedRespuestas setIdUser()           Sets the current record's "id_user" value
 * @method EgedRespuestas setRespuesta()        Sets the current record's "respuesta" value
 * @method EgedRespuestas setComentario()       Sets the current record's "comentario" value
 * @method EgedRespuestas setIdEncuestado()     Sets the current record's "id_encuestado" value
 * @method EgedRespuestas setIdPreguntaEged()   Sets the current record's "id_pregunta_eged" value
 * @method EgedRespuestas setSfGuardUser()      Sets the current record's "SfGuardUser" value
 * @method EgedRespuestas setEncuestado()       Sets the current record's "Encuestado" value
 * @method EgedRespuestas setEgedPreguntas()    Sets the current record's "EgedPreguntas" value
 * 
 * @package    psicologia
 * @subpackage model
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEgedRespuestas extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('eged_respuestas');
        $this->hasColumn('id_user', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('respuesta', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('comentario', 'string', 281, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 281,
             ));
        $this->hasColumn('id_encuestado', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('id_pregunta_eged', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('SfGuardUser', array(
             'local' => 'id_user',
             'foreign' => 'id'));

        $this->hasOne('Encuestado', array(
             'local' => 'id_encuestado',
             'foreign' => 'id_encuestado'));

        $this->hasOne('EgedPreguntas', array(
             'local' => 'id_pregunta_eged',
             'foreign' => 'id_pregunta_eged'));
    }
}