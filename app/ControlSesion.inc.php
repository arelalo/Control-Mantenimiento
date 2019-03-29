<?php



class ControlSesion {

    public static function iniciar_sesion($nombre) {
        if (session_id() == '') {
            session_start();
        }
        $_SESSION['nombre'] = $nombre;
    }

    public static function cerrar_sesion() {
        if (session_id() == '') {
            session_start();
        }

        if (isset($_SESSION['nombre'])) {
            unset($_SESSION['nombre']);
        }

        session_destroy();
    }

    public static function sesion_iniciada() {
       
        if (session_id() == '') {
            session_start();
        }
        if (isset($_SESSION['nombre'])){
            return TRUE;
            
        }else {
            return FALSE;
        }
    }
    

}
