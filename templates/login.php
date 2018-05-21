<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


      <link rel="stylesheet" href="css/style.css">


</head>

<script type="text/javascript">
  function isUser() {
    usr = document.getElementById('email');
    pass = document.getElementById('password');
    // usr = document.users.email.value;
    // pass = document.users.password.value;
    var forData = new FormData();
    console.log(usr,pass);
    forData.append('email',usr);
    forData.append('password',pass);
    // var req = new XMLHttpRequest();
    // req.onreadystatechange = function() {
    //   if (req.readyState == 4 && req.status == 200) {
    //     document.getElementById('chat').innerHTML = req.responseText;
    //   }
    // }
    // req.open('POST','getUser.php',true);
    // req.send(forData);
  }
 </script>

<body>

  <div class="form">

      <ul class="tab-group">
        <li class="tab active"><a href="#login">Entrar</a></li>
        <li class="tab"><a href="#signup">Registro</a></li>
      </ul>

      <div class="tab-content">
          <div id="login">
              <h1>Bienvenido</h1>
              <form action="getUser.php" method="post" name="users">
                  <div class="field-wrap">
                      <label>Correo<span id='email' name="email" class="req"></span></label>
                      <input type="email"required autocomplete="off"/>
                  </div>
                  <div class="field-wrap">
                      <label>Contraseña<span class="req"></span></label>
                      <input id="password" name="password" type="password"required autocomplete="off"/>
                  </div>
                  <!-- <p class="forgot"><a href="#">Forgot Password?</a></p> -->
                  <!-- <input class="button button-block" type="submit" name="Enviar" value="Entrar"> -->
                  <button class="button button-block" onclick="isUser()"/>Entrar</button>
              </form>
         </div>

        <div id="signup">
          <h1>Registro</h1>

          <form action="/" method="post">

          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nombre<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>

            <div class="field-wrap">
              <label>
                Apellidos<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Correo electronico<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Contraseña<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>

          <button type="submit" class="button button-block"/>Registrarse</button>

          </form>

        </div>


      </div><!-- tab-content -->

</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



    <script  src="js/index.js"></script>




</body>

</html>
