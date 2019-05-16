<?php
include_once 'app/conexion.inc.php';
include_once 'app/Repositorio.inc.php';
include_once 'app/ValidadorAlta.inc.php';
include_once 'app/Tarea.inc.php';
include_once 'app/ControlSesion.inc.php';
include_once 'app/Redireccion.inc.php';
include_once 'app/config.inc.php';

if (!ControlSesion::sesion_iniciada()) {
    Redireccion :: redirigir(INDEX);
}

Conexion :: abrir_conexion();
$maquina = RepoMaquina :: ObtenMaquina(Conexion :: obtener_conexion());
$taller = RepoMaquina :: ObtenTaller(Conexion :: obtener_conexion());
$estado = RepoMaquina :: ObtenEstado(Conexion :: obtener_conexion());


Conexion :: cerrar_conexion();

if (isset($_POST['buscamaquina'])) {

    Conexion :: abrir_conexion();

   

    if ($_POST['introducemaquina'] != "Elegir Maquina") {
        echo "todo correcto";
        


        
    } else {
        echo "algo mal";
    }
    Conexion :: cerrar_conexion();

}
?>




<?php
include_once 'plantillas/doc-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>



<nav class="navbar navbar-light bg-light">
  <form class="form-inline" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
     <select class="custom-select" name="introducemaquina" id="introducemaquina">
        <option selected>Elegir Maquina</option>
        <?php
        foreach ($maquina as $maq) {
            ?>
            <option value="<?php echo $maq; ?>"><?php echo $maq; ?></option>
            <?php
        }
        ?>
    </select>
      <button type="submit" class="btn btn-outline-success my-2 my-sm-0" name="buscamaquina">Busqueda</button>
  </form>
  
</nav>





<?php
include_once 'plantillas/doc-cierre.inc.php';
?>