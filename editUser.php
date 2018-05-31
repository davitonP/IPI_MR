<?php
require_once('conexion.php');

$query = "SELECT * FROM users";
$result = mysqli_query($enlace,$query) or die(mysqli_error($enlace));
echo "\n";
$antpass =  $_POST['password'];
$aux = true;
while (($fila = mysqli_fetch_array($result)) != NULL) {
  if ($fila['password'] == $_POST['password']) {
    $aux = false;
  }
}
if ($aux) {
  header('Location: perfil.php');
}else {
  $name = $_POST['newname'];
  $email = $_POST['newemail'];
  $pass = $_POST['newpassword'];
  $query = "UPDATE users SET name='$name', email='$email', password='$pass' WHERE password = '$antpass' ";
  echo $query;
  $insert_registro = mysqli_query($enlace,$query) or die(mysqli_error($enlace));
  header('Location: index.php');
   // $query = "UPDATE empleados SET apaterno='$apaterno', amaterno='$amaterno',nombre='$nombre', domicilio='$domicilio', ciudad='$ciudad', cp='$cp', fecha='$fecha' WHERE id = $id ";
}
?>
