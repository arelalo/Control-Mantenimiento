<?php

class RepositorioMaquina {

    public static function ObtenerMaquinas($conexion) {
        $maquina = array();
        if (isset($conexion)) {
            try {
                include_once 'Usuario.inc.php';
                $sql = "SELECT * FROM `Control Mantenimiento` ";
                $sentencia = $conexion->prepare($sql);
                $sentencia -> execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $tipomaquina) {
                        //$maquina[] = new Usuario(
                        //        $tipomaquina['Maquina']
                        //        );
                    }
                } else {
                    print 'No hay tipos de maquinas';
                }
            } catch (PDOException $exc) {
                print "ERROR :" . $exc->getMessage() . '<br>';
            }
        }
        return $maquina;
    }

}
