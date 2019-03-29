<div class="input-group mb-3">
    <br>


    <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Maquinas</label>
    </div>
    <select class="custom-select" name="introducemaquina" id="introducemaquina">

        <option selected>Elegir...</option>
        <?php
        foreach ($maquina as $maq) {
            ?>
            <option value="<?php echo $maq; ?>"><?php echo $maq; ?></option>
            <?php
        }
        ?>
    </select>
            <?php
        $validador -> mostrar_error_maquina();
        ?>
</div>


<div class="input-group mb-3">
    <br>
    <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Taller</label>
    </div>
    <select class="custom-select" name="introducetaller" id="introducetaller">
        <option selected>Elegir...</option>
        <?php
        foreach ($taller as $tall) {
            ?>
            <option value="<?php echo $tall; ?>"><?php echo $tall; ?></option>
            <?php
        }
        ?>
    </select>
                <?php
        $validador -> mostrar_error_taller();
        ?>
</div>


<div class="input-group mb-3">

    <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Estado</label>
    </div>
    <select class="custom-select" name="introduceestado" id="introduceestado">
        <option selected>Elegir...</option>
        <?php
        foreach ($estado as $est) {
            ?>
            <option value="<?php echo $est; ?>"><?php echo $est; ?></option>
            <?php
        }
        ?>

    </select>
                <?php
        $validador -> mostrar_error_estado();
        ?>
</div>

<div class="input-group mb-3">
    <br>
    <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Fecha</label>
        </div>


        <div class="md-form">
            <input placeholder="Selected date" type="date" name="introducefecha" id="introducefecha"  class="form-control datepicker">

        </div>
              <?php
       $validador -> mostrar_error_fecha();
        ?>
    </div>



<div class="input-group mb-3">
    <br>
    <div class="input-group">
        <label class="input-group-text" for="inputGroupSelect01">Descripcion</label>
  
        <textarea class="form-control" name="introducedescripcion" id="introducedescripcion" rows="3"></textarea>
      
                <?php
        $validador -> mostrar_error_descripcion();
        ?>
    </div>

</div>





<button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
