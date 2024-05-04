<?php

// Conexión a la base de datos
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "budgeting_app";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL
$sql = "SELECT * FROM transactions WHERE type = 'ingreso'";

// Ejecutar la consulta
$result = $conn->query($sql);

// Comprobar si la consulta se ha ejecutado correctamente
if ($result->num_rows > 0) {
    // Mostrar los resultados
    while($row = $result->fetch_assoc()) {
        echo  "Description: " . $row["description"] . " - price: " . $row["price"] . "<br>";
    }
} else {
    echo "No se encontraron resultados";
}

// Cerrar la conexión
$conn->close();

?>
