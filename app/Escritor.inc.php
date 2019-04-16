<?php

include_once 'app/Repositorio.inc.php';
include_once 'app/Tarea.inc.php';
include_once 'app/conexion.inc.php';


class Escritor {
    
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
<div class="container">
    <div class="row">
<div class="card col-8">
  <h6 class="card-header"><?php 
  echo "Maquina: ".$entrada -> getMaquina();
  ?>
  </h6>
  <h6 class="card-header align-items-right"><?php echo "Taller: ".$entrada -> getTaller(); ?></h6>
  <div class="card-body">
    <h6 class="card-title"><?php echo $entrada -> getFecha(); ?></h6>
    <p class="card-text"><?php echo $entrada -> getDescripcion();?></p>
    <!--<a href="#" class="btn btn-primary">Go somewhere</a>
    -->
  </div>
  
</div>
    <div class="btn-group col-4 h-50" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary">Editar</button>
  <button type="button" class="btn btn-secondary">Borrar</button>
</div>
    </div>
    
</div>
<br>
     <?php   
    }
    
       public static function escribir_terminados() {
        $entradas = RepoMaquina :: leer_terminados(Conexion::obtener_conexion());

        if (count($entradas)){
            foreach ($entradas as $entrada){
                self:: escribir_pendiente($entrada);
            }
        }
    }
    
    public static function escribir_terminado($entrada){
        if (!isset($entrada)){
            return;
        }
        ?>

<div class="card">
  <h6 class="card-header"><?php 
  echo "Maquina: ".$entrada -> getMaquina();
  ?>
  </h6>
  <h6 class="card-header align-items-right"><?php echo "Taller: ".$entrada -> getTaller(); ?></h6>
  <div class="card-body">
    <h6 class="card-title"><?php echo $entrada -> getFecha(); ?></h6>
    <p class="card-text"><?php echo $entrada -> getDescripcion();?></p>
    <!--<a href="#" class="btn btn-primary">Go somewhere</a>
    -->
  </div>
  
</div>
<br>
     <?php   
    }
}