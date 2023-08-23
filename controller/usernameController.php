<?php
    class usernameController {
        private $model;
        public function __contruct(){
            require_once("/opt/lampp/htdocs/crud/crud_completo_php/model/usernameModel.php");
            $this->model = new usernameModel();
        }
        public function guardar($nombre){
            $id = $this->model->insertar($nombre);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }
    }
?>