<?php
require_once(implode(DS, [RAIZ, 'application', 'model', 'mdlConfiguracionPago.php']));
$configuraciones = mdlConfiguracionPago::getConfiguraciones();
$configuracion = $configuraciones['config1'];
$listarConfiguracionVentas = $configuraciones['config2'];

$notificaciones = mdlConfiguracionPago::getNotificaciones();
 ?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bioartsoft</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo URL?>css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo URL?>css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <!-- <link href="<?php echo URL?>css/timeline.css" rel="stylesheet"> -->

    <!-- Custom CSS -->
    <link href="<?php echo URL?>css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo URL?>fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?php echo URL ?>css/select2.min.css">

    <link rel="stylesheet" href="<?php echo URL ?>css/sweetalert.css">

    <link rel="stylesheet" href="<?php echo URL ?>css/datatables.min.css">

    <link rel="stylesheet" href="<?php echo URL ?>css/bootstrap-datepicker.css">

    <!-- <link rel="stylesheet" href="<?php echo URL ?>css/bootstrap-datepicker.css"> -->

    <link rel="stylesheet" href="<?php echo URL ?>css/jquery.datepick.css">
    <style type="text/css">
      #myjhoanlopez .modal-dialog{
          overflow-y: initial !important
      }
      #myjhoanlopez .modal-body{
          height: 650px;
          /* overflow-y: auto; */
      }
    </style>

    <script src="<?= URL ?>js/jquery-1.12.3.min.js"></script>
    <script src="<?= URL ?>js/parsley.min.js"></script>
    <script src="<?= URL ?>js/i18n/es.js"></script>
</head>

<body>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color: rgba(0,0,0,0.7);">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
             <center>
                <a class="navbar-brand" href="#"><img src="<?php echo URL ?>img/Logov2.png" alt="" style="width: 150px; height: 35px; margin-left:42px"/></a>
            </center>
            </div>

            <ul class="nav navbar-top-links navbar-right">
             <?php if($_SESSION['ROL'] == 1 || $_SESSION['ROL'] == 3): ?>
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-cog" style="color: #fff"></i>  <i class="fa fa-caret-down" style="color: #fff"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>

                          <button type="button" style="width: 100%;" class="btn-link" data-toggle="modal" id="configurarVenta" data-target="#myjohnatan" aria-hidden="true" onclick="inhabilitarboton()">Configurar Ventas</button>
                        <form action="<?php echo URL?>Empleados/ListarConfiguraciones" method="POST">
                        <!-- <button type="button" style="width: 100%;" class="btn-link" data-toggle="modal" data-target="#mylopez" aria-hidden="true" name="btnMostrar">Ver Configuración Ventas</button> -->

                          <?php if($_SESSION['ROL'] == 3): ?>
                            <form action="<?php echo URL?>Empleados/ListarConfiguraciones" method="POST">
                            <button type="button" style="width: 100%;" class="btn-link" data-toggle="modal" data-target="#my" aria-hidden="true" name="btnMostrar">Configuración de Pago</button>
                            </form>
                          <?php endif; ?>

                        </li>

                    </ul>

                </li>
              <?php endif; ?>
               <?php if($_SESSION['ROL'] == 1 || $_SESSION['ROL'] == 2 || $_SESSION['ROL'] == 3): ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw" style="color: #fff"></i>
                          <?php if(count($notificaciones) > 0): ?>
                            <span class="badge badge-danger" style="background-color: red;font-size: 8px;position: absolute;left: 0px;top: 12px;"><?= count($notificaciones) ?></span>
                          <?php endif ?>
                        </i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                      <?php foreach($notificaciones AS $noti): ?>
                        <li>
                            <a href="<?= $noti['url'] ?>">
                                <div>
                                    <i class="<?= $noti['icono'] ?> fa-fw"></i> <?= $noti['texto'] ?>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                      <?php endforeach ?>

                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                  <?php endif; ?>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw" style="color: #fff"></i>  <i class="fa fa-caret-down" style="color: #fff"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><i class="fa fa-user fa-fw"></i><?= $_SESSION['NOMBRE_ROL'] ?></li>
                        <li><i class="fa fa-user fa-fw"></i> <?= $_SESSION['USUARIO']. " ".   $_SESSION['USUARIO-APE'] ?></li>
                        <li class="divider"></li>
                  <li><a href="<?Php echo URL ?>login/cerrarsesion"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                      <?php
                      $ruta = "/../../model/menu.php";
                      require_once $ruta;
                      $menu = new Menu();
                      $opciones = $menu->getMenu();
                      $hijos = "";
                       ?>
                       <?php foreach($opciones AS $opcion): ?>
                         <?php if($opcion['padre_id'] == ""): ?>
                           <?php if($hijos != ""): ?>
                             <li>
                                 <a href="<?php echo URL . $opcion['url_menu'] ?>"><i class="fa fa-<?= $opcion['icono_menu'] ?>"></i> <?= $opcion['texto_menu'] ?> <span class="fa arrow"></span></a>
                                 <ul class="nav nav-second-level">
                                   <?= $hijos ?>
                                   <?php $hijos = ""; ?>
                                 </ul>
                             <li>
                           <?php else: ?>
                             <li>
                                 <a href="<?php echo URL . $opcion['url_menu'] ?>"><i class="fa fa-<?= $opcion['icono_menu'] ?>"></i> <?= $opcion['texto_menu'] ?></a>
                             <li>
                           <?php endif ?>
                         <?php else: ?>
                           <?php
                           $hijos .= '<li>' .
                                  '<a href="'. URL . $opcion['url_menu'] . '"> ' .  $opcion['texto_menu'] .'</a>' .
                               '<li>';
                           ?>
                         <?php endif ?>
                       <?php endforeach ?>

                    </ul>
                   </div>
              </div>
        </nav>

            <div class="modal fade" id="my" onload="campos()" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel" style="color: #3CB371; text-align: center">Configuración Pagos</h4>
                            </div>
                            <div class="modal-body">
                              <form class="" action="<?php echo URL?>Empleados/ListarConfiguraciones" method="post" id="myFormu" data-parsley-validate="">

                                <?php foreach ($configuracion as $valor): ?>

                                <div class="row">

                                  <div class="col-xs-12 col-md-6" id="divValorBa">
                                    <label id="labelValorBase">Valor Base Liquidación</label><br>
                                    <input type="number" class="form-control" name="txtvBase" placeholder="Valor Base" value="<?= $valor["valor_base"] ?>" readonly="" id="valorBase" data-parsley-type="integer" min="0" maxlength="7" data-parsley-required="true">
                                  </div>
                                  <div class="col-xs-12 col-md-6" id="divTiempoP">
                                  <label id="labelTiempoPago">Período de Pago</label>
                                    <select class="form-control" disabled="" id="selectperiodo" name="txttiemPago" data-parsley-required="true" data-parsley-type="alphanum">
                                    <?php
                                      $tiempo = $valor["tiempo_pago"];
                                     ?>
                                      <option><?php echo $tiempo ?></option>
                                     <?php if ($tiempo == 'Mensual'): ?>
                                      <option>Quincenal</option>
                                     <?php endif ?>
                                     <?php if ($tiempo == 'Quincenal'): ?>
                                      <option>Mensual</option>
                                     <?php endif ?>
                                    </select>
                                    <input type="hidden" name="txtidconfiguracion" value="<?= $valor["idTbl_Configuracion"] ?>">
                                  </div>
                                  <div class="col-xs-12 col-md-6" style="">

                                  </div>
                                </div>
                                <br>
                                <div class="row">
                                  <div class="col-xs-12 col-md-6" id="divPorcent">
                                    <label id="labelPorcentaje">Porcentaje Comisión</label><br>
                                    <select class="form-control" id="comision" name="txtporComision" data-parsley-required="true" disabled="" value="<?= $valor["porcentaje_comision"] ?>">
                                    <?php
                                      $tiempo = $valor["porcentaje_comision"];
                                     ?>
                                     <option><?php echo $tiempo ?></option>
                                      <option value="0.00">0</option>
                                      <option value="0.01">1</option>
                                      <option value="0.02">2</option>
                                      <option value="0.03">3</option>
                                      <option value="0.04">4</option>
                                      <option value="0.05">5</option>
                                      <option value="0.06">6</option>
                                      <option value="0.07">7</option>
                                      <option value="0.08">8</option>
                                      <option value="0.09">9</option>
                                      <option value="0.10">10</option>
                                      <option value="0.11">11</option>
                                      <option value="0.12">12</option>
                                      <option value="0.13">13</option>
                                      <option value="0.14">14</option>
                                      <option value="0.15">15</option>
                                      <option value="0.16">16</option>
                                      <option value="0.17">17</option>
                                      <option value="0.18">18</option>
                                      <option value="0.19">19</option>
                                      <option value="0.20">20</option>
                                      <option value="0.21">21</option>
                                      <option value="0.22">22</option>
                                      <option value="0.23">23</option>
                                      <option value="0.24">24</option>
                                      <option value="0.25">25</option>
                                      <option value="0.26">26</option>
                                      <option value="0.27">27</option>
                                      <option value="0.28">28</option>
                                      <option value="0.29">29</option>
                                      <option value="0.30">30</option>
                                      <option value="0.31">31</option>
                                      <option value="0.32">32</option>
                                      <option value="0.33">33</option>
                                      <option value="0.34">34</option>
                                      <option value="0.35">35</option>
                                      <option value="0.36">36</option>
                                      <option value="0.37">37</option>
                                      <option value="0.38">38</option>
                                      <option value="0.39">39</option>
                                      <option value="0.40">40</option>
                                      <option value="0.41">41</option>
                                      <option value="0.42">42</option>
                                      <option value="0.43">43</option>
                                      <option value="0.44">44</option>
                                      <option value="0.45">45</option>
                                      <option value="0.46">46</option>
                                      <option value="0.47">47</option>
                                      <option value="0.48">48</option>
                                      <option value="0.49">49</option>
                                      <option value="0.50">50</option>
                                      <option value="0.51">51</option>
                                      <option value="0.52">52</option>
                                      <option value="0.53">53</option>
                                      <option value="0.54">54</option>
                                      <option value="0.55">55</option>
                                      <option value="0.56">56</option>
                                      <option value="0.57">57</option>
                                      <option value="0.58">58</option>
                                      <option value="0.59">59</option>
                                      <option value="0.60">60</option>
                                      <option value="0.61">61</option>
                                      <option value="0.62">62</option>
                                      <option value="0.63">63</option>
                                      <option value="0.64">64</option>
                                      <option value="0.65">65</option>
                                      <option value="0.66">66</option>
                                      <option value="0.67">67</option>
                                      <option value="0.68">68</option>
                                      <option value="0.69">69</option>
                                      <option value="0.70">70</option>
                                      <option value="0.71">71</option>
                                      <option value="0.72">72</option>
                                      <option value="0.73">73</option>
                                      <option value="0.74">74</option>
                                      <option value="0.75">75</option>
                                      <option value="0.76">76</option>
                                      <option value="0.77">77</option>
                                      <option value="0.78">78</option>
                                      <option value="0.79">79</option>
                                      <option value="0.80">80</option>
                                      <option value="0.81">81</option>
                                      <option value="0.82">82</option>
                                      <option value="0.83">83</option>
                                      <option value="0.84">84</option>
                                      <option value="0.85">85</option>
                                      <option value="0.86">86</option>
                                      <option value="0.87">87</option>
                                      <option value="0.88">88</option>
                                      <option value="0.89">89</option>
                                      <option value="0.90">90</option>
                                      <option value="0.91">91</option>
                                      <option value="0.92">92</option>
                                      <option value="0.93">93</option>
                                      <option value="0.94">94</option>
                                      <option value="0.95">95</option>
                                      <option value="0.96">96</option>
                                      <option value="0.97">97</option>
                                      <option value="0.98">98</option>
                                      <option value="0.99">99</option>
                                      <option value="1">100</option>
                                    </select>
                                  </div>
                                  <div class="col-xs-12 col-md-3">
                                  </div>
                                  <div class="col-xs-12 col-md-6" id="divValorBa">
                                    <label id="labelValorBase">Valor Día</label><br>
                                    <input type="number" class="form-control" name="txtvalordia" placeholder="Valor Día" value="<?= $valor["Valor_dia"] ?>" readonly="" id="valordia" data-parsley-type="integer" min="0" maxlength="7" data-parsley-required="true">
                                  </div>
                                </div>
                                <br>
                                <div class="row">
                                </div>
                                <br>

                                <?php endforeach; ?>
                                <br>
                                <div class="row">

                                    <button type="submit" class="btn btn-success btn-md active" style="float: left; margin-left: 25%"  name="btnmodificarconfi" id="idbtn" disabled="true"><i class="fa fa-floppy-o" aria-hidden="true">   Guardar</i></button>

                                    <button type="button" class="btn btn-primary btn-md active" onclick="habilitar()" style="float: right; margin-right: 25%" id="btnhabilitar" ><i class="fa fa-pencil-square-o" aria-hidden="true">   Modificar</i></button>

                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

        <div class="modal fade" id="myjohnatan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" style="height:100% !important">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="myModalLabel" style="color: #3CB371; text-align: center">Configuración Ventas</h4>
            </div>
            <div class="modal-body">
              <form class="" action="<?php echo URL?>Ventas/index" id="FormConfigVentas" method="post" data-parsley-validate="">
                <?php foreach ($listarConfiguracionVentas as  $lisven): ?>

                  <div class="row">
                    <div class="col-xs-12 col-md-6">
                      <label>Valor Mínimo Subtotal</label><br>
                      <input type="number" class="form-control" id="valorMinimoSub" name="txtvalorminimo" readonly="" value="<?= $lisven["Valor_Subtotal_Minimo"] ?>" min="1" data-parsley-type="integer" data-parsley-required="true">
                    </div>
                    <div class="col-xs-12 col-md-6">
                      <label>Porcentaje Mínimo Descuento</label><br>
                      <input type="number" class="form-control" id="porcentajeMinimoDesc" name="txtporcentajeminimo"  readonly="" value="<?= $lisven["Porcentaje_Minimo_Dcto"]?>" min="0" data-parsley-type="number" data-parsley-required="true">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-xs-12 col-md-6">
                      <label>Valor Máximo Subtotal</label><br>
                      <input type="number" class="form-control" id="valorMaximoSub" name="txtvalormaximo" readonly="" value="<?= $lisven["Valor_Subtotal_Maximo"]?>" min="1" data-parsley-type="integer" data-parsley-required="true">
                    </div>
                    <div class="col-xs-12 col-md-6">
                      <label>Porcentaje Máximo Descuento</label><br>
                      <input type="number" class="form-control" id="porcentajeMaximoDesc" name="txtporcentajemaximo"  readonly="" value="<?= $lisven["Porcentaje_Maximo_Dcto"]?>" min="0" data-parsley-type="number" data-parsley-required="true">
                    </div>
                  </div>
                <?php endforeach; ?>
                <br>
                <div class="row">
                <div class="col-xs-1 col-md-2">
                </div>

                <div class="col-xs-5 col-md-3">
                  <button type="submit" class="btn btn-success" id="guardarConfiguracion" data-toggle="modal" name="btnRegistrarConfig" disabled="" title="Guardar Configuración"><i class="fa fa-floppy-o" aria-hidden="true" title="Guardar Configuración">   Guardar</i></button>
                </div>

                <div class="col-xs-12 col-md-3">
                </div>

                <div class="col-xs-5 col-md-4">
                  <button type="button" class="btn btn-primary" id="idhabilitar" onclick="habilitarven()" name="btnModificarConfiVen" title="Modificar Configuración"><i class="fa fa-pencil-square-o" aria-hidden="true" title="Modificar Configuración">   Modificar</i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

<script type="text/javascript">

    function habilitarven()
    {
        $("#guardarConfiguracion").removeAttr('disabled');
        $("#idhabilitar").attr('disabled','true');
        $("#valorMinimoSub").removeAttr('readonly');
        $("#porcentajeMinimoDesc").removeAttr('readonly');
        $("#valorMaximoSub").removeAttr('readonly');
        $("#porcentajeMaximoDesc").removeAttr('readonly');
      }
</script>


<script type="text/javascript">
    $(document).ready(function()
    {
      $(".price").priceFormat({centsLimit: 3, clearPrefix: true});

      $("#guardarConfiguracion").click(function()
      {
          $("#FormConfigVentas").parsley().validate();
      })
    })
</script>


            <script type="text/javascript">
              function habilitar() {
                $("#idbtn").removeAttr('disabled');
                $("#inputTipopago").removeAttr('readonly');
                $("#inputTiempoPago").removeAttr('readonly');
                $("#valordia").removeAttr('readonly');
                $("#comision").removeAttr('readonly');
                $("#valorBase").removeAttr('readonly');
                $("#btnhabilitar").attr('disabled','true');
                $("#selectperiodo").removeAttr('disabled');

              }
            </script>

            <script type="text/javascript">
              function habilitar() {
                $("#idbtn").removeAttr('disabled');
                $("#inputTipopago").removeAttr('readonly');
                $("#inputTiempoPago").removeAttr('readonly');
                $("#valordia").removeAttr('readonly');
                $("#comision").removeAttr('disabled');
                $("#valorBase").removeAttr('readonly');
                $("#btnhabilitar").attr('disabled','true');
                $("#selectperiodo").removeAttr('disabled');

              }
            </script>

            <script type="text/javascript">
              $(document).ready(function(){

                $("#idbtn").click(function(){

                  $("#myFormu").parsley().validate();
                })
              })
            </script>
            <script type="text/javascript">
              $(document).ready(function(){
                <?php
                if (isset($_SESSION['jhoan']) != false && $_SESSION['jhoan'] != null){
                  echo $_SESSION['jhoan'];
                  $_SESSION['jhoan'] = null;
                }
              ?>
              });
</script>

<script type="text/javascript">
    $("#valorBase").keydown(function(e){
      if(e.which === 189 || e.which === 69){
        e.preventDefault();
      }
  });

  $("#valordia").keydown(function(e){
    if(e.which === 189 || e.which === 69){
      e.preventDefault();
    }

});
</script>

<script type="text/javascript">
    $("#valorMinimoSub").keydown(function(e){
      if(e.which === 189 || e.which === 69){
        e.preventDefault();
      }
  });

  $("#porcentajeMinimoDesc").keydown(function(e){
    if(e.which === 189 || e.which === 69){
      e.preventDefault();
    }

});


$("#valorMaximoSub").keydown(function(e){
  if(e.which === 189 || e.which === 69){
    e.preventDefault();
  }

});

$("#porcentajeMaximoDesc").keydown(function(e){
  if(e.which === 189 || e.which === 69){
    e.preventDefault();
  }

});
</script>

<div id="page-wrapper">
