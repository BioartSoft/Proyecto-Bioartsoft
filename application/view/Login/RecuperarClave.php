<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Recuperar Contraseña</title>
    <link href="<?php echo URL?>css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo URL?>css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo URL?>css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo URL?>css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo URL?>fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?php echo URL ?>css/select2.min.css">

    <link rel="stylesheet" href="<?php echo URL ?>css/sweetalert.css">

    <link rel="stylesheet" href="<?php echo URL ?>css/datatables.min.css">

    <link rel="stylesheet" href="<?php echo URL ?>css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="<?php echo URL ?>css/bootstrap-datepicker.css">

    <!-- <link rel="stylesheet" href="<?php echo URL ?>libs/swiftmailer-5.x"> -->

    <link rel="stylesheet" href="<?php echo URL ?>css/jquery.datepick.css">
    <link rel="stylesheet" href="<?php echo URL ?>css/sweetalert.css">
    <script src="<?= URL ?>js/jquery-1.12.3.min.js"></script>
    <script src="<?= URL ?>js/parsley.min.js"></script>
    <script src="<?= URL ?>js/i18n/es.js"></script>

    </head>

    <body background="<?= URL ?>img/fondo.png" style="background-size: cover">

      <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-green">
                        <div class="panel-heading">
                           <center>
                            <!-- <img alt="Brand" src="<?= URL ?>img/LOGOv2.png" style="height:100px; width: 300px"> -->
                            <h3 class="form-group" style="color: white">¿Olvidaste tu contraseña?</h3>
                          </center>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post">
                              <center>

                              </center>
                                <fieldset><br>
                                  <?php if ($mensaje == true): ?>
                                    <script type="text/javascript">
                                      swal("La contraseña fue enviada a su correo");
                                    </script>
                                  <?php endif; ?>

                                  <?php if ($error2 == true): ?>
                                    <div class="alert alert-danger ">
                                        <p>
                                          Usuario o correo incorrectos
                                        </p>
                                    </div>
                                  <?php endif; ?>

                                  <?php if ($error3 == true): ?>
                                    <div class="alert alert-danger ">
                                        <p>
                                          Por favor ingresar usuario y correo
                                        </p>
                                    </div>
                                  <?php endif; ?>

                                  <form  id="form-clave" method="post" action="<?= URL ?>Personas/registrarPersonas" data-parsley-validate="">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Nombre de usuario" name="txtNombreUsu" type="text" data-parsley-type="alphanum">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" id="email" name="txtEmailUsu" type="text" data-parsley-type="email">
                                    </div><br>
                                      <button type="submit" name="btnEnviar-Correo" id="#enviar" class="btn btn-lg btn-success btn-block">Enviar</button>

                                      <a href="<?= URL ?>login/iniciar" class="btn btn-lg btn-default btn-block">Salir</a>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>




        <script src="<?php echo URL ?>js/bootstrap.min.js"></script>

        <script src="<?php echo URL ?>js/sb-admin-2.js"></script>

        <script src="<?php echo URL ?>js/application.js"></script>

        <script src="<?php echo URL ?>js/metisMenu.min.js"></script>

        <script type="text/javascript" src="<?php echo URL ?>js/jquery.select2.js"></script>
        <script type="text/javascript" src="<?php echo URL ?>js/select2.full.min.js"></script>
        <script type="text/javascript" src="<?php echo URL ?>js/select2.min.js"></script>
        <script type="text/javascript">
          $(".js-example-basic-multiple").select2();
        </script>
        <script type="text/javascript" src="<?php echo URL ?>js/sweetAlert.min.js"></script>
        <script type="text/javascript" src="<?php echo URL ?>js/funciones.js"></script>
        <script type="text/javascript" src="<?php echo URL ?>js/funciones2.js"></script>
        <script type="text/javascript" src="<?php echo URL ?>js/datatables.min.js"></script>

        <script src="<?php echo URL ?>js/jquery.anexgrid.js"></script>
        <script src="<?php echo URL ?>js/bootstrap-datepicker.min.js"></script>
        <script src="<?php echo URL ?>js/bootstrap-datetimepicker.min.js"></script>
        <script src= "<?= URL ?>js/jquery.price_format.2.0.js"></script>

  <script type="text/javascript">
  $(document).ready(function(){

    $("#enviar").click(function(){

      $("#email").css("background", "red");
      $("#form-clave").parsley().validate();

    })

  })
  </script>

  <?php if($alerta == true): ?>
      <script type="text/javascript">
          swal("La contraseña fue enviada a su correo!");
      </script>
  <?php endif; ?>
  </body>
</html>
