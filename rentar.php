<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form">
          <div id="signup">
            <h1>Comprueba tus datos para continuar</h1>
                <form lass=""  name="users" method="POST" action="getUser.php" action="viewMovie.php">
                    <div class="field-wrap">
                        <label>Correo electronico<span class="req">*</span></label>
                        <input id="email" name="email" type="email" required autocomplete="off"/>
                    </div>
                    
                    <div class="field-wrap">
                        <label>Contraseña<span class="req">*</span></label>
                        <input id="password" name="password" type="password" required autocomplete="off"/>
                    </div>
                    
                    <div class="field-wrap">
                      <label>Tarjeta de credito<span class="req">*</span></label>
                      <input id="card" name="card" type="number" required autocomplete="off"/>
                    </div>
                    
                    <input type="hidden" id='movie' name="movie" value="<?php echo $_POST['movie'];?>">
                    
                    <input type="submit" name="Enviar" class="button button-block" value="Registrarse">
                </form>
            <h1>Pelicula: <?php echo $_POST['movie'];?></h1>
          </div>
        </div>
  </div>

</body>
</html>
