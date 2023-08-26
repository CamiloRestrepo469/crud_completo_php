<?php require_once ("/opt/lampp/htdocs/crud/crud_completo_php/view/head/head.php"); ?>

<form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del Usuario</label>
        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre del Usuario" required autofocus>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email o Correo</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Email o Correo" required>
    </div>
    <button type="submit" class="btn btn-primary rounded-pill">Guardar</button>
    <a class="btn btn-danger rounded-pill" href="index.php">Cancelar</a>
</form>

<?php require_once ("/opt/lampp/htdocs/crud/crud_completo_php/view/head/footer.php"); ?>
