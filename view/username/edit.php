<?php
    // Incluir el encabezado de la página
    require_once ("/opt/lampp/htdocs/crud/crud_completo_php/view/head/head.php");

    // Incluir el controlador de username
    require_once ("/opt/lampp/htdocs/crud/crud_completo_php/controller/usernameController.php");

    // Crear una instancia del controlador de username
    $obj = new UsernameController();

    // Obtener los detalles del usuario utilizando el método show del controlador
    $user = $obj->show($_GET['id']);
    // print_r($user);
?>

<form action="update.php" method="post" autocomplete="off" class="text-center">
    <h2 class="text-center mb-3">Modificar registro</h2>
    <div class="mb-3 row text-center">
        <label for="staticEmail" class="col-sm-2 col-form-label text-center">ID</label>
        <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user['id']?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="inputNombre" value="<?= $user['nombre']?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input type="email" class="form-control" id="inputemail" value="<?= $user['email']?>">
        </div>
    </div>
    <div class="container">
        <input type="submit" class="btn btn-success rounded-pill me-2" value="Actualizar" >
        <a href="show.php?id=<?= $user['id']?>" class="btn btn-danger rounded-pill me-2">Cancelar</a>
    </div>
</form>



<?php
// Incluir el pie de página
require_once ("/opt/lampp/htdocs/crud/crud_completo_php/view/head/footer.php");
?>
