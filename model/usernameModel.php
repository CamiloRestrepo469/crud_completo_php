<?php
    class usernameModel{
        private $PDO;
        public function __contruct(){
            require_once("/opt/lampp/htdocs/crud/crud_completo_php/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($nombre){
            $stament = $this->PDO->prepare("INSERT INTO username VALUES(null,:nombre)");
            $stament->bindParam(":nombre",$nombre);
            echo "conexxion";
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }
    }
?>