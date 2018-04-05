<?php
include ('conexion.php');

$categoria = $_POST['cat'];
$directorio = 'static/movies/'.$categoria.'/';

$query = "SELECT * FROM movies WHERE category='".$categoria."'";

$result = mysqli_query($enlace,$query) or die(mysqli_error($enlace));


while (($fila = mysqli_fetch_array($result)) != NULL) {
  $aux = $fila['title'];
  $desc = utf8_decode($fila['description']);
  $x = strlen ($desc);
  $l =20;
  if  ($x > $l) {
    $desc =  substr($desc, 0 , 300) . " ...";
  }
  $aux1 = str_replace(" ","",$aux);
  $r  = "rentar("."'".$aux."'".")";
  // <button onclick=\"".$r."\" type='button' name='button'>Rentar</button>
  echo "
    <div class='w3-third w3-container w3-margin-bottom'>
      <img src=".$directorio.$aux1.".jpg alt='Norway' style='width:100%' class='w3-hover-opacity' height='250'>
      <div class='w3-container w3-white'>
        <p><b>".$aux."</b></p>
        <h10>".$desc."</h10>
        <h5>Precio: $".$fila['precio']."</h5>
        <form action='rent.php' method='POST'>
          <input type = 'hidden' name = 'movie' id='movie' value = ".$fila['id'].">
          <div class=''>
            <input type='submit' name='Enviar' value='Rentar'>
          </div>
        </form>
      </div>
    </div>";
}
?>
