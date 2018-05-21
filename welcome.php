<!DOCTYPE html>
<html>
<title>Movie Rent</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style> -->

<script type="text/javascript">
  function movies(cat) {
      if (cat == 'MisPeliculas') {
          var formData = new FormData();
          formData.append('cat',cat);
          var req = new XMLHttpRequest();
          req.onreadystatechange = function() {
              if (req.readyState == 4 && req.status == 200) {
                  document.getElementById('movies').innerHTML = req.responseText;
              }
          }
          req.open('POST','viewMovie.php',true);
          req.send(formData); 
      } else {
          var formData = new FormData();
          formData.append('cat',cat);
          var req = new XMLHttpRequest();
          req.onreadystatechange = function() {
              if (req.readyState == 4 && req.status == 200) {
                  document.getElementById('movies').innerHTML = req.responseText;
              }
          }
          req.open('POST','getmovie.php',true);
          req.send(formData); 
      }
  }

  function rentar(pelicula) {
    console.log("has rentado una pelicula\n");
    console.log(pelicula);
    window.location="rent.php";
    // var formData = new FormData();
    // formData.append('movie',pelicula);
    // var req = new XMLHttpRequest();
    // req.onreadystatechange = function() {
    //   if (req.readyState == 4 && req.status == 200) {
    //     document.getElementById('movies').innerHTML = req.responseText;
    //   }
    // }
    // req.open('POST','rent.php',true);
    // req.send(formData);
  }
  movies('todo');
</script>


<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:200px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <h4><b>Categorias</b></h4>

  </div>
  <div class="w3-bar-block">
    <a  onclick="movies('todo')" class="w3-bar-item w3-button"><i></i>Todo</a>
    <a  onclick="movies('accion')" class="w3-bar-item w3-button"><i></i>Accion</a>
    <a  onclick="movies('cienciaF')" class="w3-bar-item w3-button w3-padding"><i></i>Ciencia Ficcion</a>
    <a  onclick="movies('terror')" class="w3-bar-item w3-button w3-padding"><i></i>Terror</a>
    <a  onclick="movies('MisPeliculas')" class="w3-bar-item w3-button w3-padding"><i></i>Mis Peliculas</a>
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
  
<div id="movies">
  <?php //require_once('getmovie.php') ?>
</div>

</div>

<script>
</script>

</body>
</html>
