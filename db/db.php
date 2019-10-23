<?php
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("remotemysql.com", "7tK58L6A24", "4iULrSz7Xe", "7tK58L6A24");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>
