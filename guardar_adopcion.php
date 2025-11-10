<?php 
include("includes/header.php");


$servername = "localhost";
$username = "root";     
$password = "";         
$dbname = "adoptify"; 



$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}


$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mascota = $_POST['mascota'];
$mensaje = $_POST['mensaje'];
$tipoDocumento = $_POST['tipoDocumento'];
$numeroDocumento = $_POST['numeroDocumento'];
$estadoCivil = $_POST['estadoCivil'];
$nivelEducativo = $_POST['nivelEducativo'];
$ocupacion = $_POST['ocupacion'];
$estrato = $_POST['estrato'];
$pais = $_POST['pais'];
$ciudad = $_POST['ciudad'];
$direccion = $_POST['direccion'];


$stmt = $conn->prepare("INSERT INTO solicitudes 
(nombre, email, telefono, mascota, mensaje, tipoDocumento, numeroDocumento, estadoCivil, nivelEducativo, ocupacion, estrato, pais, ciudad, direccion) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");


if (!$stmt) {
  die("Error al preparar la consulta: " . $conn->error);
}


$stmt->bind_param("ssssssssssssss", 
  $nombre, 
  $email, 
  $telefono, 
  $mascota, 
  $mensaje, 
  $tipoDocumento, 
  $numeroDocumento, 
  $estadoCivil, 
  $nivelEducativo, 
  $ocupacion, 
  $estrato, 
  $pais, 
  $ciudad, 
  $direccion
);

if ($stmt->execute()) {
  echo "<h2>✅ Solicitud enviada correctamente</h2>";
  echo "<a href='formulario_adopcion.php'>Volver al formulario</a>";
} else {
  echo "❌ Error al guardar los datos: " . $stmt->error;
}


$stmt->close();
$conn->close();
?>

