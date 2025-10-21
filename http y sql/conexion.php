<?php
$servername = "localhost"; // servidor
$username   = "root";      // usuario MySQL
$password   = "";          // contraseña
$dbname     = "escuela";   // nombre de la BD

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>