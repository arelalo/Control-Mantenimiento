<?php

class RepoMaquina {

    public static function ObtenMaquina($conexion) {
       
            $maquina = array();
        if (isset($conexion)) {
            try {
                include_once 'app/Tarea.inc.php';
                $sql = "SHOW FIELDS FROM `Control Mantenimiento` WHERE FIELD = 'Maquina'";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

             // $maquina = $resultado;  

    preg_match("/^enum\(\'(.*)\'\)$/", $resultado[0][1], $matches);
    $maquina = explode("','", $matches[1]);

    
    
            } catch (PDOException $exc) {
                print "ERROR :" . $exc->getMessage() . '<br>';
            }
        }
        return $maquina;
    }
    
      public static function ObtenTaller($conexion) {
       
            $maquina = array();
        if (isset($conexion)) {
            try {
                include_once 'app/Tarea.inc.php';
                $sql = "SHOW FIELDS FROM `Control Mantenimiento` WHERE FIELD = 'Taller'";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

             // $maquina = $resultado;  

    preg_match("/^enum\(\'(.*)\'\)$/", $resultado[0][1], $matches);
    $taller = explode("','", $matches[1]);

    
    
            } catch (PDOException $exc) {
                print "ERROR :" . $exc->getMessage() . '<br>';
            }
        }
        return $taller;
    }
    
          public static function ObtenEstado($conexion) {
       
            $estado = array();
        if (isset($conexion)) {
            try {
                include_once 'app/Tarea.inc.php';
                $sql = "SHOW FIELDS FROM `Control Mantenimiento` WHERE FIELD = 'Terminado'";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

             // $maquina = $resultado;  

    preg_match("/^enum\(\'(.*)\'\)$/", $resultado[0][1], $matches);
    $estado = explode("','", $matches[1]);

    
    
            } catch (PDOException $exc) {
                print "ERROR :" . $exc->getMessage() . '<br>';
            }
        }
        return $estado;
    }

}
