<?php

require_once '../UTIL/ConexionBD.php';
require_once '../BEAN/UsuarioBean.php';

class UsuarioDao {
    
    public function validarUsuario(UsuarioBean $oub)
    {
        try {
            
            $cn = new ConexionBD();
            $cnx = $cn->getConexionBD();
            
            $usuario = $oub->getUsuario();
            $password = $oub->getPassword();
            
            $sql = $cnx->prepare("select * from tbl_usuario WHERE usuario = ? and password = ?");
            
            $sql->bindParam(1,$usuario,PDO::PARAM_STR);
            $sql->bindParam(2,$password,PDO::PARAM_STR);
            
            $sql->execute();
            
            $filas = $sql->rowCount();
            
            if($filas>0)
            {
               $array[] = array('estado'=>'success');  
            }else
            {
               $array[] = array('estado'=>'failed'); 
            }
                
            $cnx = $cn->closeConexionBD();
            
        } catch (Exception $ex) {
            $array[] = array('estado'=>'failed'); 
            echo 'Error :'.$ex->getMessage();
        }
        return $array;
    }
    
}

?>
