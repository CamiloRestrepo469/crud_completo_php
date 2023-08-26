<?php
require_once ("/opt/lampp/htdocs/crud/crud_completo_php/view/head/head.php");
require_once ("/opt/lampp/htdocs/crud/crud_completo_php/controller/usernameController.php");
$obj = new UsernameController();
// Obtener los registros de la base de datos utilizando el método index del controlador
$rows = $obj->index(); // Obtener los registros de la base de datos
?>

<div class="text-center mb">
    <!-- Botón para regresar a la página de inicio -->
    <a href="/crud/crud_completo_php/view/username/create.php" class="btn btn-primary rounded-pill me-2">Agregar</a>
    
    <!-- Botón para mostrar un modal de confirmación de eliminación -->
    <button class="btn btn-danger rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</button>
    
</div>

<!-- Tabla para mostrar los detalles del usuario -->
<table class="table mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">EMAIL</th>
            <th scope="col">ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        <?php if($rows): ?>
            <?php foreach($rows as $row): ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['nombre']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td>
                        <a href="show.php?id=<?= $row['id']?>" class="btn btn-primary rounded-pill me-2">ver</a>
                        <a href="edit.php?id=<?= $row['id']?>" class="btn btn-success rounded-pill me-2">Actualizar</a>
                                <!-- Botón para mostrar un modal de confirmación de eliminación -->
                        <a class="btn btn-danger rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

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

                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4" class="text-center">No hay registros disponibles</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php
require_once ("/opt/lampp/htdocs/crud/crud_completo_php/view/head/footer.php");
?>
