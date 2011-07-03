<?php


class Cacsa3PreguntasTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Cacsa3Preguntas');
    }
}