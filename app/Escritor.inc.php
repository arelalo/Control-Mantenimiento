<?php

include_once 'app/Repositorio.inc.php';
include_once 'app/Tarea.inc.php';
include_once 'app/conexion.inc.php';


class Escritor_Pendientes {
    
    public static function escribir_pendientes() {
        $entradas = RepoMaquina :: leer_pendientes(Conexion::obtener_conexion());

        if (count($entradas)){
            foreach ($entradas as $entrada){
                self:: escribir_pendiente($entrada);
            }
        }
    }
    
    public static function escribir_pendiente($entrada){
        if (!isset($entrada)){
            return;
        }
        ?>

<div class="card w-75">
  <h5 class="card-header"><?php 
  echo $entrada -> getMaquina(). str_repeat ('&nbsp;', 60) .$entrada -> getTaller();
  ?>
  </h5>
  <h5 class="card-header align-items-right">Fecha</h5>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
     <?php   
    }
}