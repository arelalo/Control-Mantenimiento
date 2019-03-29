<div class="form-group">
    <label for="exampleInputEmail1">Usuario</label>
    <input type="text" class="form-control" name="Usuario" aria-describedby="emailHelp" placeholder="Introducir usuario">
            <?php
        $validado -> mostrar_error_usuario();
        ?>

</div>
<div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" name="Password" placeholder="Contraseña">
    
            <?php
        $validado -> mostrar_error_password();
        ?>
</div>
<!--
<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="Check1">
   <label class="form-check-label" for="Check1">Recordar</label>
</div>
-->
<button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
