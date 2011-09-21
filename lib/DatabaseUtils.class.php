<?php

class DatabaseUtils
{
    public static function getQueryKeys($array)
    {
        $keys = array_keys($array);
        array_walk($keys, create_function('&$key', '$key = $key;'));
        
        return implode(', ', $keys);
    }
    
    public static function getQueryPlaceholders($array)
    {
        $keys = array_keys($array);
        array_walk($keys, create_function('&$key', '$key = ":".$key;'));
        
        return implode(', ', $keys);
    }
    
    public static function prepareInsertQuery($table, $object)
    {
        $sql = sprintf('INSERT INTO %s (%s) VALUES (%s)', 
            $table,
            self::getQueryKeys($object),
            self::getQueryPlaceholders($object));
        
        return $sql;
    }
}

