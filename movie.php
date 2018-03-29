<?php
include ('conexion.php');

$categoria = $_POST['cat'];
$directorio = 'static/movies/'.$categoria.'/';

$query = "SELECT * FROM movies WHERE category='".$categoria."'";

$result = mysqli_query($enlace,$query) or die(mysqli_error($enlace));

while (($fila = mysqli_fetch_array($result)) != NULL) {
  $aux = $fila['title'];
  $aux1 = str_replace(" ","",$aux);
  echo "
    <div class='w3-third w3-container w3-margin-bottom'>
      <img src=".$directorio.$aux1.".jpg alt='Norway' style='width:100%' class='w3-hover-opacity' height='250'>
      <div class='w3-container w3-white'>
        <p><b>".$aux."</b></p>
        <p>".$fila['description']."</p>
        <button type='button' name='button'>Rentar</button>
      </div>
    </div>";
}
?>
