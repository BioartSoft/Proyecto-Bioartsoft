
<div class="modal fade" id="modal-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard ="false" data-backdrop = "static">
  <div class="modal-dialog modal-lg" role="document" style="width: 50% !important">
    <div class="modal-content">
      <div class="modal-body">
        <form class="" action="" method="post">
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-primary" >
              <div class="panel-heading" stlyle="height: 70px; width: 100px">
                    <center><span style="text-align:center; color: #fff; font-size: 20px">BIOARTSOFT</span></center>
                </div>
                <div class="panel-body">
                  <p>&copy; SENA. Todos los derechos reservados</p>
                  <p>Información del sistema</p>
                  <div class="panel panel-default">
                    <p style="margin-left: 5px">Versión del software: 1.0. 2016</p>
                    <p style="margin-left: 5px">Desarrolladores:</p>
                    <p style="margin-left: 5px">Aprendices SENA</p>
                    <ul>
                      <li>Juan David Vargas Penagos (jdvargas752@misena.edu.co)</li>
                      <li>Jhoan Esneider López Tapias (jhoanlt19@gmail.com)</li>
                      <li>Johnatan Ramírez Restrepo (jramirezres86@gmail.com)</li>
                      <li>Diego Alexander López Gómez (dalopez971@misena.edu.co)</li>
                      <li>Cristian Alexis Piedrahita Rojas ()</li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
            <button type="button" class="btn btn-primary btn-active pull-rigth"  data-dismiss="modal" style="margin-left:80%"><i class="fa fa-check-circle" aria-hidden="true">   Aceptar</i></button>
        </div>
      </div>
    </div>
  </div>


</div>

    <script>
        var url = "<?php echo URL; ?>";
    </script>

  <script src="<?php echo URL ?>js/bootstrap.min.js"></script>

  <script src="<?php echo URL ?>js/sb-admin-2.js"></script>

  <script src="<?php echo URL ?>js/application.js"></script>

  <script src="<?php echo URL ?>js/metisMenu.min.js"></script>

  <!-- <script type="text/javascript" src="<?php echo URL ?>js/jquery.select2.js"></script> -->
  <script type="text/javascript" src="<?php echo URL ?>js/select2.full.min.js"></script>
  <script type="text/javascript" src="<?php echo URL ?>js/select2.min.js"></script>
  <script type="text/javascript">
    $(".js-example-basic-multiple").select2();
  </script>
  <script type="text/javascript" src="<?php echo URL ?>js/sweetAlert.min.js"></script>
  <script type="text/javascript" src="<?php echo URL ?>js/funciones.js"></script>
  <script type="text/javascript" src="<?php echo URL ?>js/funciones2.js"></script>
  <script type="text/javascript" src="<?php echo URL ?>js/datatables.min.js"></script>
  <script type="text/javascript" src="js/Spanish.js"></script>

  <script type="text/javascript">
  $(document).ready(function(){
  $('#dataTables-example').DataTable({
    language: {
      url: "http://cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
    }, responsive: true,
    sort: false
  });

});
  </script>

  <!-- <script src="<?php echo URL ?>js/jquery.anexgrid.js"></script> -->
  <script src="<?php echo URL ?>js/bootstrap-datepicker.min.js"></script>
  <!-- <script src="<?php echo URL ?>js/bootstrap-datetimepicker.min.js"></script> -->
  <script src= "<?= URL ?>js/jquery.price_format.2.0.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    <?php
    if (isset($_SESSION['alerta']) != false && $_SESSION['alerta'] != null){
      echo $_SESSION['alerta'];
      $_SESSION['alerta'] = null;
    }
  ?>
  });
</script>

<script type="text/javascript">
      function editar(id_persona, listarE)
      {
        var tiempop = $("#inputTipoPago").val();
        if (tiempop == "Mensual") {
          $("#idDia").attr('max',30)
          $("#idDia").val(30);
        }
        else
        {
          $("#idDia").val(15);
        }

        var campos = $(listarE).parent().parent().parent();
        $('#identi').val(campos.find("td").eq(0).text());
        $('#tipoEmpleado').val(campos.find("td").eq(3).text());
        $('#fecha_Contrato').val(campos.find("td").eq(4).text());
        $('#idfechafin').val(campos.find("td").eq(5).text());
        $('#fechaliquidacion2').val(campos.find("td").eq(5).text());
        $('#idfechaPagoPJunio').val(campos.find("td").eq(6).text());
        $('#idfechainicial').val(campos.find("td").eq(7).text());
        $('#estadoem').val(campos.find("td").eq(9).text());

        $('#myjhoanlopez').modal("show");

           setTimeout(function(){
            var tipo = $(listarE).attr("data-tipo");
            var identidad = $(listarE).attr("data-identi");
            var fechafin = $(listarE).attr("data-fechafin");
            var fechafinContrato = $(listarE).attr("data-fechafin");
            var nombre = $(listarE).attr("data-nombre");
            var fechacontrato = $(listarE).attr("data-fechacontrato");
            var PagoPrimaJunio = $(listarE).attr("data-fechaPagoPJunio");
            var fechainicial2 = $(listarE).attr("data-fechaultipago");
            var estaemple = $(listarE).attr("data-estadoemp");
            var emp = $('#tipoEmpleado').val(tipo);
            var identidad = $('#identi').val(identidad);
            var fechafin = $('#idfechafin').val(fechafin);
            var fechafincontrato = $('#fechaliquidacion2').val(fechafinContrato);
            var nombre = $('#nombre').val(nombre);
            var fechacontrato = $("#fecha_Contrato").val(fechacontrato);
            var PagoPrimaJunio = $("#idfechaPagoPJunio").val(PagoPrimaJunio);
            var fechainicial = $("#idfechainicial").val(fechainicial2);
            var estadoemple = $("#estadoem").val(estaemple);
            var fechaactual = new Date().toJSON().slice(0,10);

                if (estaemple == 0) {
                  swal({
                  title: "El empleado se encuentra inhabilitado, para registrar pagos cambie el estado del empleado.!",
                  type: "warning",
                  confirmButton: "#3CB371",
                  confirmButtonText: "btn-danger",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Aceptar",
                  closeOnConfirm: false,
                }),
                  setTimeout(function(){
                  $('#myjhoanlopez').modal("hide");
                },900);
                }
                else if(fechainicial2 == fechaactual)
                {
                  swal({
                  title: "El empleado ya tiene pagos registrados en la fecha actual.!",
                  type: "warning",
                  confirmButton: "#3CB371",
                  confirmButtonText: "btn-danger",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Aceptar",
                  closeOnConfirm: false,
                  }),
                    setTimeout(function(){
                    $('#myjhoanlopez').modal("hide");
                  },900);
                }

                    if (tipo == "Empleado-fijo"){

                      var fechaactual2 = new Date().toJSON().slice(0,10);
                      $("#divvalorpenditeprestamo").hide();
                      $("#divDiasLaborados").hide();
                      $("#divPagoTotalPrimates").hide();
                      $("#divValorDiatemporal").hide();
                      $("#divPagoTotalTemporales").hide();
                      $("#CalcularTemporal").hide();
                      $("#divTipoPago").show();
                      $("#divTiempoPago").show();
                      $("#divPorcentaje").show();
                      $("#divValorBase").hide();
                      $("#divIdentificacion").show();
                      $("#valor_Ventas").show();
                      $("#divFechaInicial").show();
                      $("#divPagoTotal").show();
                      $("#detalle").show();
                      $("#labelValorVentas").show();
                      $("#calcularFijo").show();
                      $("#divvalorprima").hide();
                      $("#divvalorvacaciones").hide();
                      $("#divinteresescesantias").hide();
                      $("#divPagoTotalliquidacion").hide();
                      $("#tipoEmp").val(1);
                      $("#btnGuardarPagoFijo").show();
                      $("#divdias").show();
                      $("#divValordia").show();
                      $("#idbotonventas").show();
                      $("#btnGuardarliqui").hide();
                      $("#btnGuardarPrima").hide();
                      $("#btnGuardartempo").hide();
                      // $("#divvalorpenditeprestamo").hide();
                      $("#divvalorultipago").hide();
                      // $("#divvalorprimaservicios").hide();
                      var datee = fechaactual2;
                      var elemm = datee.split('-');
                      var yearr = elemm[0];
                      var mess = elemm[1];
                      var diaa = elemm[2];

                      if (mess == 6 && diaa >= 15 && diaa <=30 ) {
                          $("#divvalorprimaservicios").show();
                      };

                      if (mess == 12 && diaa >= 15 && diaa <=30 ) {
                          $("#divvalorprimaservicios").show();
                      };
                    }


                    if (tipo == "Empleado-temporal") {
                      $("#divvalorpenditeprestamo").hide();
                      $("#divDiasLaborados").show();
                      $("#divValorDia").show();
                      $("#divPagoTotalPrimates").hide();
                      $("#CalcularTemporal").show();
                      $("#divTipoPago").hide();
                      $("#divdias").hide();
                      $("#divTiempoPago").hide();
                      $("#divPorcentaje").hide();
                      $("#divValordia").hide();
                      $("#divValorBase").hide();
                      $("#divIdentificacion").show();
                      $("#valor_Ventas").hide();
                      $("#divFechaInicial").hide();
                      $("#divPagoTotal").hide();
                      $("#divPagoTotalliquidacion").hide();
                      $("#labelValorVentas").hide();
                      $("#calcularFijo").hide();
                      $("#divvalorprima").hide();
                      $("#divvalorvacaciones").hide();
                      $("#tipoEmp").val(2);
                      $("#divValorDiatemporal").removeAttr('style');
                      $("#divrow").removeAttr('style');
                      $("#valor_Ventas").removeAttr("data-parsley-required");
                      $("#btnGuardartempo").show();
                      $("#btnGuardarliqui").hide();
                      $("#btnGuardarPrima").hide();
                      $("#idbotonventas").hide();
                      $("#divPagoTotalTemporales").show();
                      $("#divFechacontrato").hide();
                      $("#divFechapagoliquidacion").hide();
                      // $("#divvalorpenditeprestamo").hide();
                      $("#divvalorventas").hide();
                      $("#divvalorultipago").hide();
                      $("#divvalorprimaservicios").hide();

                    };
           },500);
      }

       function cantiprestamos() {
              var identidad = $("#iden").val();

            $.ajax({
              url: url +'Empleados/validarcantiPres',
              type: 'POST',
              dataType: 'JSON',
              data: {identidad: identidad},
            })
            .done(function(respuesta) {
              if(respuesta.v != null && respuesta.v == 2){
                  // alert("No se puede");
                  mensaje5();
                  setTimeout(function(){

                  $('#myjh').modal("hide");
                  },1200);
                  }
            })
            }

      function prestamosEmp(id_persona, listarE)
      {
        // var tipo = $(listarE).attr("data-tipo-empleado");
        // alert(tipo);

        var campos = $(listarE).parent().parent();
        $('#iden').val(campos.find("td").eq(0).text());
        $('#nombre').val(campos.find("td").eq(1).text());
        $('#tipoEmplea').val(campos.find("td").eq(3).text());
        $('#estadoempleado').val(campos.find("td").eq(9).text());
        cantiprestamos();
        $('#myjh').modal("show");
           setTimeout(function(){



            var tipo = $(listarE).attr("data-tipo");
            var identidad = $(listarE).attr("data-identi");
            var Estado = $(listarE).attr("data-estadoE");

                    var emp = $('#tipoEmpleado').val(tipo);
                    var identidad = $('#identi').val(identidad);
                    var Estadoemp = $("#estadoempleado").val(Estado);


                      if (Estado == 0) {
                        swal({
                        title: "El empleado se encuentra inhabilitado, para registrar préstamos cambie el estado del empleado.",
                        type: "warning",
                        confirmButton: "#3CB371",
                        confirmButtonText: "btn-danger",
                        // cancelButtonText: "Cancelar",
                        // showCancelButton: true,
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "Aceptar",
                        closeOnConfirm: false,
                      }),
                        setTimeout(function(){
                        $('#myjh').modal("hide");
                      },900);
                      };

                    if (tipo == "Empleado-fijo"){

                      $("#btnGuardarPagoFijo").show();
                      $("#btncancelarreistro").show();
                      $("#divDiasLaborados").hide();
                      $("#divPagoTotalPrimate").hide();
                      $("#divValorDia").hide();
                      $("#CalcularTemporal").hide();
                      $("#divTipoPago").show();
                      $("#divTiempoPago").show();
                      $("#divPorcentaje").show();
                      $("#divValorBase").show();
                      $("#divIdentificacion").show();
                      $("#valor_Ventas").show();
                      $("#divFechainicial").hide();
                      $("#divPagoTotal").show();
                      $("#detalle").show();
                      $("#labelValorVentas").show();
                      $("#calcularFijo").show();
                      $("#divvalorprima").hide();
                      $("#divvalorvacaciones").hide();
                      $("#divinteresescesantias").hide()
                      $("#tipoEmp").val(1);

                    }

                    if (tipo == "Empleado-temporal") {
                      // $("#modalcss").attr({
                      //   style: 'width : 40% !important'

                      // });

                      $("#divDiasLaborados").show();
                      $("#divValorDia").show();
                      $("#divValorDiafijo");
                      $("#CalcularTemporal").show();
                      $("#divTipoPago").hide();
                      $("#divTiempoPago").hide();
                      $("#divPorcentaje").hide();
                      $("#divValorBase").hide();
                      $("#divIdentificacion").show();
                      $("#valor_Ventas").hide();
                      $("#divFechaInicial").hide();
                      $("#divPagoTotal").show();
                      $("#detalle").show();
                      $("#labelValorVentas").hide();
                      $("#calcularFijo").hide();
                      $("#divvalorprima").hide();
                      $("#divvalorvacaciones").hide();
                      $("#divinteresescesantias").show()
                      $("#tipoEmp").val(2);

                    };
           },500);

      }

      function cancelarregiconfiguracion() {

              swal({
      title: "Los datos del registro no se guardaran",
      type: "warning",
      confirmButton: "#3CB371",
      confirmButtonText: "btn-danger",
      cancelButtonText: "Cancelar",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Aceptar",
      closeOnConfirm: false,

    },
    function(isConfir){
        if (isConfir) {
          swal({
            title: "Registro de configuración cancelado!",
            type: "error",
            confirmButton: "#3CB371",
            confirmButtonText: "Aceptar",
            // confirmButtonText: "Cancelar",
            closeOnConfirm: false,
            closeOnCancel: false
          },
          function(isConfir){
            window.location.reload();
          });
        }
        });
            }

          function cerrar() {
            window.location.reload();
            }

  </script>

  <script type="text/javascript">
    $(document).ready(function{
      $('.datepicker').datepicker({
    language: 'es'
    });
    })
  </script>

</body>
</html>
