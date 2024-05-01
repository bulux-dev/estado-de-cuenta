<?php

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "budgeting_app";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "succes";

// Get form data (assuming data is coming from a form)
$type = $_POST["tipo"];
$description = $_POST["descripcion"];
$value = $_POST["valor"];


// Prepare SQL statement
$sql = "INSERT INTO Movements (type, description, value)
VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $type, $description, $value);

if ($stmt->execute()) {
  echo "New movement created successfully";
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
