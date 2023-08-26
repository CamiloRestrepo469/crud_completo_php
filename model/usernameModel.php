<?php
    class UsernameModel {
        private $PDO;

        public function __construct() {
            require_once("/opt/lampp/htdocs/crud/crud_completo_php/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
            // Insertar un nuevo usuario en la base de datos
        public function insertar($nombre, $email) {
            $stament = $this->PDO->prepare("INSERT INTO username (nombre, email) VALUES (:nombre, :email)");
            $stament->bindParam(":nombre", $nombre);
            $stament->bindParam(":email", $email);

            return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
        }
            // Obtener los detalles de un usuario por su ID
        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM username WHERE id = :id LIMIT 1");
            $stament->bindParam(":id",$id, PDO::PARAM_INT);
            // $stament->fetch();
            return ($stament->execute()) ? $stament->fetch(PDO::FETCH_ASSOC): false ;
        }
            // Obtener todos los usuarios de la base de datos
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM username");
            return ($stament->execute()) ? $stament->fetchAll() :false;
        }
    }




// ```php
// class UsernameModel {
//     private $PDO;

//     public function __construct() {
//         require_once("/opt/lampp/htdocs/crud/crud_completo_php/config/db.php");
//         $con = new db();
//         $this->PDO = $con->conexion();
//     }
// ```

// - `class UsernameModel {`: Define una clase llamada `UsernameModel`.

// - `private $PDO;`: Declara una propiedad privada llamada `$PDO` que se utilizará para almacenar la conexión PDO a la base de datos.

// - `public function __construct() {`: Define el constructor de la clase.

// - `require_once("/opt/lampp/htdocs/crud/crud_completo_php/config/db.php");`: Incluye el archivo `db.php`, que se espera que contenga la definición de la clase `db` que se utiliza para la conexión a la base de datos.

// - `$con = new db();`: Crea una nueva instancia de la clase `db`, que se supone que maneja la conexión a la base de datos.

// - `$this->PDO = $con->conexion();`: Llama al método `conexion()` de la instancia de `db` para obtener una conexión PDO a la base de datos y almacena esta conexión en la propiedad `$PDO`.

// ```php
//     public function insertar($nombre, $email) {
//         $stament = $this->PDO->prepare("INSERT INTO username (nombre, email) VALUES (:nombre, :email)");
//         $stament->bindParam(":nombre", $nombre);
//         $stament->bindParam(":email", $email);

//         return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
//     }
// ```

// - `public function insertar($nombre, $email) {`: Define un método público llamado `insertar` que toma dos parámetros: `$nombre` y `$email`.

// - `$stament = $this->PDO->prepare("INSERT INTO username (nombre, email) VALUES (:nombre, :email)");`: Prepara una consulta SQL para insertar un nuevo registro en la tabla "username" con los valores proporcionados. Los marcadores de posición `:nombre` y `:email` se utilizarán para evitar la inyección SQL.

// - `$stament->bindParam(":nombre", $nombre);`: Vincula el valor de `$nombre` al marcador de posición `:nombre` en la consulta preparada.

// - `$stament->bindParam(":email", $email);`: Vincula el valor de `$email` al marcador de posición `:email` en la consulta preparada.

// - `return ($stament->execute()) ? $this->PDO->lastInsertId() : false;`: Ejecuta la consulta preparada. Si la ejecución es exitosa, devuelve el ID del último registro insertado (obtenido a través de `$this->PDO->lastInsertId()`). Si la ejecución falla, devuelve `false`.

// ```php
//     public function show($id){
//         $stament = $this->PDO->prepare("SELECT * FROM username WHERE id = :id LIMIT 1");
//         $stament->bindParam(":id",$id, PDO::PARAM_INT);
//         return $stament->fetch(PDO::FETCH_ASSOC);
//         // return ($stament->execute()) ? $stament->fetch(): false ;
//     }
// }
// ```

// - `public function show($id){`: Define un método público llamado `show` que toma un parámetro `$id`.

// - `$stament = $this->PDO->prepare("SELECT * FROM username WHERE id = :id LIMIT 1");`: Prepara una consulta SQL para seleccionar un registro de la tabla "username" con el ID proporcionado. Se usa el marcador de posición `:id` para evitar la inyección SQL.

// - `$stament->bindParam(":id",$id, PDO::PARAM_INT);`: Vincula el valor de `$id` al marcador de posición `:id` en la consulta preparada. También se especifica `PDO::PARAM_INT` para indicar que el valor debe ser tratado como un entero.

// - `return $stament->fetch(PDO::FETCH_ASSOC);`: Ejecuta la consulta preparada y devuelve la primera fila del resultado como un array asociativo. `PDO::FETCH_ASSOC` asegura que el resultado se devuelva en ese formato.

// - El comentario `// return ($stament->execute()) ? $stament->fetch(): false ;` parece estar desactivado, pero es una alternativa válida que devuelve la fila solo si la ejecución tiene éxito o `false` si falla.

// En resumen, esta clase `UsernameModel` se utiliza para interactuar con la base de datos en relación a los datos de los usuarios. Proporciona métodos para insertar un nuevo usuario y para recuperar la información de un usuario existente por su ID. El uso de consultas preparadas y el manejo de PDO ayudan a prevenir problemas de seguridad como la inyección SQL.

?>