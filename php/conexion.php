<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "presupuesto";

// Create connection using mysqli (procedural style)
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$stmt = mysqli_prepare($conn,"INSERT INTO presupuesto_tabla(NULL,itemName,itemPrice) VALUES (?,?)");

$descripcion = isset($_REQUEST['descripcion']) ? mysqli_real_escape_string($conn,$_REQUEST['descripcion']):'';
$valor = isset($_REQUEST['valor']) ? mysqli_real_escape_string($conn,$_REQUEST['valor']):'';

$stmt->bind_param("ss",$descripcion,$valor);
$stmt->execute();

if($stmt->affected_rows > 0){
  echo "articulo agregado";
} else{
  echo "Error";
}
$stmt->close();
// You can now perform mysqli queries here

mysqli_close($conn);
?>



