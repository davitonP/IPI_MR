<?php
require_once('conexion.php');

// $result = mysqli_query($enlace,$query) or die(mysqli_error($enlace));
$aux = true;
$correo = $_POST['email'];
$contrasena = $_POST['password'];
$nombre = $_POST['name'];

$query = "INSERT INTO users VALUES (default,'$nombre','$correo','$contrasena')";

$insert_registro = mysqli_query($enlace, $query);

header('Location: welcome.php');

?>
