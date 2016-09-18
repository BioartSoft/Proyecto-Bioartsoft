<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= URL ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?= URL ?>css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= URL ?>css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= URL ?>css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body background="<?= URL ?>img/fondo.png" style="background-size: cover">

    <div class="container">
          <div class="row">
              <div class="col-md-4 col-md-offset-4">
                  <div class="login-panel panel panel-default">
                      <div class="panel-heading">
                         <center>
                          <img alt="Brand" src="<?= URL ?>img/LOGOv2.png" style="height:100px; width: 300px">
                          <h3 class="panel-title"></h3>
                        </center>
                      </div>
                      <div class="panel-body">
                          <form role="form" method="post">
                              <fieldset><br>
                                <?php if ($estado == true): ?>
                                  <div class="alert alert-danger ">
                                      <p>
                                        Usuario inhabilitado, no puede ingresar
                                      </p>
                                  </div>
                                <?php endif ?>
                                <?php if ($error == true): ?>
                                  <div class="alert alert-danger ">
                                      <p>
                                        Usuario o contraseña incorrecta
                                      </p>
                                  </div>
                                <?php endif ?>
                                <?php if ($errorVacios==true): ?>
                                  <div class="alert alert-danger ">
                                      <p>
                                        Por favor ingrese usuario y contraseña
                                      </p>
                                  </div>
                                <?php endif ?>
                                  <div class="form-group">
                                      <input class="form-control" placeholder="Nombre de usuario" name="txtPersona" type="text" >
                                  </div>
                                  <div class="form-group">
                                      <input class="form-control" placeholder="Contraseña" name="txtContras" type="password" value="">
                                  </div><br>
                                    <button type="submit" name="btnIniciar" class="btn btn-lg btn-success btn-block">Iniciar sesión</button>
                                  <div class="checkbox">
                                      <label>
                                        <center>
                                          <input name="remember" type="checkbox" value="Remember Me">Recordarme
                                          <a href="<?= URL ?>login/recuperarContras" style="margin-left: 80px;color: blue; text-decoration: underline">Recuperar contraseña</a>
                                        </center>
                                      </label>
                                  </div>
                              </fieldset>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>

    <!-- jQuery -->
    <script src="<?= URL ?>js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= URL ?>js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?= URL ?>js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>



</body>

</html>
