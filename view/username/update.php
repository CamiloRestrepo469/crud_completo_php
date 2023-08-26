<?php
    // Incluir el controlador de username
    require_once ("/opt/lampp/htdocs/crud/crud_completo_php/controller/usernameController.php");

    // Crear una instancia del controlador de username
    $obj = new UsernameController();

    // Actualizar los datos en la base de datos
    $obj->update($_POST['id'], $_POST['nombre'], $_POST['email']);

?>
