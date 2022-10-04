<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ffec4ec2ed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login.css" />

    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>

    <title>Login</title>
  </head>
  <body>
    <section>
      <div class="row g-0">
        <div class="col-lg-7">
          <div class="img-1"><h1 class="portal">DRIMER <br> Portal del Trabajador</h1></div>
          </div>
          <div class="col-lg-5 bg-white ">
          <div class="login-box">
              <div class="box-login">
                <div class="box-avatar">
                    <img src="img/logo.png" class="avatar" alt="Avatar Image">
                </div>
              <h1>¡Bienvenido usuario!</h1>

              <form action="validar.php" method="post">

                <!-- USERNAME INPUT -->
                <label for="username">Usuario</label>
                <input class="placeholder" id="user" name="usuario" type="text" placeholder="Ingresa tu usuario" required>
                <!-- PASSWORD INPUT -->
                <label for="password">Contraseña</label>
                <input id="pass" name="contraseña" type="password" placeholder="Ingresa tu contraseña" required>
                <input id="enviar" type="submit" value="Ingresar"><br>
              </form>
              </div>
            </div>
          </div>
        </div>
    </section>
  </body>
</html>
