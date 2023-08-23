<?php
    require_once ("/opt/lampp/htdocs/crud/crud_completo_php/view/head/head.php");
?>

    <form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"></label>
        <input style="border-radius: 1rem;" type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre del Usuario" required autofocus autocomplete="on">
        <div id="emailHelp" class="form-text"><hr></div>
    </div>

    <button type="submit" class="btn btn-primary" style="border-radius: 1rem;">Guardar</button>
    <a class="btn btn-danger" href="index.php" style="border-radius: 1rem;">Cancelar</a>
    </form>

<?php
    require_once ("/opt/lampp/htdocs/crud/crud_completo_php/view/head/footer.php");
?>