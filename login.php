<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">
    <div class="card">

        <h2>Login</h2>

        <form method="POST">
            <input name="usuario" placeholder="Usuario">
            <input name="password" placeholder="Contraseña">
            <button>Entrar</button>
        </form>

        <?php
        if ($_POST) {
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
            $result = $conn->query($sql);

            echo ($result->num_rows > 0) ? "Acceso concedido" : "Error";
        }
        ?>

    </div>
</div>

</body>
</html>