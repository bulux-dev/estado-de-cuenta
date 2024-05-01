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

$stmt = $conn->prepare("INSERT INTO transactions(type, description, price) VALUES ('egreso','pluma',15)");

$stmt->execute();

$conn->close();
?>
