<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cedula = $_POST['Cedula'];
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $direccion = $_POST['Direccion'];
    $telefono = $_POST['Telefono'];
    $email = $_POST['Email'];
    $passsword = $_POST['passsword'];

    $sql = "INSERT INTO clientes (Cedula, Nombre, Apellido, Direccion, Telefono, Email, passsword) 
            VALUES ('$cedula', '$nombre', '$apellido', '$direccion', '$telefono', '$email', '$passsword')";

    if ($conexion->query($sql) === TRUE) {
        echo '
            <script>
            alert("Registro Exitoso");
            window.location = "index.html";
        </script>

        ';
        exit();

    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
} else {
    echo "Error Makiabelico";
}

$conexion->close();
?>