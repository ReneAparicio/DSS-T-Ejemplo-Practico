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
            <input name="nombre" placeholder="Nombre">
            <input name="correo" placeholder="Correo">
            <input name="edad" placeholder="Edad">
            <button>Registrar</button>
        </form>

        <?php
        if ($_POST) {
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $edad = $_POST['edad'];

            $sql = "INSERT INTO clientes (nombre, correo, edad)
                    VALUES ('$nombre', '$correo', '$edad')";
            $conn->query($sql);

            echo "Cliente registrado";
        }
        ?>

    </div>
</div>

</body>
</html>