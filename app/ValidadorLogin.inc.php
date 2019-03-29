<?php

class Validador_login {

    private $usuario;
    private $password;
    private $errorusuario;
    private $errorpassword;

    public function __construct($usuario, $password) {


        $this->error_inicio = "<br><div class='alert alert-danger' role ='alert'>";
        $this->error_cierre = "</div>";

        $this->usuario = "";
        $this->password = "";
        $this->errorusuario = "";
        $this->errorpassword = "";
        
        $this->errorusuario = $this->validar_usuario($usuario);
        $this->errorpassword = $this->validar_password($password);

    }

    private function variable_iniciada($variable) {
        if (isset($variable) && !empty($variable)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    private function validar_usuario($usuario) {

        if (!$this->variable_iniciada($usuario) ) {
            return "Introduce un usuario";
        } else {
            if ($usuario!="fromera"){
                return "Error de usuario";
            }
            else {
            $this->usuario = $usuario;
        }return "";
    }
    }

    private function validar_password($password) {

        if (!$this->variable_iniciada($password)) {
            return "Introduce una contraseña";
        } else {
             if ($password!="MimasFactoria2"){
                return "Error de usuario";
            }
            $this->password = $password;
        }return "";
    }

    public function obtener_usuario() {
        return $this->usuario;
    }

    public function obtener_password() {
        return $this->password;
    }

    public function obtener_error_usuario() {
        return $this->errorusuario;
    }

    public function obtener_error_password() {
        return $this->errorpassword;
    }

    public function mostrar_error_usuario() {
        if ($this->errorusuario !== '') {

            echo $this->error_inicio . $this->errorusuario . $this->error_cierre;
        }
    }

    public function mostrar_error_password() {
        if ($this->errorpassword !== '') {

            echo $this->error_inicio . $this->errorpassword . $this->error_cierre;
        }
    }
    
     public function registro_valido() {
        
        if ($this->errorusuario === "" && $this->errorpassword === "") {

            return true;
                } else {
                    return false;
                }
    }

}

//include_once 'app/config.inc.php';
//if ($NombreUsuario == $_POST["Usuario"]  && $Password == $_POST["Password"]){
//    echo "<a href='index.php'></a>";
//} else {
//    echo "<div class='alert alert-danger' role='alert'>Validacion Incorrecta</div>";
//}
?>