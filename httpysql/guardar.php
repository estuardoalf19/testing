<?php
// Importar conexión
require_once "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];

    $sql = "INSERT INTO alumnos (nombre, edad) VALUES ('$nombre', $edad)";
    
    if ($conn->query($sql) === TRUE) {
        // Redirige al listado después de guardar
        header("Location: listar_alumnos.php?mensaje=Alumno+registrado");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
