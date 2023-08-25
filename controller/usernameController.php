<?php
    class usernameController {
        private $model;
    
        public function __construct() {
            require_once("/opt/lampp/htdocs/crud/crud_completo_php/model/usernameModel.php");
            $this->model = new usernameModel();
        }
    
        public function guardar($nombre, $email) {
            $id = $this->model->insertar($nombre, $email);
    
            return ($id != false) ? header("Location: show.php?id=".$id) : header("Location: create.php");
        }
    }
    
?>