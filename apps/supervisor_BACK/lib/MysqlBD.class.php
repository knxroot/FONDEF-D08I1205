<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MysqlBD
 *
 * @author knx
 */
class MysqlBD {
    //put your code here

  function BD_Conectar(){
    //Comienza la coneccion con la base de datos
    $Error_mysql_connect=false;
    $Error_mysql_select_db=false;
    //$coneccion = @mysql_connect("localhost", "root", "ukjokiujoki");


    $coneccion = @mysql_connect("localhost", "sis_infractores", "infractores2010");

    mysql_query ("SET NAMES 'utf8'");
    if(!$coneccion)
     $Error_mysql_connect = true;

    $bd = @mysql_select_db("psico") ;
    if(!$bd)
      $Error_mysql_select_db = true;

    if($Error_mysql_connect || $Error_mysql_select_db )
      return  false;
    else
      return true;
  }
}
/*REFERENCIA:
 * +http://notasweb.com/grupo/symfony/tema/incluir-funciones-y-clases-propias.html
 *
 */
?>
