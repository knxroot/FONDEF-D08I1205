<?php


class Cacsa2RespuestasTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Cacsa2Respuestas');
    }
}