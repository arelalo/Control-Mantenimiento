<?php
include_once 'app/conexion.inc.php';
include_once 'app/Repositorio.inc.php';
include_once 'app/ControlSesion.inc.php';
include_once 'app/Redireccion.inc.php';
include_once 'app/Escritor.inc.php';

if (!ControlSesion::sesion_iniciada()){
    Redireccion :: redirigir(INDEX);
}
Conexion :: abrir_conexion();
$maquina = RepoMaquina :: ObtenMaquina(Conexion :: obtener_conexion());


?>

<?php
include_once 'plantillas/doc-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>



<div class="jumbotron jumbotron-fluid">

    <div class="container">
    <h3 class="display-6">Entradas Pendientes

    </h3>
</div>
   
</div>
<?php
Escritor :: escribir_pendientes();
?>

<?php
Conexion :: cerrar_conexion();
include_once 'plantillas/doc-cierre.inc.php';
?>
