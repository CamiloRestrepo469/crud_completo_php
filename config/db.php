<?php

    class db {
        private $host = "localhost";
        private $port = "3306"; // Cambia el puerto si no estás usando el valor por defecto de MySQL
        private $dbname = "prueba";
        private $user = "root";
        private $password = "";

        // Conexión
        public function conexion() {
            try {
                // Conexión con MySQL
                $PDO = new PDO("mysql:host=".$this->host.";port=".$this->port.";dbname=".$this->dbname, $this->user, $this->password);
                $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Activa el manejo de excepciones
                return $PDO; // Retornar el objeto PDO
            } catch (PDOException $e) {
                // En caso de error
                return null; // Cambiado: Retornar null en caso de error
            }
        }
    }



    //conexion secilla -------------------------------
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "prueba";

    // // Crear una conexión
    // $conn = mysqli_connect($servername, $username, $password, $dbname);

    // // Verificar la conexión
    // if (!$conn) {
    //     die("Conexión fallida: " . mysqli_connect_error());
    // }

    // echo "Conexión exitosa a la base de datos.";

    // // Cerrar la conexión
    // mysqli_close($conn);
//-----------------------------------------------------------------

    // class db{
    //     private $host = "localhost:81";
    //     private $dbname = "prueba";
    //     private $user = "root";
    //     private $password = "";
        
    //     // Conexión
    //     public function conexion(){
    //         try {
    //             // Conexión con MySQL
    //             $options = [
    //                 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    //                 PDO::ATTR_TIMEOUT => true // Agregar un tiempo de espera (timeout) en segundos
    //             ];
    //             $PDO = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->user, $this->password, $options);
    //             // Mostrar mensaje de éxito y retornar el objeto PDO
    //             echo "¡Conexión exitosa a la base de datos!\n";
    //             return $PDO;
    //         } catch (PDOException $e) {
    //             // En caso de error, lanzar una excepción con el mensaje de error
    //             throw new Exception("Error de conexión: " . $e->getMessage());
    //         }
    //     }
    // }
    
    // try {
    //     $obj = new db();
    //     $conexion = $obj->conexion();
    //     // Puedes usar $conexion para realizar consultas en el futuro
    // } catch (Exception $e) {
    //     // Capturar y mostrar el mensaje de error en caso de falla de conexión
    //     echo $e->getMessage() . "\n";
    // }
    

    // class db{
    //     private $host = "localhost:81";
    //     private $dbname = "prueba";
    //     private $user = "root";
    //     private $password = "";
        
    //     // conexión
    //     public function conexion(){
    //         try {
    //             // conexión con MySQL
    //             $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
    //             echo "¡Conexión exitosa a la base de datos!";
    //             return $PDO; // Corregido: Retornar el objeto PDO
    //         } catch (PDOException $e) {
    //             // en caso de error
    //             return $e->getMessage();
    //         }
    //     }
    // }
    
    // $obj = new db();
    // $conexion = $obj->conexion(); // Corregido: Almacenar el objeto de conexión en una variable
    // print_r($conexion); // Corregido: Imprimir el objeto de conexión

?>