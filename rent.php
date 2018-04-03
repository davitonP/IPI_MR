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
      var req = new XMLHttpRequest();
      req.onreadystatechange = function() {
        if (req.readyState == 4 && req.status == 200) {
          document.getElementById('chat').innerHTML = req.responseText;
        }
      }
      req.open('POST','getUser.php',true);
      req.send(forData);
    }
  </script>
  <body>
    <div class="row">
      <div class="col s4">
        <?php echo $_POST['movie']; ?>
      </div>
      <form class="col s4"  name="users" method="POST" action="viewMovie.php">
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
        <div class="row">
          <div class="input-field col s12">
            <input id="card" name="card" type="number" class="validate">
            <label for="Tarjeta de credito">Tarjeta de credito</label>
          </div>
        </div>
        <div class="col s1">
          <input type="submit" name="Enviar" value="Entrar">
        </div>
      </form>
    </div>
  </body>
</html>
