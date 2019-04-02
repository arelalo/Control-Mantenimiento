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

    public static function insertar_campo($conexion, $insertarcampo) {

        $campo_insertado = false;
        $ponmaquina = $insertarcampo->getMaquina();
        $pontaller = $insertarcampo->getTaller();
        $ponfecha = $insertarcampo->getFecha();
        $pondescripcion = $insertarcampo->getdescripcion();
        $ponterminado = $insertarcampo->getTerminado();
        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO `Control Mantenimiento`(`id`, `maquina`, `taller`, `fecha`, `descripcion`, `terminado`) VALUES(NULL, ? , ? , ? , ? , ? )";
                $sentencia = $conexion->prepare($sql);
                


                $sentencia->bindParam(1, $ponmaquina, PDO::PARAM_STR);
                $sentencia->bindParam(2, $pontaller, PDO::PARAM_STR);
                $sentencia->bindParam(3, $ponfecha, PDO::PARAM_STR);
                $sentencia->bindParam(4, $pondescripcion, PDO::PARAM_STR);
                $sentencia->bindParam(5, $ponterminado, PDO::PARAM_STR);

                $campo_insertado = $sentencia->execute();
               
            } catch (PDOException $exc) {
                echo "error". $exc->getTraceAsString();
            }
        }
        return $campo_insertado;
    }
    
    public static function leer_pendientes($conexion){
        
        $entradas = [];
        if (isset($conexion)){
            try {
                $sql = "SELECT * FROM `Control Mantenimiento`";
                $sentencia = $conexion->query($sql);
                $sentencia -> execute();
                $resultado = $sentencia->fetchAll();
                
                if (count($resultado)){
                    foreach ($resultado as $fila){
                        $entradas [] = new Tarea(
                                $fila['id'], $fila['maquina'], $fila['taller'], $fila['fecha'], $fila['descripcion'], $fila['terminado']
                                );
                       
                    }
                   
                }
                
                
            } catch (PDOException $ex) {
                echo "error". $exc->getTraceAsString();
                
            }
        } return $entradas;
    } 

}
