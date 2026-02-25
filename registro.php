<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">
    <div class="card">

        <h2>Registro</h2>

        <form method="POST">
            <input name="nombre" placeholder="Nombre" required>
            <input name="correo" placeholder="Correo" required>
            <input name="edad" placeholder="Edad" required>
            <button>Registrar</button>
        </form>

        <?php
        if ($_POST) {

            $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS);
            $correo = filter_input(INPUT_POST, 'correo', FILTER_VALIDATE_EMAIL);
            $edad = filter_input(INPUT_POST, 'edad', FILTER_VALIDATE_INT);

            if ($nombre && $correo && $edad) {

                $stmt = $conn->prepare("INSERT INTO clientes (nombre, correo, edad) VALUES (?, ?, ?)");
                $stmt->bind_param("ssi", $nombre, $correo, $edad);
                $stmt->execute();

                echo "Registro correcto";

            } else {
                echo "Datos inválidos";
            }
        }
        ?>

    </div>
</div>

</body>
</html>