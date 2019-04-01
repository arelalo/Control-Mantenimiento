<?php
include_once 'app/conexion.inc.php';
include_once 'app/Repositorio.inc.php';
include_once 'app/ControlSesion.inc.php';
include_once 'app/Redireccion.inc.php';

if (!ControlSesion::sesion_iniciada()){
    Redireccion :: redirigir(INDEX);
}
Conexion :: abrir_conexion();
$maquina = RepoMaquina :: ObtenMaquina(Conexion :: obtener_conexion());

Conexion :: cerrar_conexion();
?>

<?php
include_once 'plantillas/doc-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>



<div class="jumbotron jumbotron-fluid">

    <div class="container">
    <h2 class="display-4">Entradas Pendientes

    </h2>
</div>
   
</div>

<?php
include_once 'plantillas/doc-cierre.inc.php';
?>
