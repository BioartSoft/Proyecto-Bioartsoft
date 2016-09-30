<?php

  class Empleados extends controller
  {

      private $modeloP;
      private $mdlTipoPersona;
      private $modeloUsuario;
      private $modelo;

      function __construct(){
        $this->modeloP = $this->loadModel("mdlPersona");
        $this->mdlTipoPersona = $this->loadModel("mdlTipoPersona");
        $this->modeloUsuario = $this->loadModel("mdlUsuario");
      }

      public function ListarPrest(){

        $modelo2 = $this->loadModel("mdlConfiguracionPago");
        $configuracion = $modelo2->listarConfiguracion();
        $confi2 = $modelo2->listarConfiguracion2();
        $modelo = $this->loadModel("mdlEmpleados");
        $listarPrestamos = $this->modeloP->ListarPrestamos();

        if (isset($_POST["btnRegistrarAbono"])) {

            $modelo->__SET("valor", $_POST["txtvalorabono"]);
            $modelo->__SET("estadoabonos", 1);
            $modelo->__SET("Tbl_Prestamos_idprestamos",$_POST["txtidprestamo"]);
            $modelo->__SET("id_prest",$_POST["txtidprestamo"]);

            if ($modelo->registrarAbonoPrestamo()) {

              $sumarabo =  implode('',$modelo->sumarAbonos());
              $valorPrestamo = $_POST["txtresta"];
              $valorPendiente = (int)$valorPrestamo - (int)$sumarabo;
              // var_dump($valorPendiente, $sumarabo);
              // exit();

                if ($valorPendiente == 0) {
                  $modelo->modificarEstadoPre();
                }

               $_SESSION['jhoan'] = ' swal({
                title: "Abono Registrado Correctamente!",
                type: "success",
                confirmButton: "#3CB371",
                confirmButtonText: "Aceptar",
                // confirmButtonText: "Cancelar",
                closeOnConfirm: false,
                closeOnCancel: false
              })';

            }

        }

        if (isset($_POST["btnmodificarprestamo"])) {
        $modelo->__SET("fecha_limite",$_POST["txtfechalimetepre"]);
        $modelo->__SET("valor_prestamo",$_POST["txtvalorprestamos"]);
        $modelo->__SET("id_prestamos",$_POST["txthideidprestamo"]);

        if ($modelo->modificarprestamos()) {
              $_SESSION['alerta'] = ' swal({
                  title: "Préstamo Modificado Correctamente!",
                  type: "success",
                  confirmButton: "#3CB371",
                  confirmButtonText: "Aceptar",
                  // confirmButtonText: "Cancelar",
                  closeOnConfirm: false,
                  closeOnCancel: false
                })';
            }
            else
            {
              $_SESSION['alerta'] = ' swal({
                  title: "Error en la modificación!",
                  type: "error",
                  confirmButton: "#3CB371",
                  confirmButtonText: "Aceptar",
                  // confirmButtonText: "Cancelar",
                  closeOnConfirm: false,
                  closeOnCancel: false
                })';
            }
        }

        require APP . 'view/_templates/header.php';
        require APP . 'view/Empleados/listarPrestamo.php';
        require APP . 'view/_templates/footer.php';
      }

      public function registrarPrestamo(){

        $modelo = $this->loadModel("mdlConfiguracionPago");
        $configuracion = $modelo->listarConfiguracion();
        $modelo = $this->loadModel("mdlEmpleados");
        $listarEmpleadoFijo = $this->modeloP->ListarPersEmpleado();

        if (isset($_POST["btnRegistrarPrestamo"])) {

          $modelo->__SET("estado_prestamo", 1);
          $modelo->__SET("valor_prestamo", $_POST["txtvalorprestamo"]);
          $modelo->__SET("fecha_prestamo", date("Y-m-d",strtotime($_POST["txtfechaPrestamo"])));
          $modelo->__SET("fecha_limite", date("Y-m-d",strtotime($_POST["txtfechalimite"])));
          $modelo->__SET("descripcion", $_POST["txtdescripcion"]);
          $modelo->__SET("Tbl_Persona_id_persona", $_POST["txtIdentifica"]);

          if ($modelo->registrarPrestamo()) {

            $_SESSION['jhoan'] = ' swal({
                title: "Prestamo Registrado Correctamente!",
                type: "success",
                confirmButton: "#3CB371",
                confirmButtonText: "Aceptar",
                // confirmButtonText: "Cancelar",
                closeOnConfirm: false,
                closeOnCancel: false
              })';
          }
        }

        require APP . 'view/_templates/header.php';
        require APP . 'view/Empleados/registrarPrestamo.php';
        require APP . 'view/_templates/footer.php';
      }

      public function reportePrestamos(){

        $modelo = $this->loadModel("mdlConfiguracionPago");
        $configuracion = $modelo->listarConfiguracion();
        require APP . 'view/_templates/header.php';
        require APP . 'view/Empleados/reportePrestamos.php';
        require APP . 'view/_templates/footer.php';
      }

      public function registrarPagos(){

        $modelo = $this->loadModel("mdlEmpleados");
        $modelo2 = $this->loadModel("mdlConfiguracionPago");
        $configuracion = $modelo2->listarConfiguracion();
        $configuracion2 = $modelo2->listarConfiguracionPagos();
        $listarE = $this->modeloP->ListarPersEmpleadoFijo();
        $TipoPersona = $this->mdlTipoPersona->listarTipoPersonas();
        $listarE = $this->modeloP->ListarPersEmpleadoFijo();

        if (isset($_POST["btnRegistrarPago"])) {

          if ($_POST["tipoEmp"] == "1") {
            $modelo->__SET("valorVentas", $_POST["txtValorVentas"]);
            $modelo->__SET("valorComision", $_POST["txtvalorcomi"]);
            $modelo->__SET("cantidad_dias", $_POST["txtdiaspagar"]);
            $modelo->__SET("valor_prima", $_POST["txtvalorprima"]);
            $modelo->__SET("valor_cesantias", $_POST["txtvalorcesantias"]);
            $modelo->__SET("valor_vacaciones", $_POST["txtvalorvacaciones"]);
            $modelo->__SET("estado", 1);
            $modelo->__SET("numero_docu", $_POST["txtIdentificacion"]);
            $modelo->__SET("fecha_liquidación",$_POST["txtfechaPagoliquidacion"] );
            // var_dump($_POST["txtIdentificacion"],date('Y-m-d',$_POST["txtfechaPagoliquidacion"]));
            // exit();

            if ($modelo->registrarPagoEmpleados()) {
                $modelo->modificarfechaLiquidacion();

                $idpa = $modelo->ultimoPago();
                if ($_POST["tipoPago"] == 1) {
                $modelo->__SET("id_pago", implode("", $idpa));
                $modelo->__SET("idTbl_Configuracion", $_POST["tipoPago"]);
                $modelo->__SET("valorTotal", $_POST["txttotalpagonormal"]);
                $modelo->registrarDetallepagoconfi();
                }
                if ($_POST["tipoPago"] == 2) {
                $modelo->__SET("id_pago", implode("", $idpa));
                $modelo->__SET("idTbl_Configuracion", $_POST["tipoPago"]);
                $modelo->__SET("valorTotal", $_POST["txttotalliquidacion"]);
                $modelo->registrarDetallepagoconfi();
                }
                if ($_POST["tipoPago"] == 3) {
                $modelo->__SET("id_pago", implode("", $idpa));
                $modelo->__SET("idTbl_Configuracion", $_POST["tipoPago"]);
                $modelo->__SET("valorTotal", $_POST["txtvalorprima"]);
                $modelo->registrarDetallepagoconfi();
                }
                    $_SESSION['jhoan'] = ' swal({
                  title: "Pago Registrado Correctamente!",
                  type: "success",
                  confirmButton: "#3CB371",
                  confirmButtonText: "Aceptar",
                  // confirmButtonText: "Cancelar",
                  closeOnConfirm: false,
                  closeOnCancel: false
                })';

            }


          }

          if ($_POST["tipoEmp"] == "2")
          {

            $modelo->__SET("cantidad_Dias", $_POST["txtdiasLaborados"]);
            $modelo->__SET("valor_dia", $_POST["txtValorDia"]);
            $modelo->__SET("estado", 1);
            $modelo->__SET("numero_docu", $_POST["txtIdentificacion"]);

            if ($modelo->registrarPagoEmpleadoTemporal()) {
              $idpa = $modelo->ultimoPago();
              $modelo->__SET("id_pago", implode("", $idpa));
              $modelo->__SET("idTbl_Configuracion", 1);
              $modelo->__SET("valorTotal", $_POST["txtvalortemporales"]);
              $modelo->registrarDetallepagoconfiTemp();

              $_SESSION['jhoan'] = ' swal({
                  title: "Pago Registrado Correctamente!",
                  type: "success",
                  confirmButton: "#3CB371",
                  confirmButtonText: "Aceptar",
                  // confirmButtonText: "Cancelar",
                  closeOnConfirm: false,
                  closeOnCancel: false
                })';

            }

          }

        }

        require APP . 'view/_templates/header.php';
        require APP . 'view/Empleados/registrarPagos.php';
        require APP . 'view/_templates/footer.php';
      }


      public function ListarConfiguraciones()
      {
        $modelo = $this->loadModel("mdlConfiguracionPago");
        $configuracion = $modelo->listarConfiguracion();
        if (isset($_POST["btnMostrar"])) {

        $configuracion = $modelo->listarConfiguracion();
        $confi2 = $modelo->listarConfiguracion2();
        $configuracion2 = $modelo->listarConfiguracionPa();
        }

        if (isset($_POST["btnmodificarconfi"])) {
        $configuracion = $modelo->listarConfiguracion();
        $confi2 = $modelo->listarConfiguracion2();

          // $modelo->__SET("idTbl_Configuracion",$_POST["txtid"]);
          // $modelo->__SET("tipo_pago",$_POST["txttiPago"]);
          $modelo->__SET("tiempo_pago",$_POST["txttiemPago"]);
          $modelo->__SET("Valor_dia",$_POST["txtvalordia"]);
          $modelo->__SET("porcentaje_comision",$_POST["txtporComision"]);
          $modelo->__SET("valor_base",$_POST["txtvBase"]);

          if ($modelo->modificarConfiguracion()) {

            $modelo->modificarValorBase();

            $_SESSION['alerta'] = ' swal({
              title: "Configuración actualizada Correctamente!",
              type: "success",
              confirmButton: "#3CB371",
              confirmButtonText: "Aceptar",
              // confirmButtonText: "Cancelar",
              closeOnConfirm: false,
              closeOnCancel: false
            })';

          }
          else
          {
            $_SESSION['alerta'] = ' swal({
              title: "Error en la actualización!",
              type: "error",
              confirmButton: "#3CB371",
              confirmButtonText: "Aceptar",
              // confirmButtonText: "Cancelar",
              closeOnConfirm: false,
              closeOnCancel: false
            })';
          }

        }

        require APP . 'view/_templates/header.php';
        require APP . 'view/otro/index.php';
        require APP . 'view/_templates/footer.php';
      }

      public function reciboPago(){

        $modelo = $this->loadModel("mdlConfiguracionPago");
        $configuracion = $modelo->listarConfiguracion();
        require APP . 'view/_templates/header.php';
        require APP . 'view/Empleados/reciboPago.php';
        require APP . 'view/_templates/footer.php';
      }

      public function listarPagos(){

        $modelo = $this->loadModel("mdlConfiguracionPago");
        $configuracion = $modelo->listarConfiguracion();
        $confi2 = $modelo->listarConfiguracion2();
        $modelo = $this->loadModel("mdlEmpleados");
        //$listarE = $this->modeloP->ListarPersEmpleadoFijo();
        $listarEmp = $modelo->listarPagosEmp();

        if (isset($_POST["btnActualizarPrestamo"])) {

          $modelo->__SET("id_prestamo",$_POST["txtidprestamo"]);
          $modelo->__SET("valor_prestamo",$_POST["txtresta"]);

          if ($modelo->actualizarAbono()) {
            echo "se modifico";
          }
          else
            echo "error";
        }

        require APP . 'view/_templates/header.php';
        require APP . 'view/Empleados/listarPagos.php';
        require APP . 'view/_templates/footer.php';
      }

      public function comprobante(){

        $modelo = $this->loadModel("mdlConfiguracionPago");
        $configuracion = $modelo->listarConfiguracion();
        require APP . 'view/_templates/header.php';
        require APP . 'view/Empleados/comprobante.php';
        require APP . 'view/_templates/footer.php';
      }

     public function ajaxDetallePagos()
      {
        $modelo = $this->loadModel("mdlConfiguracionPago");
        $configuracion = $modelo->listarConfiguracion();
        $modelo = $this->loadModel("mdlEmpleados");
        $detalle = $modelo->getDetallePagos($_POST["idPersona"]);
          $fijo = false;
          $html = "";
              foreach ($detalle as $value) {
                $html .= '<tr>';
                // $html .= '<td>'.$value['Tbl_Persona_id_persona'].'</td>';
                $html .= '<td>'.$value['fecha_pago'].'</td>';
                $empleado = $value['nombres'];

                if($value['Tbl_nombre_tipo_persona'] == "Empleado-fijo"){
                  $fijo = true;
                  $html .= '<td>'.$value['tipo_pago'].'</td>';
                  // $html .= '<td>'.$value['porcentaje_comision'].'</td>';
                  // $html .= '<td>'.$value['valor_base'].'</td>';
                  // $html .= '<td>'.$value['cantidad_Dias'].'</td>';
                  $html .= '<td class="price">'.$value['valorVentas'].'</td>';
                  $html .= '<td class="price">'.$value['valorComision'].'</td>';
                  $html .= '<td class="price">'.$value['total_pago'].'</td>';
                }

                if($value['Tbl_nombre_tipo_persona'] == "Empleado-temporal"){
                  $fijo = false;
                  $html .= '<td>'.$value['cantidad_Dias'].'</td>';
                  $html .= '<td class="price">'.$value['valor_dia'].'</td>';
                  $html .= '<td class="price">'.$value['total_pago'].'</td>';
                }
                  $estado = $value["estado"] == 1?"Realizado":"Anulado";

                  // $html .= '<td>'.$value['valorTotal'].'</td>';
                  $html .= '<td>'.$estado.'</td>';
                  $html .= '<td>';
                  // '<button type="button" class="btn btn-success btn-circle btn-md" data-toggle="modal" data-target="#myModal" title="Generar Recibo"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                  // </button>';
                if($value["estado"] == 1){
                    $html .= ' <button  title="Anular" type="button" class="btn btn-success btn-circle btn-md" data-toggle="modal" onclick="cambiarestado('.$value["id_pago"].', 0)"><i class="fa fa-check" aria-hidden="true"></i></button>';
                }
                if ($value["estado"]==0) {
                  $html .= ' <button  disabled="" title="Anular" type="button" class="btn btn-danger btn-circle btn-md" data-toggle="modal"><i class="fa fa-remove" aria-hidden="true"></i></button>';
                }
                  $html .= '</td></tr>';
              }
                  $cabecera = '<tr>';
                  // $cabecera .= '<th>'.'Identidad'.'</th>';
                  $cabecera .= '<th>'.'Fecha Pago'.'</th>';

                if($fijo == true){
                  $cabecera .= '<th>'.'Tipo de Pago'.'</th>';
                  // $cabecera .= '<th>'.'Porcentaje Comisión'.'</th>';
                  // $cabecera .= '<th>'.'Valor Base'.'</th>';
                  // $cabecera .= '<th>'.'Dias Laborados'.'</th>';
                  $cabecera .= '<th>'.'Valor en Ventas'.'</th>';
                  $cabecera .= '<th>'.'Comisiones'.'</th>';
                  $cabecera .= '<th>'.'Valor Total'.'</th>';
                }

                if(isset($value) && $value['Tbl_nombre_tipo_persona'] == "Empleado-temporal"){
                  $fijo = false;
                  $cabecera .= '<th>'.'Días Laborados'.'</th>';
                  $cabecera .= '<th>'.'Valor Día'.'</th>';
                }

                if(isset($value) && $value['Tbl_nombre_tipo_persona'] == "Empleado-temporal"){
                  $cabecera .= '<th>'.'Total Pago'.'</th>';
                }
                  $cabecera .= '<th>'.'Estado'.'</th>';
                  $cabecera .= '<th>'.'Estado del pago'.'</th>';
                  $cabecera .= '</tr>';

                  echo json_encode([
                  'html' => $html,'cabecera'=>$cabecera
                  ]);
      }

      public function ajaxDetallePrestamos()
      {
        $modelo = $this->loadModel("mdlConfiguracionPago");
        $configuracion = $modelo->listarConfiguracion();
        $modelo = $this->loadModel("mdlEmpleados");
        $detalle = $modelo->getDetallePrestamos($_POST["idPersona"]);


          $fijo = false;
          $html = "";
              foreach ($detalle as $val) {       
                $idPre = $val['id_prestamos'];         
                $detalleAbono = $modelo->traerValorAbonoPorPrestamo($idPre);
                  
                 $abonoAnulado = $detalleAbono['TotalAbono'];
                 $estadoAbono = $detalleAbono['estado_abono'];

                 if ($abonoAnulado != null) {
                    $abono = $val['Total'] - $abonoAnulado;
                 }
                 else
                 {
                  $abono = $val['Total'];
                 }
                  $empleado = $val['empleado'];
                  $valorpres = $val['valor_prestamo'];
                $valorPen = $valorpres - $abono;
                $html .= '<tr>';
                $html .= '<td>'.$val['id_persona'].'</td>';
                $html .= '<td>'.$val['fecha_prestamo'].'</td>';

                  $html .= '<td>'.$val['fecha_limite'].'</td>';
                  $html .= '<td class="price">'.$val['valor_prestamo'].'</td>';
                  $v= $val['Total']==null?0:$abono;
                  $html .= '<td class="price">'.$v.'</td>';
                  $html .= '<td class="price">'.$valorPen.'</td>';
                  $html .= '<td>'.$val['descripcion'].'</td>';

                  $estado = $val["estado_prestamo"] == 0?"Pagado":"Pendiente";
                  $estado1 = $val["estado_prestamo"] == 1?"Pendiente":"Pagado";
                  $estado3 = $val["estado_prestamo"] == 3?"Anulado":"Pendiente";


                  // $html .= '<td>'.$value['valorTotal'].'</td>';
                  if ($val["estado_prestamo"] == 0) {
                  $html .= '<td>'.$estado.'</td>';
                  }
                  if ($val["estado_prestamo"] == 1) {
                  $html .= '<td>'.$estado1.'</td>';
                  }
                  if ($val["estado_prestamo"] == 3) {
                  $html .= '<td>'.$estado3.'</td>';
                  }
                  // $html .= '<td>'.$estado.'</td>';
                  $html .= '<td>';
                  if ($val["estado_prestamo"] == 1) {
                  $html.='<button type="button" class="btn btn-warning btn-circle btn-md" onclick="abono('.$val['valor_prestamo'].','.$val['id_prestamos'].','.$valorPen.')"  title="Abonar"><i class="fa fa-money" aria-hidden="true"></i></button>';
                  $html .= ' <button  title="Modificar Préstamo" type="button" class="btn btn-success btn-circle btn-md" data-toggle="modal" onclick="Modificarprestamo('.$val['id_prestamos'].')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>';
                  $html .= ' <button  title="Anular" type="button" class="btn btn-danger btn-circle btn-md" data-toggle="modal" id="btnbotoncheck" onclick="cambiarestadoprestamo('.$val['id_prestamos'].',3 )"><i class="fa fa-refresh" aria-hidden="true"></i></button>';
                  }
                  $html .= ' <button type="button" onclick="traerDetalleAbonos('.$val["id_prestamos"].')" class="btn btn-primary btn-circle btn-md"   title="Ver Abonos"><i class="fa fa-eye" aria-hidden="true" ></i></button>';
                  $html .= '</td></tr>';
              }
                  $cabecera = '<tr>';
                  $cabecera .= '<th>'.'Identidad'.'</th>';
                  $cabecera .= '<th>'.'Fecha Préstamo'.'</th>';
                  $cabecera .= '<th>'.'Fecha Límite'.'</th>';
                  $cabecera .= '<th>'.'Valor del Préstamo'.'</th>';
                  $cabecera .= '<th>'.'Total Abono'.'</th>';
                  $cabecera .= '<th>'.'Valor Pendiente'.'</th>';
                  $cabecera .= '<th>'.'Descripción'.'</th>';
                  $cabecera .= '<th>'.'Estado Préstamo'.'</th>';
                  $cabecera .= '<th>'.'Opciones'.'</th>';
                  $cabecera .= '</tr>';

                  echo json_encode([
                  'html' => $html,'cabecera'=>$cabecera
                  ]);
              
      }

      public function ajaxDetalleAbonos()
      {
        $modelo = $this->loadModel("mdlConfiguracionPago");
        $configuracion = $modelo->listarConfiguracion();
        $modelo = $this->loadModel("mdlEmpleados");
        $detalle = $modelo->ListarAbonos($_POST["id_prestamos"]);
        $id_prestam = $_POST["id_prestamos"];
          $html = "";
              foreach ($detalle as $val) {
                $html .= '<tr>';
                $html .= '<td>'.$val['fecha_abono'].'</td>';
                $html .= '<td class="price">'.$val['valor'].'</td>';
                //$html .= '</tr>';
                //$html .= '<td class="price">'.$val['valor'].'</td>';
                // $html .= '</tr>';
                // $html .= '<td>'.$val['valor'].'</td>';
                // $html .= '</tr>';

                  $html .= '<td>';
                  // '<button type="button" class="btn btn-success btn-circle btn-md" onclick="abono('.$val['valor_prestamo'].','.$val['id_prestamos'].')"  title="Abonar"><i class="fa fa-money" aria-hidden="true"></i></button>';
                  // $html .= ' <button type="button" class="btn btn-primary btn-circle btn-md" onclick="traerDetalleAbonos('.$val['id_prestamos'].')"  title="Abonar"><i class="fa fa-eye" aria-hidden="true"></i></button>';
                  if ($val["estado_abono"] == 1) {

                  $html .= ' <button  title="Anular" type="button" class="btn btn-success btn-circle btn-md" data-toggle="modal" id="btnbotoncheck" onclick="cambiarestadoabono('.$val["idTbl_Abono_Prestamo"].',0); devolverAbono('.$val['valor'].','.$id_prestam.');"><i class="fa fa-check" aria-hidden="true"></i></button>';
                  }

                  if ($val["estado_abono"] == 0) {
                  $html .= ' <button title="Anulado" disabled="" id="btnanulado" type="button" class="btn btn-danger btn-circle btn-md" data-toggle="modal"><i class="fa fa-remove" aria-hidden="true"></i></button>';
                  }
                  $html .= '</td></tr>';
              }
                  $cabecera = '<tr>';
                  $cabecera .= '<th>'.'Fecha del Abono'.'</th>';
                  $cabecera .= '<th>'.'Valor'.'</th>';
                  $cabecera .= '<th>'.'Estado del Abono'.'</th>';
                  $cabecera .= '</tr>';

                  echo json_encode([
                  'html' => $html,'cabecera'=>$cabecera
                  ]);
      }

      public function modificarestado()
      {
        $modelo = $this->loadModel("mdlConfiguracionPago");
        $configuracion = $modelo->listarConfiguracion();
        $modelo = $this->loadModel("mdlEmpleados");
        $estadopagos = $modelo->cambiarestado($_POST["id"], $_POST["estado"]);

        if ($estadopagos) {
          echo json_encode(["v"=>1]);
        }
        else
        {
          echo json_encode(["v"=>0]);
        }
      }

      public function sumarAbono()
      {
        $modelo = $this->loadModel("mdlEmpleados");
        $modelo->__SET("id_prestamo", $_POST["id_pre"]);
        $sumaAbono = $modelo->sumarAbonos();
        $abono = implode('', $sumaAbono);

        if ($abono) {
          echo json_encode(["v"=>$abono]);
        }
        else
        {
          echo json_encode(["v"=>NULL]);
        }
      }

      public function fechaUnDiaDespues()
      {
        $modelo = $this->loadModel("mdlConfiguracionPago");
        $configuracion = $modelo->listarConfiguracion();
      	$modelo = $this->loadModel("mdlEmpleados");
        $modelo->__SET("id_pago", $_POST["id_pre"]);
      }


      public function ajaxNombreEmpleado(){

        $modelo = $this->loadModel("mdlEmpleados");
        $modelo->__SET("idPersona", $_POST["idPersona"]);
        $info = $modelo->getEmpleado();

          echo json_encode([
            'html'=>$info['empleado'],
          ]);
        }

      public function valorVentasEmp()
      {
        $modelo = $this->loadModel("mdlEmpleados");
        $modelo->__SET("id_persona", $_POST["Idp"]);
        $modelo->__SET("fecha_inicial",date("Y-m-d",strtotime($_POST["fech"])));
        $modelo->__SET("fecha_final", date("Y-m-d",strtotime($_POST["fecha"])));
        $tot = $modelo->totalVentasEmpleado();
        $sumtotal = implode('', $tot);

        if ($sumtotal) {
          echo json_encode(["v"=>$sumtotal]);
        }
        else
        {
          echo json_encode(["v"=>null]);
        }

      }

      public function validarcantiPres()
      {
        $modelo = $this->loadModel("mdlEmpleados");
        $modelo->__SET("id_persona", $_POST["identidad"]);
        $result = $modelo->valicantipre();
        $resultadoprestamo = implode('', $result);

        if ($resultadoprestamo) {
          echo json_encode(["v"=>$resultadoprestamo]);
        }
        else
        {
          echo json_encode(["v"=>null]);
        }
      }

      public function valorprestamopendiente()
      {
        $modelo = $this->loadModel("mdlEmpleados");
        $modelo->__SET("id_persona", $_POST["identificacion"]);
        $valortotalpre = $modelo->prestamopendiente();
        $resultadovalorprestamo = implode('', $valortotalpre);

        if ($resultadovalorprestamo) {
          echo json_encode(["v"=>$resultadovalorprestamo]);
        }
        else
        {
          echo json_encode(["v"=>null]);
        }
      }

      public function infoprestamos()
      {
        header("Content-type: application/json");
        $modelo = $this->loadModel("mdlEmpleados");
        $modelo->__SET("id_prestamos", $_POST["id_prestamos"]);

        $informacionprestamo = $modelo->informacionprestamo();
        echo json_encode($informacionprestamo);
      }

      public function modificarestadoAbonos()
      {

        $modelo = $this->loadModel("mdlEmpleados");
        $estadoabonos = $modelo->cambiarestadoAbonos($_POST["id"], $_POST["estado"]);

        if ($estadoabonos) {
          echo json_encode(["v"=>1]);
        }
        else
        {
          echo json_encode(["v"=>0]);
        }
      }

      public function modificarestadoPrestamo()
      {

        $modelo = $this->loadModel("mdlEmpleados");
        $estadoPrestamo = $modelo->cambiarestadoPrestamo($_POST["id"], $_POST["estado"]);

        if ($estadoPrestamo) {
          echo json_encode(["v"=>1]);
        }
        else
        {
          echo json_encode(["v"=>3]);
        }
      }

      public function ValidarAnularPrestamo()
      {
        $modelo = $this->loadModel("mdlEmpleados");
        $modelo->__SET("id_prestamos",$_POST["cod"]);
        $abonoPrestamo = $modelo->nullEnAbonos();

        if ($abonoPrestamo) {
          echo json_encode(["v"=>$abonoPrestamo]);
        }
        else
        {
          echo json_encode(["v"=>null]);
        }
      }

      public function AsociarPagoLiquidacion()
      {
        $modelo = $this->loadModel("mdlEmpleados");
        $modelo->__SET("id_persona",$_POST["identidad"]);
        $valorPago = $modelo->asociarPago();
        $resultadovalorpago = implode('', $valorPago);

        if ($resultadovalorpago) {
          echo json_encode(["v"=>$resultadovalorpago]);
        }
        else
        {
          echo json_encode(["v"=>null]);
        }

      }

      public function AsociarPagoPrima()
      {
        $modelo = $this->loadModel("mdlEmpleados");
        $modelo->__SET("id_persona",$_POST["identidad"]);
        $valorPagoPrima = $modelo->asociarPagoPrima();
        $resultadovalorpagoPrima = implode('', $valorPagoPrima);

        if ($resultadovalorpagoPrima) {
          echo json_encode(["v"=>$resultadovalorpagoPrima]);
        }
        else
        {
          echo json_encode(["v"=>null]);
        }

      }

      public function retornarAbono()
      {
        $modelo = $this->loadModel("mdlEmpleados");
        $modelo->__SET('valor_abono',$_POST["valorAbono"]);
        $modelo->__SET('id_prestamos',$_POST["id_prestam"]);
        $valorAbonoreturn = $modelo->devolverAbonoPrestamo();

        if ($valorAbonoreturn) {
          echo json_encode(["v"=>1]);
        }
        else
        {
          echo json_encode(["v"=>0]);
        }
      }

  }
?>
