<?php

    require_once ("/opt/lampp/htdocs/crud/crud_completo_php/controller/usernameController.php");
    $obj = new usernameController();

    if (isset($_POST['nombre']) && isset($_POST['email'])) {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        
        $obj->guardar($nombre, $email);
    } else {
        echo "Campos de nombre y correo electrónico no proporcionados.";
    }
    // require_once ("/opt/lampp/htdocs/crud/crud_completo_php/controller/usernameController.php");
    // $obj = new usernameController();
    // $obj->guardar($_POST['nombre'],['email'])


?>