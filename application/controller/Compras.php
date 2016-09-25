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
              $this->mdlCompras->__SET('fechafinal',date("Y-m-d",strtotime($_POST['txtfechafinal'])));
              $ver = $this->mdlCompras->listarpdf();
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
          $this->mdlCompras->insertarDetalleCompra($_POST['producto'][$i], $_POST['cantidad'][$i]);
        }

        if($C){

          $guardar=true;
        }
        else {
          $error=true;
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
      $guardar=false;
      $error=false;

      $estado = $this->mdlCompras->cambiarEstado($_POST['id'], $_POST['estado']);
       if($estado){
       echo json_encode(["v"=>1]);

    }else{
      echo json_encode(["v"=>0]);

   }

   if($estado){

     $guardar=true;
   }
   else {
     $error=true;
   }

 if($guardar == true)
 {

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


    public function ajaxDetallesCompra(){

      $detalles = $this->mdlCompras->getDetallesCompra($_POST['idCompra']);
      $info = $this->mdlCompras->getInfoCompra($_POST['idCompra']);

      $html = "";
      foreach ($detalles as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . $value['nombre_producto'] . '</td>';
        $html .= '<td>' . $value['cantidad'] . ' unidades</td>';
        $html .= '<td class="price">' . $value['precio_unitario'] . '</td>';
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
