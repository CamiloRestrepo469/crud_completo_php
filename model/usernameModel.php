<?php
    class usernameModel {
        private $PDO;

        public function __construct() {
            require_once("/opt/lampp/htdocs/crud/crud_completo_php/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }

        public function insertar($nombre, $email) {
            $statement = $this->PDO->prepare("INSERT INTO username (nombre, email) VALUES (:nombre, :email)");
            $statement->bindParam(":nombre", $nombre);
            $statement->bindParam(":email", $email);

            return ($statement->execute()) ? $this->PDO->lastInsertId() : false;
        }
    }


// ```php
// class usernameModel {
//     private $PDO;

//     public function __construct() {
//         require_once("/opt/lampp/htdocs/crud/crud_completo_php/config/db.php");
//         $con = new db();
//         $this->PDO = $con->conexion();
//     }

//     public function insertar($nombre, $email) {
//         $statement = $this->PDO->prepare("INSERT INTO username (nombre, email) VALUES (:nombre, :email)");
//         $statement->bindParam(":nombre", $nombre);
//         $statement->bindParam(":email", $email);

//         return ($statement->execute()) ? $this->PDO->lastInsertId() : false;
//     }
// }
// ```

// Correcciones y cambios realizados:

// 1. En el constructor, cambiamos `__contruct` por `__construct`. Estabas usando la palabra incorrecta para el constructor de la clase.

// 2. En la función `insertar`, corregimos el nombre de la variable de la declaración a `$statement` en lugar de `$stament`.

// 3. En la declaración `prepare`, agregamos los nombres de columna en la tabla (`nombre` y `email`) a la lista de campos a insertar.

// 4. En la función `bindParam`, solo se pasa un parámetro por cada marcador de posición. En tu caso, solo había un marcador de posición `:nombre`, por lo que `$email` debe estar en su propio `bindParam`.

// 5. Cambiamos `echo "conexxion";` por `return ...` en la función `insertar`. En su lugar, devolvemos el resultado de la ejecución y manejo de errores. Si deseas imprimir algo para verificar, puedes hacerlo fuera de esta función.

// 6. Asegúrate de que la ruta al archivo `db.php` sea correcta y coincida con la ubicación real del archivo.

// Estos cambios deberían hacer que tu clase `usernameModel` funcione correctamente y sea capaz de insertar nombres y correos electrónicos en la tabla "username".

?>