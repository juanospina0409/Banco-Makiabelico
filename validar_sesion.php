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

                    } else {
                        echo '
                        <script>
                        alert("Error de registro. Inténtelo de nuevo.");
                        window.location = "index.html";
                        </script>
                    ';
                    }

                    $stmt->close();
                }

                ?>

            </div>
            <h2>Bienvenid@ <?php echo $nombre; echo " "; echo $apellido ?> al Banco Makiabelico</h2>
            
            <a href="index.html"><button class="exit">Cerrar Sesión</button></a>
        </div>
    </section>
</body>
</html>
