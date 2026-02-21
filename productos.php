<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">

<h2>Productos</h2>

<?php
$result = $conn->query("SELECT * FROM productos");

while ($row = $result->fetch_assoc()) {

    $imagen = "";

    if ($row['nombre'] == "Laptop Gamer") {
        $imagen = "img/laptop.jpg";
    } elseif ($row['nombre'] == "Mouse RGB") {
        $imagen = "img/mouse.jpg";
    } elseif ($row['nombre'] == "Teclado Mecánico") {
        $imagen = "img/teclado.jpg";
    }

    echo "<div class='card'>";
    echo "<img src='$imagen' style='width:200px'><br><br>";
    echo "<h3>" . $row['nombre'] . "</h3>";
    echo "<p>Precio: $" . $row['precio'] . "</p>";
    echo "<a href='comentario.php?id=" . $row['id'] . "'>Ver reseñas</a>";
    echo "</div>";
}
?>

</div>

</body>
</html>