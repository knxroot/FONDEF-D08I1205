<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Cacsa3Respuestas', 'doctrine');

/**
 * BaseCacsa3Respuestas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_user
 * @property string $respuesta
 * @property string $comentario
 * @property integer $id_encuestado
 * @property integer $id_pregunta_cacsa3
 * @property SfGuardUser $SfGuardUser
 * @property Encuestado $Encuestado
 * @property Cacsa3Preguntas $Cacsa3Preguntas
 * 
 * @method integer          getIdUser()             Returns the current record's "id_user" value
 * @method string           getRespuesta()          Returns the current record's "respuesta" value
 * @method string           getComentario()         Returns the current record's "comentario" value
 * @method integer          getIdEncuestado()       Returns the current record's "id_encuestado" value
 * @method integer          getIdPreguntaCacsa3()   Returns the current record's "id_pregunta_cacsa3" value
 * @method SfGuardUser      getSfGuardUser()        Returns the current record's "SfGuardUser" value
 * @method Encuestado       getEncuestado()         Returns the current record's "Encuestado" value
 * @method Cacsa3Preguntas  getCacsa3Preguntas()    Returns the current record's "Cacsa3Preguntas" value
 * @method Cacsa3Respuestas setIdUser()             Sets the current record's "id_user" value
 * @method Cacsa3Respuestas setRespuesta()          Sets the current record's "respuesta" value
 * @method Cacsa3Respuestas setComentario()         Sets the current record's "comentario" value
 * @method Cacsa3Respuestas setIdEncuestado()       Sets the current record's "id_encuestado" value
 * @method Cacsa3Respuestas setIdPreguntaCacsa3()   Sets the current record's "id_pregunta_cacsa3" value
 * @method Cacsa3Respuestas setSfGuardUser()        Sets the current record's "SfGuardUser" value
 * @method Cacsa3Respuestas setEncuestado()         Sets the current record's "Encuestado" value
 * @method Cacsa3Respuestas setCacsa3Preguntas()    Sets the current record's "Cacsa3Preguntas" value
 * 
 * @package    psicologia
 * @subpackage model
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCacsa3Respuestas extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cacsa3_respuestas');
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
        $this->hasColumn('id_pregunta_cacsa3', 'integer', 4, array(
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

        $this->hasOne('Cacsa3Preguntas', array(
             'local' => 'id_pregunta_cacsa3',
             'foreign' => 'id_pregunta_cacsa3'));
    }
}