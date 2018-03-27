<?php
require_once('conexion.php');

$query = "SELECT * FROM users";
$result = mysqli_query($enlace,$query) or die(mysqli_error($enlace));
// echo $_POST['email'];
// echo "\n";
// echo $_POST['password'];
$aux = true;
while (($fila = mysqli_fetch_array($result)) != NULL) {
  if ($fila['email'] == $_POST['email'] && $fila['password'] == $_POST['password']) {
    //
    $aux = false;
  }
}
if ($aux) {
  header('Location: index.php');
}else {
  header('Location: welcome.php');
}
?>
