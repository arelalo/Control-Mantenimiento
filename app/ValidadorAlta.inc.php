<?php

class ValidadorAlta {

    private $error_inicio;
    private $error_cierre;
    private $maquina;
    private $taller;
    private $fecha;
    private $descripcion;
    private $estado;
    private $errmaquina;
    private $errtaller;
    private $errfecha;
    private $errdescripcion;
    private $errterminado;

    public function __construct($maquina, $taller, $fecha, $descripcion, $estado) {
        $this->error_inicio = "<br><div class='alert alert-danger' role ='alert'>";
        $this->error_cierre = "</div>";
        $this->maquina = "";
        $this->taller = "";
        $this->fecha = "";
        $this->descripcion = "";
        $this->estado = "";

        $this->errmaquina = $this->validar_maquina($maquina);
        $this->errtaller = $this->validar_taller($taller);
        $this->errfecha = $this->validar_fecha($fecha);
        $this->errdescripcion = $this->validar_descripcion($descripcion);
        $this->errestado = $this->validar_estado($estado);
    }

    private function variable_iniciada($variable) {
        if (isset($variable) && !empty($variable)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    private function validar_maquina($maquina) {
        if (!$this->variable_iniciada($maquina)) {
            return "Maquina no asignada";
        } else {
            $this->maquina = $maquina;
        }
        if ($maquina == "Elegir...") {
            return "Maquina no seleccionada";
        }
        return "";
    }

    private function validar_taller($taller) {

        if (!$this->variable_iniciada($taller)) {
            return "Taller no asignado";
        } else {
            $this->taller = $taller;
        }
        if ($taller == "Elegir...") {
            return "Taller no seleccionado";
        }
        return "";
    }
    
        private function validar_estado($estado) {

        if (!$this->variable_iniciada($estado)) {
            return "Estado no asignado";
        } else {
            $this->estado = $estado;
        }
        if ($estado == "Elegir...") {
            return "Estado no seleccionado";
        }
        return "";
    }

    private function validar_fecha($fecha) {

        if (!$this->variable_iniciada($fecha)) {
            return "Fecha no asignada";
        } else {
            $this->fecha = $fecha;
        }return "";
    }

    private function validar_descripcion($descripcion) {

        if (!$this->variable_iniciada($descripcion)) {

            return "Escribe alguna descripcion";
        } else {
            $this->descripcion = $descripcion;
        }
        return "";
    }



    public function obtener_maquina() {
        return $this->maquina;
    }

    public function obtener_taller() {
        return $this->taller;
    }

    public function obtener_fecha() {
        return $this->fecha;
    }

    public function obtener_descripcion() {
        return $this->descripcion;
    }

    public function obtener_terminado() {
        return $this->estado;
    }

    public function obtener_error_maquina() {
        return $this->errmaquina;
    }

    public function obtener_error_taller() {
        return $this->errtaller;
    }

    public function obtener_error_fecha() {
        return $this->errfecha;
    }

    public function obtener_error_descripcion() {
        return $this->errdescripcion;
    }

    public function obtener_error_terminado() {
        return $this->errestado;
    }

    public function poner_fecha() {
        if ($this->fecha !== "") {
            echo 'value="' . $this->nombre . '"';
        }
    }

    public function mostrar_error_maquina() {
        if ($this->errmaquina !== '') {

            echo $this->error_inicio . $this->errmaquina . $this->error_cierre;
        }
    }

    public function mostrar_error_taller() {
        if ($this->errtaller !== '') {

            echo $this->error_inicio . $this->errtaller . $this->error_cierre;
        }
    }
        public function mostrar_error_estado() {
        if ($this->errestado !== '') {

            echo $this->error_inicio . $this->errestado . $this->error_cierre;
        }
    }
    
        public function mostrar_error_fecha() {
        if ($this->errfecha !== '') {

            echo $this->error_inicio . $this->errfecha . $this->error_cierre;
        }
    }

    public function mostrar_error_descripcion() {
        if ($this->errdescripcion !== '') {
            echo $this->error_inicio . $this->errdescripcion . $this->error_cierre;
        }
    }
    
    public function registro_valido() {
        if ($this->errmaquina === "" && $this->errtaller === "" && $this->errestado === "" && 
                $this->errfecha === "" && $this->errdescripcion === "") {
            return true;
                } else {
                    return false;
                }
    }

}
