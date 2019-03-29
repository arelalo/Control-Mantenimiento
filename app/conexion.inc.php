<?php

class Conexion {
    
    private static $conexion;
    public static function abrir_conexion() {
        if (!isset(self::$conexion)) {
            try {
                include_once 'config.inc.php';
                self::$conexion = new PDO('mysql:host='. NOMBRESERVIDOR .';dbname='.NOMBREBD,NOMBREUSUARIO ,PASSWORD );
                self::$conexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); 
                self::$conexion -> exec("SET CHARACTER SET utf8");
                
                //echo 'Conexion abierta';
                
            } catch (PDOException $exc) {
                echo "ERROR :" .$exc -> getMessage() . '<br>';
                die();
                
            }
            }
    }
    
    public static function cerrar_conexion() {
        if (isset(self::$conexion)) {
            self::$conexion = null;
            
            //echo 'Conexion cerrada';
        }
    }
    
    public static function obtener_conexion() {
        return self::$conexion;
    }
}