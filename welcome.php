<!DOCTYPE html>
<html>
<title>Movie Rent</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <!-- <img src="{{ img }}"><br><br> -->
    <h4><b>Categorias</b></h4>

  </div>
  <div class="w3-bar-block">
    <a href="/" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i></i>Accion</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i></i>Ciencia Ficcion</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i></i>Terror</a>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <div class="w3-container">
    <h1><b>Movie Rent</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">

    </div>
    </div>
  </header>

<div class='w3-row-padding'>
<?php
include ('movie.php');
?>
</div>

</div>

<script>
// Script to open and close sidebar
// function w3_open() {
//     document.getElementById("mySidebar").style.display = "block";
//     document.getElementById("myOverlay").style.display = "block";
// }
//
// function w3_close() {
//     document.getElementById("mySidebar").style.display = "none";
//     document.getElementById("myOverlay").style.display = "none";
// }
</script>

</body>
</html>
