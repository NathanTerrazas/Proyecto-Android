<?php

require_once '../BEAN/EmpleadoBean.php';
require_once '../UTIL/ConexionBD.php';

class EmpleadoDao
{
    public function registrarEmpleado(EmpleadoBean $oeb)
    {
        try {
            
            $cn = new ConexionBD();
            $cnx = $cn->getConexionBD();
            
            $nombre = $oeb->getNombreEmpleado();
            $apellido = $oeb->getApellidoEmpleado();
            $dni = $oeb->getDniEmpleado();
            $edad = $oeb->getEdadEmpleado();
            $fecha = $oeb->getFechaEmpleado();
            
            $sql = $cnx->prepare("INSERT INTO `tbl_empleado` (`nombre_emp`, `apelli_emp`, `dni_emp`, `edad`, `f_contrato`) VALUES (?, ?, ?, ?, ?);");
            
            $sql->bindParam(1,$nombre,PDO::PARAM_STR);
            $sql->bindParam(2,$apellido,PDO::PARAM_STR);
            $sql->bindParam(3,$dni,PDO::PARAM_STR);
            $sql->bindParam(4,$edad,PDO::PARAM_STR);
            $sql->bindParam(5,$fecha,PDO::PARAM_STR);
            
            $sql->execute();
            
            $estado = 0;
            
            if($cnx->lastInsertId()!=0)
            {
                $estado = "SUCCESS";
            }else
            {
                $estado = "FAILED";
            }
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        
        return $estado;
    }
    
}

?>
