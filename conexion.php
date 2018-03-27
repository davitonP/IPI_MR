<?php

$enlace = mysqli_connect('localhost','root','');
mysqli_select_db($enlace,"movierent") or die("Cannot select database!<br>". mysqli_error($enlace));
?>
