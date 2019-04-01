<?php
include_once 'app/config.inc.php';
include_once 'app/ValidadorLogin.inc.php';
include_once 'app/Redireccion.inc.php';
include_once 'app/ControlSesion.inc.php';

if (ControlSesion::sesion_iniciada()) {
    Redireccion :: redirigir(INICIO);
}

if (isset($_POST['enviar'])) {
    $validado = new Validador_login($_POST['Usuario'], $_POST['Password']);
    //print_r($validador);

    if ($validado->registro_valido()) {
        ControlSesion::iniciar_sesion("Fran");
        Redireccion :: redirigir(INICIO);
    } else {
        //echo "algo mal";
    }
}
?>


<?php
include_once 'plantillas/doc-declaracion.inc.php';
?>

<div class="container-fluid">


    <div class="row align-items-center">

        <div class="col">



        </div>
        <div class="col" >
            <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

                <?php
                if (isset($_POST['enviar'])) {
                    include_once 'plantillas/logeo_lleno.inc.php';
                } else {
                    include_once 'plantillas/logeo_vacio.inc.php';
                }
                ?>

            </form>          
        </div>
        <div class="col">

        </div>
    </div>

</div>


<?php
include_once 'plantillas/doc-cierre.inc.php';
?>