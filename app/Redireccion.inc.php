<?php

//servidor xammp
define("SERVIDOR", "http://localhost/Control-Mantenimiento");

//servidor webhost
//define("SERVIDOR", "https://bdmantenimiento.000webhostapp.com");

define("INDEX", SERVIDOR .'/index.php');
define("CREAR", SERVIDOR ."/crear.php");
define("INICIO", SERVIDOR ."/pendiente.php");


class Redireccion {
    
    public static function redirigir($url){
        header('Location:'. $url );
        die();
    }
}