<?php


class Cacsa3RespuestasTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Cacsa3Respuestas');
    }
}