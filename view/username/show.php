<?php
// Incluir el encabezado de la página
require_once ("/opt/lampp/htdocs/crud/crud_completo_php/view/head/head.php");

// Incluir el controlador de username
require_once ("/opt/lampp/htdocs/crud/crud_completo_php/controller/usernameController.php");

// Crear una instancia del controlador de username
$obj = new UsernameController();

// Obtener los detalles del usuario utilizando el método show del controlador
$date = $obj->show($_GET['id']);
?>

<div class="container mt-5">
    <h2 class="text-center">DETALLES</h2>
    <div class="text-center">
        <!-- Botón para regresar a la página de inicio -->
        <a href="index.php" class="btn btn-primary rounded-pill me-2">Regresar</a>
        
        <!-- Botón para editar los detalles del usuario -->
        <a href="edit.php?id=<?= $date['id']?>" class="btn btn-success rounded-pill me-2">Actualizar</a>
        
        <!-- Botón para mostrar un modal de confirmación de eliminación -->
        <a class="btn btn-danger rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>
    </div>

    <!-- Modal para confirmación de eliminación -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el detalle?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Una vez eliminado no se puede recuperar el detalle
                </div>
                <div class="modal-footer">
                    <!-- Botón para cerrar el modal -->
                    <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Cerrar</button>
                    
                    <!-- Botón para eliminar el detalle -->
                    <a href="delete.php?id=<?= $date['id']?>" class="btn btn-danger rounded-pill">Eliminar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabla para mostrar los detalles del usuario -->
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">EMAIL</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $date['id']; ?></td>
                <td><?= $date['nombre']; ?></td>
                <td><?= $date['email']; ?></td>
            </tr>
        </tbody>
    </table>
</div>

<?php
// Incluir el pie de página
require_once ("/opt/lampp/htdocs/crud/crud_completo_php/view/head/footer.php");
?>
