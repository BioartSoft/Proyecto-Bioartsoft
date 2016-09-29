<?php

use Dompdf\Dompdf;

class Ventas extends controller
{

  private $mdlVentas;
  private $mdlCliente;
  private $mdlProducto;
  private $mdlTipoPersona;


  public function __construct(){
    $this->mdlVentas = $this->loadModel("mdlVentas");
    $this->mdlCliente = $this->loadModel("mdlCliente");
    $this->mdlProducto = $this->loadModel("mdlProducto");
    $this->mdlTipoPersona = $this->loadModel("mdlTipoPersona");

  }

  public function validacion(){
      $this->mdlVentas->__SET("idProducto", $_POST['id']);
      //$this->mdlVentas->__SET("cantidad", $_POST['campoCant']);
      $ValidarCant = $this->mdlVentas->validarCantidad();

      echo json_encode($ValidarCant);
  }


  public function generarpdfCreditos()
  {
    require_once APP . 'libs/dompdf/autoload.inc.php';
    // $urlImagen = URL . 'producto/generarcodigo?id=';
    // $productos = $this->mdlproducto->listar();
      $listarC = $this->mdlVentas->listarCreditosPdf();
    ob_start();
    require APP . 'view/Ventas/pdfCreditos.php';
    $html = ob_get_clean();
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    // $dompdf->load_html_file($urlImagen);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $dompdf->stream("Informe Créditos.pdf", array("Attachment" => false, 'isRemoteEnabled' => true));
  }


  public function informeVentas()
     {
       require APP . 'view/_templates/header.php';
       require APP. 'view/Ventas/reporteVentas.php';
       require APP . 'view/_templates/footer.php';
     }


     public function pdfVentas()
        {
          if(isset($_POST['btnconsultar'])){
            $this->mdlVentas->__SET('fechainicial',date("Y-m-d",strtotime($_POST['txtfechainicial'])));
            $this->mdlVentas->__SET('fechafinal',date("Y-m-d",strtotime($_POST['txtfechafinal'])));
            $ver = $this->mdlVentas->listarpdf();
          }
          require_once APP . 'libs/dompdf/autoload.inc.php';
          // $urlImagen = URL . 'producto/generarcodigo?id=';
          // $productos = $this->mdlproducto->listar();
          ob_start();
          require APP . 'view/Ventas/pdfinformeVentas.php';
          $html = ob_get_clean();
          $dompdf = new Dompdf();
          $dompdf->loadHtml($html);
          // $dompdf->load_html_file($urlImagen);
          $dompdf->setPaper('A4', 'landscape');
          $dompdf->render();
          $dompdf->stream("Informe Ventas.pdf", array("Attachment" => false, 'isRemoteEnabled' => true));

        }


    public function index(){
      // $modeloconfiguracion = $this->loadModel("mdlConfiguracionPago");
      // $configuracion = $modeloconfiguracion->listarConfiguracion();

      $listarConfiguracionVentas = $this->mdlVentas->listarConfiguracionVentas();
      $configuracion = $this->mdlVentas->listarConfiguracionVentas();

    if (isset ($_POST["btnRegistrarConfig"])) {
      $this->mdlVentas->__SET("_ValSubtotal_Minimo", $_POST["txtvalorminimo"]);
      $this->mdlVentas->__SET("_Porcentaje_MinimoD", $_POST["txtporcentajeminimo"]);
      $this->mdlVentas->__SET("_ValSubtotal_Maximo", $_POST["txtvalormaximo"]);
      $this->mdlVentas->__SET("_Porcentaje_MaximoD", $_POST["txtporcentajemaximo"]);
      if ($this->mdlVentas->modificarConfiguracionVentas()) {
          $_SESSION['alerta'] = 'swal({
            title: "Modificación exitosa!",
            type: "success",
            confirmButton: "#3CB371",
            confirmButtonText: "Aceptar",
            // confirmButtonText: "Cancelar",
            closeOnConfirm: false,
            closeOnCancel: false
          })';
      }

    }

      if(isset($_POST['btn-guardar-venta'])){

          if($_POST['txtpago'] == "1"){
            $this->mdlVentas->__SET("valor_subtotal", $_POST['txtsubtotal']);
            $this->mdlVentas->__SET("valor_total", $_POST['txttotal']);
            $this->mdlVentas->__SET("codigo_cliente", $_POST['ddlcliente']);
            $this->mdlVentas->__SET("tipo_Pago", $_POST['txtpago']);
            $this->mdlVentas->__SET("codigoEmpleado", $_POST['empleado']);
            $this->mdlVentas->__SET("descuento", $_POST['txtdescuento']);
            $this->mdlVentas->__SET("dias_credito", $_POST['txtplazo']);

            $C = $this->mdlVentas->insertarVentaCredito();
            if($C){
              for ($i=0; $i < count($_POST['producto']); $i++) {
                $this->mdlVentas-> insertarDetalleVenta($_POST['producto'][$i], $_POST['cantidad'][$i]);

              }
            }

          } else {
            $this->mdlVentas->__SET("valor_subtotal", $_POST['txtsubtotal']);
            $this->mdlVentas->__SET("valor_total", $_POST['txttotal']);
            $this->mdlVentas->__SET("codigo_cliente", $_POST['ddlcliente']);
            $this->mdlVentas->__SET("tipo_Pago", $_POST['txtpago']);
            $this->mdlVentas->__SET("codigoEmpleado", $_POST['empleado']);
            $this->mdlVentas->__SET("descuento", $_POST['txtdescuento']);

            $C = $this->mdlVentas->insertarVenta();
            if($C){
              for ($i=0; $i < count($_POST['producto']); $i++) {
                $this->mdlVentas-> insertarDetalleVenta($_POST['producto'][$i], $_POST['cantidad'][$i]);

              }
            }
          }

          $_SESSION['alerta'] = 'swal({
            title: "Guardado exitoso!",
            type: "success",
            confirmButton: "#3CB371",
            confirmButtonText: "Aceptar",
            // confirmButtonText: "Cancelar",
            closeOnConfirm: false,
            closeOnCancel: false
          })';

      }

      $cliente = $this->mdlCliente->listar();
      $producto = $this->mdlProducto->listar();
      $tipo = $this->mdlTipoPersona->listarTipoPersonas();
      $configuraciones = $this->mdlProducto->consultarConfiguracionVentas();

      require APP . 'view/_templates/header.php';
      require APP . 'view/Ventas/registrarVentas.php';
      require APP . 'view/_templates/footer.php';
    }


  public function listarVentas(){
    // $modeloconfiguracion = $this->loadModel("mdlConfiguracionPago");
    // $configuracion = $modeloconfiguracion->listarConfiguracion();

    $Ventas=$this->mdlVentas->listarVentas();
    $cliente = $this->mdlCliente->listar();
    $producto = $this->mdlProducto->listar();
    require APP . 'view/_templates/header.php';
    require APP . 'view/Ventas/listarVentas.php';
    require APP . 'view/_templates/footer.php';
  }

  public function listarConfiguracionVentas(){
    // $modeloconfiguracion = $this->loadModel("mdlConfiguracionPago");
    // $configuracion = $modeloconfiguracion->listarConfiguracion();
    require APP . 'view/_templates/header.php';
    require APP . 'view/Ventas/listarConfiguracionVentas.php';
    require APP . 'view/_templates/footer.php';
  }


   public function ajaxDetallesVenta(){
      $detalles = $this->mdlVentas->getDetallesVenta($_POST['idVenta']);
      $info = $this->mdlVentas->getInfoVenta($_POST['idVenta']);

      $html = "";
      foreach ($detalles as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . $value['nombre_producto'] . '</td>';
          if($info['Tbl_TipoPersona_idTbl_TipoPersona'] == 6){
        $html .= '<td class="price">' . $value['precio_detal'] . '</td>';
      }else{
        $html .= '<td class="price">' . $value['precio_por_mayor'] . '</td>';
      }
        $html .= '<td>' . $value['cantidad'] . ' unidades</td>';
        if($info['Tbl_TipoPersona_idTbl_TipoPersona'] == 6){
        $html .= '<td class="price">' . $value['cantidad'] * $value['precio_detal'] . '</td>';
      }else{
        $html .= '<td class="price">' . $value['cantidad'] * $value['precio_por_mayor'] . '</td>';
      }
        $html .= '</tr>';
      }
      echo json_encode([
        'codigoV'=>$info['id_ventas'],
        'empleado'=>$info['empleado'],
        'fecha' => $info['fecha_venta'],
        'cliente' => $info['cliente'],
        'subtotal' => $info['subtotal_venta'],
        'descuento' => $info['descuento'],
        'total' => $info['total'],
        'html' => $html,
      ]);
    }

    public function modificarEstado(){
      $estado = $this->mdlVentas->cambiarEstado($_POST['id'], $_POST['estado']);
      if($estado){
      echo json_encode(["v"=>1]);
    }else{
      echo json_encode(["v"=>0]);
    }
}


    public function factura($cod){
      $factura = $this->mdlVentas->facturaVenta($cod);
      require APP."view/Ventas/factura.php";
    }



    public function listarVentasCredito(){
    // $modeloconfiguracion = $this->loadModel("mdlConfiguracionPago");
    // $configuracion = $modeloconfiguracion->listarConfiguracion();

    $clientesCredito = $this->mdlVentas->listarClientesCreditoV();

    require APP . 'view/_templates/header.php';
    require APP . 'view/Ventas/listarCreditosVentas.php';
    require APP . 'view/_templates/footer.php';
  }



  public function ajaxDetalleCreditosV()
  {
    $detalle = $this->mdlVentas->getDetalleCreditosV($_POST['idPersona']);
      $html = "";
          foreach ($detalle as $val) {
            $totalCredit = $val['total_venta'];
            $abonoCredit = $val['total_abonado'];
            $pendienteCredit = $totalCredit - $abonoCredit;
            $html .= '<tr>';
            $html .= '<td>'.$val['id_persona'].'</td>';
            $html .= '<td>'.$val['id_ventas'].'</td>';
            $html .= '<td>'.$val['fecha_venta'].'</td>';
            $html .= '<td>'.$val['fecha_limite_credito'].'</td>';
            $html .= '<td class="price">'.$val['total_venta'].'</$abonoCredit td>';
            $html .= '<td class="price">'.$val['total_abonado'].'</td>';
            $html .= '<td class="price">'.$pendienteCredit.'</td>';
              if($val["estado_credito"] == 0){
                $estado = "Pagado";
              } else if($val["estado_credito"] == 1) {
                $estado = "Pendiente";
              } else if($val["estado_credito"] == 2){
                $estado = "Condonado";
              }
              // $estado = $val["estado"] == 1?"Pendiente":"Pagado";

              $html .= '<td>'.$estado.'</td>';
              $html .= '<td>';
              if($val['estado_credito'] == 1){
                $html .= '<button type="button" id="idAbonoCreditV_btn" class="btn btn-success btn-circle btn-md" onclick="abonosV('.$val['total_venta'].','.$val['id_ventas'].','.$pendienteCredit.')" title="Abonar"><i class="fa fa-money" aria-hidden="true"></i></button>';
              }
              $html .= ' <button type="button" onclick="traerDetalleAbonosCreditosV('.$val["id_ventas"].')" class="btn btn-primary btn-circle btn-md"   title="Ver Abonos CreditosV"><i class="fa fa-eye" aria-hidden="true" ></i></button>';
              if($val['estado_credito'] != 0){
                $html .= ' <button  title="Cambiar Estado" type="button" class="btn btn-warning btn-circle btn-md" data-toggle="modal" onclick="cambiarestado('.$val["id_ventas"].', 2)"><i class="fa fa-refresh" aria-hidden="true"></i></button>';
              }
              $html .= '</td></tr>';         //traerDetalleAbonosCreditosV()
          }
              $cabecera = '<tr>';
              $cabecera .= '<th>'.'Identidad'.'</th>';
              $cabecera .= '<th>'.'Código Venta'.'</th>';
              $cabecera .= '<th>'.'Fecha Venta'.'</th>';
              $cabecera .= '<th>'.'Fecha Límite'.'</th>';
              $cabecera .= '<th>'.'Total Venta'.'</th>';
              $cabecera .= '<th>'.'Total Abonado'.'</th>';
              $cabecera .= '<th>'.'Crédito Pendiente'.'</th>';
              $cabecera .= '<th>'.'Estado Venta'.'</th>';
              $cabecera .= '<th>'.'Opciones'.'</th>';
              $cabecera .= '</tr>';

              echo json_encode([
              'html' => $html,'cabecera'=>$cabecera
              ]);
  }



  public function registrarAbonoCreditoVen(){
    // $modeloconfiguracion = $this->loadModel("mdlConfiguracionPago");
    // $configuracion = $modeloconfiguracion->listarConfiguracion();

    if (isset($_POST["txtva"])== 'true') {

      if(isset($_POST['btnRegistrarAbono'])){
        $this->mdlVentas->__SET("valorAbonarCreditoV",$_POST['txtvalorabono']);
        $this->mdlVentas->__SET("codigo_venta", $_POST['txtidprestamoCredV']);

        $consultaAbono = $this->mdlVentas->totalAbono($_POST['txtvalorabono']);
        if($consultaAbono['total'] == 0){

          //$this->mdlVentas->__SET("codigo_venta", $_POST['txtidprestamoCredV']);
          $this->mdlVentas->cambiarEstadoCredito(0);
        }

        if ($this->mdlVentas->insertarAbonoCreditoVen()) {

          $_SESSION['alerta']=  'swal({
            title: "Guardado exitoso!",
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
          $_SESSION['alerta']=  'swal({
            title: "Error en el registro!",
            type: "error",
            confirmButton: "#3CB371",
            confirmButtonText: "Aceptar",
            // confirmButtonText: "Cancelar",
            closeOnConfirm: false,
            closeOnCancel: false
          })';
        }

      }

  }

    $clientesCredito = $this->mdlVentas->listarClientesCreditoV();
    require APP . 'view/_templates/header.php';
    require APP . 'view/Ventas/listarCreditosVentas.php';
    require APP . 'view/_templates/footer.php';

  }



  public function ajaxDetalleAbonosCreditosV()
  {
    $detalle = $this->mdlVentas->listarAbonosCreditosV($_POST["id_ventas"]);

      $html = "";
          foreach ($detalle as $val) {
            $html .= '<tr>';
            $html .= '<td>'.$val['fechaAbono'].'</td>';
            $html .= '<td class="price">'.$val['valor_abono'].'</td>';
            $html .= '<td class="price">'.$val['saldo_abono'].'</td>';
            $html .= '<td>';
            // '<button type="button" class="btn btn-success btn-circle btn-md" onclick="abono('.$val['valor_prestamo'].','.$val['id_prestamos'].')"  title="Abonar"><i class="fa fa-money" aria-hidden="true"></i></button>';
            // $html .= ' <button type="button" class="btn btn-primary btn-circle btn-md" onclick="traerDetalleAbonos('.$val['id_prestamos'].')"  title="Abonar"><i class="fa fa-eye" aria-hidden="true"></i></button>';
            if ($val["estado_abono"] == 1) {

            $html .= ' <button  title="Anular" type="button" class="btn btn-success btn-circle btn-md" data-toggle="modal" id="btnbotoncheck" onclick="cambiarestado('.$val["idabono"].',0)"><i class="fa fa-check" aria-hidden="true"></i></button>';
            }

            if ($val["estado_abono"] == 0) {
            $html .= ' <button title="Anulado" disabled="" id="btnanulado" type="button" class="btn btn-danger btn-circle btn-md" data-toggle="modal"><i class="fa fa-remove" aria-hidden="true"></i></button>';
            }
            $html .= '</td></tr>';

          }
              $cabecera = '<tr>';
              $cabecera .= '<th>'.'Fecha del Abono'.'</th>';
              $cabecera .= '<th>'.'Valor Abono'.'</th>';
              $cabecera .= '<th>'.'Total Abonado'.'</th>';
              $cabecera .= '<th>'.'Estado Abono'.'</th>';
              $cabecera .= '</tr>';

              echo json_encode([
              'html' => $html,'cabecera'=>$cabecera
              ]);
            }


  public function ajaxNombreCliente(){
    $info = $this->mdlVentas->getNombreCliente($_POST['idCliente']);

    echo json_encode([
      'cliente'=>$info['cliente'],
    ]);
  }



    public function modificarestadoC()
    {
          $estado = $this->mdlVentas->cambiarEstadoCredito2($_POST["codigo"], $_POST["estado"]);

          if ($estado) {
            echo json_encode(["v"=>1]);
          }
          else
          {
            echo json_encode(["v"=>2]);

          }
      }


      public function modificarestadoAbonos()
      {

        $estadoabonos = $this->mdlVentas->cambiarestadoAbonos($_POST["codigo"], $_POST["estado"]);

        if ($estadoabonos) {
          echo json_encode(["v"=>1]);
        }
        else
        {
          echo json_encode(["v"=>0]);
        }
      }

}
 ?>
