<?php

include_once 'ControlSesion.inc.php';
include_once 'Redireccion.inc.php';
include_once 'config.inc.php';

ControlSesion :: cerrar_sesion();
Redireccion :: redirigir(INDEX);

?>