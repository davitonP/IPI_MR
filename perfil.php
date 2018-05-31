
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Perfil</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <div class="form">

      <ul class="tab-group">
        <!-- <li class="tab active"><a href="#login">Entrar</a></li> -->
        <!-- <li class="tab"><a href="#signup">Registro</a></li> -->
      </ul>

      <div class="tab-content">
          <div id="login">
              <h1>Editar Datos</h1>
              <h4>Si deseas Editar tus datos ingresa tu Contraseña actual</h4>
              <h4>seguido de los nuevos valores</h4>
              <form class=""  name="users" method="POST" action="editUser.php">
                  <div class="field-wrap">
                      <label>Contraseña Actual<span class="req"></span></label>
                      <input id="password" name="password" type="password" required autocomplete="off"/>
                  </div>
                  <!-- <input class="button button-block" type="submit" name="Enviar" value="Entrar"> -->
                  <div class="field-wrap">
                    <label>Nombre<span class="req">*</span></label>
                    <input id="name" name="newname" type="text" required autocomplete="off"/>
                  </div>

                  <div class="field-wrap">
                    <label>Correo electronico<span class="req">*</span></label>
                    <input id="email" name="newemail" type="email" required autocomplete="off"/>
                  </div>

                  <div class="field-wrap">
                    <label>Contraseña<span class="req">*</span></label>
                    <input id="password" name="newpassword" type="password" required autocomplete="off"/>
                  </div>
                  <input type="submit" name="Enviar" class="button button-block" value="Registrarse">
              </form>
         </div>

        <div id="signup">
          <h1>Registro</h1>
              <form class="" name="register" method="POST" action="regisUser.php">

                  <!-- <button type="submit" class="button button-block"/>Registrarse</button> -->
              </form>
        </div>
      </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>

</html>
