<?php
// Importar conexión
require_once "conexion.php";

// Consultar alumnos
$sql = "SELECT * FROM alumnos";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Alumnos</title>
</head>
<body>
<h1>Lista de Alumnos</h1>

<!-- Mostrar mensaje de inserción si viene de guardar_alumno.php -->
<?php if (isset($_GET['mensaje'])) : ?>
    <p><?php echo $_GET['mensaje']; ?></p>
<?php endif; ?>

<!-- Formulario para insertar alumno -->
<h2>Agregar Alumno</h2>
<form action="guardar_alumno.php" method="POST">
    Nombre: <input type="text" name="nombre" required>
    Edad: <input type="number" name="edad" required>
    <button type="submit">Agregar</button>
</form>
<hr>

<!-- Listado de alumnos -->
<h2>Lista de Alumnos</h2>

<?php if ($result->num_rows > 0) : ?>
<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Edad</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) : ?>
    <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["nombre"]; ?></td>
        <td><?php echo $row["edad"]; ?></td>
    </tr>
    <?php endwhile; ?>
</table>
<?php else : ?>
<p>No hay alumnos registrados.</p>
<?php endif; ?>

<?php $conn->close(); ?>
</body>
</html>
