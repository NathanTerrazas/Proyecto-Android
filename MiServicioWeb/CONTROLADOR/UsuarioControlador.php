<?php

require_once '../BEAN/UsuarioBean.php';
require_once '../DAO/UsuarioDao.php';

$op = htmlentities($_POST['op']);

switch ($op)
{
    case "Login":{
        
        $usuario = htmlentities($_POST['usuario']);
        $password = htmlentities($_POST['password']);
        
        $oub = new UsuarioBean();
        
        $oub->setUsuario($usuario);
        $oub->setPassword($password);
        
        $oud = new UsuarioDao();
        
        $response = $oud->validarUsuario($oub);
        
        $code = json_encode($response,JSON_UNESCAPED_UNICODE);
        $decode = json_decode($code,true);
        
        $estado = $decode[0]['estado'];
        
        if($estado==="success")
        {
            echo 'SUCCESS';
        }else
        {
            //echo 'FAILED';
        }
        
        break;}
        
    case "Create":{ 
        
    break;}

    case "Update":{ 
        
        break;}
        
        case "Delete":{ 
        
        break;}
    
    default :{ echo 'NO INGRESO  A Login'; break;}
}

?>

