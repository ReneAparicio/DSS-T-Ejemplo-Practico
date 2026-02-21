<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Comentarios</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">

<?php
$id = $_GET['id'];

if ($_POST) {
    $usuario = $_POST['usuario'];
    $texto = $_POST['texto'];

    $sql = "INSERT INTO comentarios (producto_id, usuario, texto)
            VALUES ('$id', '$usuario', '$texto')";
    $conn->query($sql);
}

$result = $conn->query("SELECT * FROM comentarios WHERE producto_id = '$id'");

while ($row = $result->fetch_assoc()) {
    echo "<div class='card'>";
    echo "<b>" . $row['usuario'] . ":</b> " . $row['texto'];
    echo "</div>";
}
?>

<div class="card">
<form method="POST">
    <input name="usuario" placeholder="Nombre">
    <input name="texto" placeholder="Comentario">
    <button>Publicar</button>
</form>
</div>

</div>

</body>
</html>