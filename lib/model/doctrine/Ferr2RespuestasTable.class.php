<?php


class Ferr2RespuestasTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Ferr2Respuestas');
    }
}