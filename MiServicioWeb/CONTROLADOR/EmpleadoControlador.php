<?php

require_once '../BEAN/EmpleadoBean.php';
require_once '../DAO/EmpleadoDao.php';

$op = htmlentities($_POST['op']);

switch ($op)
{
    case "Create":{
        
        $nombre = htmlentities($_POST['nombre']);
        $apellido = htmlentities($_POST['apellido']);
        $dni = htmlentities($_POST['dni']);
        $edad = htmlentities($_POST['edad']);
        $fecha = htmlentities($_POST['fecha']);
        
        $objempbean = new EmpleadoBean();
        $objempdao = new EmpleadoDao();
        
        $objempbean->setNombreEmpleado($nombre);
        $objempbean->setApellidoEmpleado($apellido);
        $objempbean->setDniEmpleado($dni);
        $objempbean->setEdadEmpleado($edad);
        $objempbean->setFechaEmpleado($fecha);
        
        $estado = $objempdao->registrarEmpleado($objempbean);
       
        echo $estado;
       
        break;}
    default :{break;}
    
}

?>

