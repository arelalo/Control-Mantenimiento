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