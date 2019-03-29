<?php

class Tarea {

    private $id;
    private $maquina;
    private $taller;
    private $terminado;
    private $descripcion;
    private $fecha;

    public function __construct($id, $maquina, $taller, $terminado, $fecha, $descripcion) {

        $this->error_inicio = "<br><div class='alert alert-danger' role ='alert'>";
        $this->error_cierre = "</div>";

        $this->id = $id;
        $this->maquina = $maquina;
        $this->taller = $taller;
        $this->terminado = $terminado;
        $this->descripcion = $descripcion;
        $this->fecha = $fecha;
    }

// declaracion de Get


    public function getId() {
        return $this->id;
    }

    public function getMaquina() {
        return $this->maquina;
    }

    public function getTaller() {
        return $this->taller;
    }

    public function getTerminado() {
        return $this->terminado;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getFecha() {
        return $this->fecha;
    }

// declaracion de Set


    public function setId($id) {
        $this->id = $id;
    }

    public function setMaquina($maquina) {
        $this->maquina = $maquina;
    }

    public function setTaller($taller) {
        $this->taller = $taller;
    }

    public function setTerminado($terminado) {
        $this->terminado = $terminado;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

}
