<?php
    class Conexion {
        protected $dblink;
                
        function __construct() {
            $servidor = "mysql:host=localhost;port=3306;dbname=prueba";
            $usuario = "root";
                      
            $this->dblink = new PDO($servidor, $usuario, '');
            $this->dblink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->dblink->exec("SET NAMES utf8");
        }
        
}
?>