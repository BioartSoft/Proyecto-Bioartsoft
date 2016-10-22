<?php

  use Dompdf\Dompdf;

  class Compras extends Controller{

    private $mdlCompras;
    private $mdlProveedor;
    private $mdlProducto;

    public function __construct(){
      $this->mdlCompras = $this->loadModel("mdlCompras");
      $this->mdlProducto = $this->loadModel("mdlProducto");
      $this->mdlProveedor = $this->loadModel("mdlProveedor");
    }

    public function index(){
      $modeloconfiguracion = $this->loadModel("mdlConfiguracionPago");
      $configuracion = $modeloconfiguracion->listarConfiguracion();

      $proveedor = $this->mdlProveedor->listar();
      $proveedorJ = $this->mdlProveedor->listarJuridico();
      $producto = $this->mdlProducto->listar();

      require APP . 'view/_templates/header.php';
      require APP . 'view/Compras/registrarCompra.php';
      require APP . 'view/_templates/footer.php';
    }


    public function informeproducto()
       {
         require APP . 'view/_templates/header.php';
         require APP. 'view/Compras/pdfinformeproducto.php';
         require APP . 'view/_templates/footer.php';
       }


       public function pdfCompras()
          {

            if(isset($_POST['btnconsultar'])){
              $this->mdlCompras->__SET('fechainicial',date("Y-m-d",strtotime($_POST['txtfechainicial'])));
              $fecha = $this->mdlCompras->validarFechaCompra();

              $this->mdlCompras->__SET('fechafinal',date("Y-m-d",strtotime($_POST['txtfechafinal'])));
              $fecha2 = $this->mdlCompras->validarFechaCompra();

              if($fecha == true && $fecha2 == true){

                $this->mdlCompras->__SET('fechainicial',date("Y-m-d",strtotime($_POST['txtfechainicial'])));
                $this->mdlCompras->__SET('fechafinal',date("Y-m-d",strtotime($_POST['txtfechafinal'])));
                $ver = $this->mdlCompras->listarpdf();

                }else{
                  $_SESSION['alerta'] = ' swal({
                    title: "No existen registros en ese rango de fecha!",
                    type: "error",
                    confirmButton: "#3CB371",
                    confirmButtonText: "Aceptar",
                    // confirmButtonText: "Cancelar",
                    closeOnConfirm: false,
                    closeOnCancel: false
                  }, function(isConfirm){ if(isConfirm){ window.close(); } })';
                header("Location:".URL.'Compras/informeproducto');
                exit();
              }
            }

            require_once APP . 'libs/dompdf/autoload.inc.php';
            // $urlImagen = URL . 'producto/generarcodigo?id=';
            // $productos = $this->mdlproducto->listar();
            ob_start();
            require APP . 'view/Compras/pdfinforme2.php';
            $html = ob_get_clean();
            $dompdf = new Dompdf();
            $dompdf->loadHtml($html);
            // $dompdf->load_html_file($urlImagen);
            $dompdf->setPaper('A4', 'landscape');
            $dompdf->render();
            $dompdf->stream("Informe Compras.pdf", array("Attachment" => false, 'isRemoteEnabled' => true));
          }



          public function generarpdfDetallesCompras()
          {
            $id = $_GET['id'];

            $detalles2 = $this->mdlCompras->pdfDetallesCompra($id);

            $tabla2 = "";
            foreach ($detalles2 as $val) {
              $tabla2 .= '<tr>';
              $tabla2 .= '<td>' . $val['fecha_compra'] . '</td>';
              $tabla2 .= '<td>' . $val['proveedor'] . '</td>';
              $tabla2 .= '<td>' . $val['valor_total'] . '</td>';
              $tabla2 .= '</tr>';
            }

            $detalles = $this->mdlCompras->getDetallesCompra($id);
            $tabla = "";
            foreach ($detalles as $value) {
              $tabla .= '<tr>';
              $tabla .= '<td>' . $value['nombre_producto'] . '</td>';
              $tabla .= '<td>' . $value['cantidad'] . ' unidades</td>';
              $tabla .= '<td class="price">' . $value['precio_unitario'] . '</td>';
              $tabla .= '<td class="price">' . $value['total'] . '</td>';
              $tabla .= '</tr>';
            }

            require_once APP . 'libs/dompdf/autoload.inc.php';
            ob_start();
            require APP . 'view/Compras/pdfDetallesCompras.php';


            $html = ob_get_clean();
            $dompdf = new Dompdf();
            $dompdf->loadHtml($html);
            // $dompdf->load_html_file($urlImagen);
            $dompdf->setPaper('A4', 'landscape');
            $dompdf->render();
            $dompdf->stream("Informe Compras.pdf", array("Attachment" => false, 'isRemoteEnabled' => true));
          }



    public function registrarCompra(){
      $modeloconfiguracion = $this->loadModel("mdlConfiguracionPago");
      $configuracion = $modeloconfiguracion->listarConfiguracion();
      $guardar=false;
      $error=false;

      $this->mdlCompras->__SET("codigo_proveedor", $_POST['ddlproveedor']);
      $this->mdlCompras->__SET("valor_total", $_POST['txttotal']);
      $this->mdlCompras->__SET("empleado", $_POST['hdempleado']);
      $C = $this->mdlCompras->insertarCompra();

      if($C){

        for ($i=0; $i < count($_POST['producto']); $i++) {
          $this->mdlCompras->insertarDetalleCompra($_POST['producto'][$i], $_POST['cantidad'][$i], $_POST['precioProducto'][$i]);
        }

        if($C){

          $guardar = true;
        }
        else {
          $error = true;
        }
      }

      if($guardar == true)
      {
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

      if($error == true)
      {
        $_SESSION['alerta'] =  'swal({
          title: "Error en el registro!",
          type: "error",
          confirmButton: "#3CB371",
          confirmButtonText: "Aceptar",
          // confirmButtonText: "Cancelar",
          closeOnConfirm: false,
          closeOnCancel: false
        })';
      }

      header("Location:".URL.'Compras/index');
      exit();
    }



    public function listarCompras(){
      $modeloconfiguracion = $this->loadModel("mdlConfiguracionPago");
      $configuracion = $modeloconfiguracion->listarConfiguracion();
      $datos = $this->mdlCompras->listarCompras();
      $proveedor = $this->mdlProveedor->listar();
      $proveedorJ = $this->mdlProveedor->listarJuridico();
      $producto = $this->mdlProducto->listar();
      require APP . 'view/_templates/header.php';
      require APP . 'view/Compras/listarCompras.php';
      require APP . 'view/_templates/footer.php';
    }


    public function modificarEstado(){
      $guardar = false;
      $error = false;

      if($this->validarProductos()){
          $error = true;
          $estado = false;
          echo json_encode(["v"=>1]);
      } else {
          $estado = $this->mdlCompras->cambiarEstado($_POST['id'], $_POST['estado']);
          if($estado){
            echo json_encode(["v"=>1]);
          }else{
            echo json_encode(["v"=>0]);
          }
      }

       if($estado){
         $guardar = true;
       }
       else {
         $error = true;
       }

 if($guardar == true)
 {
   $_SESSION['alerta'] =  'swal({
     title: "Compra anulada!",
     type: "error",
     confirmButton: "#3CB371",
     confirmButtonText: "Aceptar",
     // confirmButtonText: "Cancelar",
     closeOnConfirm: false,
     closeOnCancel: false
   })';
 }

 if($error == true)
 {
   $_SESSION['alerta'] =  'swal({
     title: "Error al intentar anular la compra!",
     type: "error",
     confirmButton: "#3CB371",
     confirmButtonText: "Aceptar",
     // confirmButtonText: "Cancelar",
     closeOnConfirm: false,
     closeOnCancel: false
   })';
  }
}



    private function validarProductos(){
      $id = $_POST['id'];
      $detalles = $this->mdlCompras->getDetallesCompra($id);
      $error = false;

      foreach ($detalles as $key => $detalle) {
        $cantProd = intval($detalle['cantidad_producto']);
        $cantComp = intval($detalle['cantidad']);
        $error = $cantProd < $cantComp;
        if($error){ break; }
      }
      return $error;
    }



    public function ajaxDetallesCompra(){

      $detalles = $this->mdlCompras->getDetallesCompra($_POST['idCompra']);
      $info = $this->mdlCompras->getInfoCompra($_POST['idCompra']);

      $html = "";
      foreach ($detalles as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . $value['nombre_producto'];
        $html .= '</td>';

        $html .= '<td>' . $value['cantidad'] . ' unidades</td>';
        $html .= '<td class="price">' . $value['valor_compra'] . '</td>';
        $html .= '<td class="price">' . $value['total'] . '</td>';
        $html .= '</tr>';
      }
      echo json_encode([
        'compra'=>$info['id_compras'],
        'empleado'=>$info['empleado'],
        'fecha' => $info['fecha_compra'],
        'proveedor' => $info['proveedor'],
        'total' => $info['total'],
        'html' => $html,
      ]);
    }

  }
