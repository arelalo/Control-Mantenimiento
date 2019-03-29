<?php

class Redireccion {
    
    public static function redirigir($url){
        header('Location:'. $url , TRUE, 301);
        die();
    }
}