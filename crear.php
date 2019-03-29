<?php
include_once 'app/conexion.inc.php';
include_once 'app/Repositorio.inc.php';
include_once 'app/ValidadorAlta.inc.php';
include_once 'app/Tarea.inc.php';
include_once 'app/ControlSesion.inc.php';
include_once 'app/Redireccion.inc.php';

if (!ControlSesion::sesion_iniciada()){
    Redireccion :: redirigir(INDEX);
}

Conexion :: abrir_conexion();
$maquina = RepoMaquina :: ObtenMaquina(Conexion :: obtener_conexion());
$taller = RepoMaquina :: ObtenTaller(Conexion :: obtener_conexion());
$estado = RepoMaquina :: ObtenEstado(Conexion :: obtener_conexion());


Conexion :: cerrar_conexion();

if (isset($_POST['enviar'])) {
    
    Conexion :: abrir_conexion();
    
    $validador = new ValidadorAlta($_POST['introducemaquina'], $_POST['introducetaller'], $_POST['introducefecha'], $_POST['introducedescripcion'], $_POST['introduceestado']);
    
    if ($validador-> registro_valido()){
        //echo "todo correcto";
        $insert = new Tarea ('', $validador ->obtener_maquina(), $validador -> obtener_taller(), $validador -> obtener_terminado(), $validador-> obtener_fecha(), $validador-> obtener_descripcion());
        $campo_insertado = RepoMaquina :: insertar_campo(Conexion :: obtener_conexion(), $insert );
   

        if ($campo_insertado){
            //redirigir
        }
    }
    Conexion :: cerrar_conexion();
//print_r($validador) ;
}
?>


<?php
include_once 'plantillas/doc-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Formulario de alta</h1>
        <p class="lead"></p>
    </div>
</div>

<div class="container">

    <div class="row ">

        <div class="col-2">

        </div>
        <div class="col-8" >
            <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

                <?php
                if (isset($_POST['enviar'])) {
                    include_once 'plantillas/altas_validado.inc.php';
                } else {
                    include_once 'plantillas/altas_vacio.inc.php';
                }
                ?>

            </form>          
        </div>
        <div class="col-2">

        </div>
    </div>

</div>

<?php
include_once 'plantillas/doc-cierre.inc.php';
?>