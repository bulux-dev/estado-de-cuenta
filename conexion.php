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

// Access form data
$type = $_REQUEST["tipo"];
$description = $_REQUEST["descripcion"];
$valor = $_REQUEST["valor"];

// Create SQL statement (replace "your_table_name" with your actual table name)
$sql = "INSERT INTO transactions (type, description, price) VALUES ('$type', '$description', '$valor')";

if(mysqli_query($conn,$sql)){
  echo "data inserted succesfully";
}else{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
