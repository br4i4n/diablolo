<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Alumnos</title>
</head>
<body>
    <h2>Registro de Alumnos</h2>
    <form method="post" action="procesar_registro.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br>
        
        <label for="cedula">Cédula de Identidad:</label>
        <input type="text" id="cedula" name="cedula" required><br>

        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br>
        
        <button type="submit">Registrar Alumno</button>
    </form>

    <h2>Alumnos Registrados</h2>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cédula de Identidad</th>
            <th>Fecha de Nacimiento</th>
        </tr>
        
    </table>
</body>
</html>


<?php
  
// Conexión a la base de datos MySQL
$servername = "localhost";
$username = "user";
$password = "";
$database = "mybd";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recupera los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];

// Insertar datos en la base de datos
$sql = "INSERT INTO alumnos (nombre, apellido, cedula, fecha_nacimiento) VALUES ('$nombre', '$apellido', '$cedula', '$fecha_nacimiento')";
if ($conn->query($sql) === TRUE) {
    echo "Alumno registrado con éxito.";
} else {
    echo "Error al registrar el alumno: " . $conn->error;
}

// Consultar y mostrar los datos de todos los alumnos
$sql = "SELECT * FROM alumnos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Nombre</th><th>Apellido</th><th>Cédula de Identidad</th><th>Fecha de Nacimiento</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['nombre'] . "</td><td>" . $row['apellido'] . "</td><td>" . $row['cedula'] . "</td><td>" . $row['fecha_nacimiento'] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No hay alumnos registrados.";
}

// Cierra la conexión a la base de datos
$conn->close();
?>
