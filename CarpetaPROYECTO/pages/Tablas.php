<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Alumnos</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Registro de Alumnos</h1>

        <?php
        $server = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'mydb';

        $conn = mysqli_connect($server, $username, $password, $database);

        if (!$conn) {
            die('Conexión fallida: ' . mysqli_connect_error());
        }

        if (isset($_POST['guardar'])) {
            $nombre = $_POST['nombre'];
            $fecha_nacimiento = $_POST['fecha_nacimiento'];
            $ci_persona = $_POST['ci_persona'];

            
            $sql_insert_persona = "INSERT INTO Persona (CI, Nombre, Admin, `E-Mail`, Institucion_CodigoI) 
                VALUES ('$ci_persona', '$nombre', 0, '', 1)";

            if (mysqli_query($conn, $sql_insert_persona)) {
               
                $sql_insert_alumno = "INSERT INTO Alumno (`Fecha de Nacimiento`, `Persona_CI`) 
                    VALUES ('$fecha_nacimiento', '$ci_persona')";

                if (mysqli_query($conn, $sql_insert_alumno)) {
                    echo "<p class='message'>Alumno registrado con éxito.</p>";
                } else {
                    echo "Error: " . $sql_insert_alumno . "<br>" . mysqli_error($conn);
                }
            } else {
                echo "Error: " . $sql_insert_persona . "<br>" . mysqli_error($conn);
            }
        }
        ?>

        <div class="form-container">
            <h2>Registrar un nuevo alumno:</h2>
            <form action="" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" required>
                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                <input type="date" name="fecha_nacimiento" required>
                <label for="ci_persona">CI de la persona:</label>
                <input type="text" name="ci_persona" required>
                <input type="submit" name="guardar" value="Guardar">
            </form>
        </div>
    </div>
</body>
</html>


<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
}

h1 {
    text-align: center;
    background-color: blue;
    color: white;
    padding: 20px;
}

form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: white;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

label {
    display: block;
    margin-top: 10px;
}

input[type="text"],
input[type="date"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: blue;
}

</style>

