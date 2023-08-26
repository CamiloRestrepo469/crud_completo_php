<?php
class UsernameController {
    private $model;

    // Constructor de la clase UsernameController
    public function __construct() {
        // Incluir el modelo de Username
        require_once("/opt/lampp/htdocs/crud/crud_completo_php/model/usernameModel.php");
        // Crear una instancia del modelo UsernameModel
        $this->model = new UsernameModel();
    }

    // Método para guardar un nuevo usuario
    public function guardar($nombre, $email) {
        // Insertar el usuario a través del modelo
        $id = $this->model->insertar($nombre, $email);

        // Redirigir según el resultado de la inserción
        return ($id != false) ? header("Location: show.php?id=".$id) : header("Location: create.php");
    }

    // Método para mostrar los detalles de un usuario
    public function show($id) {
        // Obtener los detalles del usuario a través del modelo
        return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location: index.php");
    }

    // Método para mostrar una lista de usuarios
    public function index() {
        // Obtener la lista de usuarios a través del modelo
        return ($this->model->index()) ? $this->model->index() : false;
    }

    public function update($id, $nombre, $email){
        return ($this->model->update($id,$nombre,$email) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
    }
}
?>
<?php

    // class UsernameController {
        // Por supuesto, aquí está una explicación línea por línea del código en la clase `UsernameController` y su función:

        // ```php
        // class UsernameController {
        //     private $model;
        
        //     public function __construct() {
        //         require_once("/opt/lampp/htdocs/crud/crud_completo_php/model/UsernameModel.php");
        //         $this->model = new UsernameModel();
        //     }
        // ```
        
        // - `class UsernameController {`: Define una clase llamada `UsernameController`.
        
        // - `private $model;`: Declara una propiedad privada llamada `$model` que se utilizará para almacenar una instancia de `UsernameModel`.
        
        // - `public function __construct() {`: Define el constructor de la clase.
        
        // - `require_once("/opt/lampp/htdocs/crud/crud_completo_php/model/UsernameModel.php");`: Incluye el archivo `UsernameModel.php`, que se espera que contenga la definición de la clase `UsernameModel` que se utiliza para interactuar con la base de datos.
        
        // - `$this->model = new UsernameModel();`: Crea una nueva instancia de `UsernameModel` y la almacena en la propiedad `$model`.
        
        // ```php
        //     public function guardar($nombre, $email) {
        //         $id = $this->model->insertar($nombre, $email);
        
        //         return ($id != false) ? header("Location: show.php?id=".$id) : header("Location: create.php");
        //     }
        // ```
        
        // - `public function guardar($nombre, $email) {`: Define un método público llamado `guardar` que toma dos parámetros: `$nombre` y `$email`.
        
        // - `$id = $this->model->insertar($nombre, $email);`: Llama al método `insertar` de la instancia de `UsernameModel` (almacenada en `$model`) para insertar un nuevo usuario en la base de datos. El resultado, que es el ID del usuario recién insertado o `false`, se almacena en la variable `$id`.
        
        // - La línea `return ($id != false) ? header("Location: show.php?id=".$id) : header("Location: create.php");` realiza una redirección condicional en función del valor de `$id`. Si `$id` no es falso (lo que significa que la inserción fue exitosa), redirige al archivo `show.php` con el ID del usuario como parámetro en la URL. Si `$id` es falso (la inserción falló), redirige al archivo `create.php`.
        
        // ```php
        //     public function show($id){
        //         return ($this->model->show($id) != false) ? $this->model->show($id): header("Location:index.php");
        //     }
        // }
        // ```
        
        // - `public function show($id){`: Define un método público llamado `show` que toma un parámetro `$id`.
        
        // - La línea `return ($this->model->show($id) != false) ? $this->model->show($id): header("Location:index.php");` verifica si la llamada al método `show` de la instancia de `UsernameModel` (almacenada en `$model`) para obtener los datos del usuario con el ID proporcionado es exitosa (es decir, los datos se encontraron). Si los datos se encontraron, devuelve los datos del usuario. Si no se encontraron datos (la función `show` retorna falso), redirige a `index.php`.
        
        // En resumen, la clase `UsernameController` interactúa con la clase `UsernameModel` y proporciona métodos para insertar un nuevo usuario en la base de datos y mostrar los datos de un usuario existente. Estos métodos están diseñados para gestionar redirecciones dependiendo del éxito o el fracaso de las operaciones, como la inserción de datos o la recuperación de datos del usuario.  }
    // }


?>
