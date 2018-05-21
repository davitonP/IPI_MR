<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>welcome</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  </head>

  <script type="text/javascript">
    function isUser() {
      usr = document.users.email.value;
      pass = document.users.password.value;
      var forData = new FormData();
      forData.append('email',usr);
      forData.append('password',pass);
      console.log(usr);
      console.log(pass);
      var req = new XMLHttpRequest();
      req.onreadystatechange = function() {
        if (req.readyState == 4 && req.status == 200) {
          document.getElementById('chat').innerHTML = req.responseText;
        }
      }
      req.open('POST','getUser.php',true);
      req.send(forData);
    }

    function registerUser() {
      name = document.register.name.value;
      usr = document.register.email.value;
      pass = document.register.password.value;
      var forData = new FormData();
      forData.append('email',usr);
      forData.append('password',pass);
      console.log(usr);
      console.log(pass);
      var req = new XMLHttpRequest();
      req.onreadystatechange = function() {
        if (req.readyState == 4 && req.status == 200) {
          document.getElementById('chat').innerHTML = req.responseText;
        }
      }
      req.open('POST','regisUser.php',true);
      req.send(forData);
    }

  </script>
  <style type="text/css">
  body{
    color: black;
    font-family: Verdana;
    background-color: white;
    }

  #login{
    border: white 20px solid;
    /* border-top: black 20px hidden; */
    background: white;
  }
  body{
  background: #808076;
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
#r{
  background: #808076;
  width: 50px
}

  </style>

  <body>
    <div class="row">
      <div id="l1"class="col s4">

      </div>

<div id="login" class="col s4">
  <div id="r"class="row">

  </div>
  <div class="row">
    <form class=""  name="users" method="POST" action="getUser.php">
      <div class="row">
        <div class="input-field col s12" name="email">
          <input id="email" name="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="col s1">
        <input type="submit" name="Enviar" value="Entrar">
      </div>
    </form>


      <form class="" name="register" method="POST" action="regisUser.php">
        <div class="row">
          <div class="input-field col s12">
            <input id="name" name="name" type="text" class="validate">
            <label for="name">Nombre</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="email" name="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="password" name="password" type="password" class="validate">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="col s1">
          <input type="submit" name="Enviar" value="Registrarse">
        </div>
      </form>
    </div>
    </div>

  </div>
  <a class="waves-effect waves-light btn" href="welcome.php">welcome</a>
  </body>
</html>
