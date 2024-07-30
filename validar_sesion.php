<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/60910c192f.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo.jpg" type="image/jpg">
    <title>Sesión | Banco Makiabelico</title>
</head>
<body>
    
    <section>
        <div class="contenedor_s">
            <img src="img/logo.jpg" class="logo">
            <div class="formulario">

            <?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['Email'];
    $passsword = $_POST['passsword'];

    $sql = "SELECT Nombre, Apellido FROM clientes WHERE Email = ? AND passsword = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ss", $email, $passsword);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $nombre = $user['Nombre'];
        $apellido = $user['Apellido'];
        echo "<h2>Bienvenid@ {$nombre} {$apellido} al Banco Makiabelico</h2>";
    } else {
        echo '
        <script>
        alert("Error de registro. Inténtelo de nuevo.");
        window.location = "index.html";
        </script>
        ';
    }

    $stmt->close();
    $conexion->close();
} else {
    echo 'Método no permitido';
}
?>



            </div>
            
            <a href="index.html"><button class="exit">Cerrar Sesión</button></a>
        </div>
    </section>
</body>
</html>
