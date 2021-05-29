<?php
 
class ConexionBD {
   protected $manejador = "mysql";
    private static $servidor = "localhost";
    private static $usuario = "root";
    private static $password = "";
    protected $db_name = "bd_semanadiez";
    private $cnx;
    
    public function getConexionBD()
    {
        try {
            $params = array(PDO::ATTR_PERSISTENT=>true,PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
            $this->cnx = new PDO($this->manejador.":host=".self::$servidor.";dbname=".$this->db_name, self::$usuario, self::$password,$params);
            return $this->cnx;
        } catch (PDOException $exc) {
            echo "Error de Conexion ".$exc->getMessage();
        }
    }
    
    public function closeConexionBD()
    {
        try {
            $this->cnx = null;
        } catch (PDOException $exc) {
            echo "Error en Cerrar Conexión ".$exc->getMessage();
        }
        }
 
}
