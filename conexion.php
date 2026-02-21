<?php
$conn = new mysqli("localhost", "root", "", "techzone");

if ($conn->connect_error) {
    die("Error de conexión");
}
?>