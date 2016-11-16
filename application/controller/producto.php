<?php

use Dompdf\Dompdf;

class producto extends Controller{


    private $mdlproducto;
    private $mdlexistencias;

    public function __construct(){

    $this->mdlproducto = $this->loadModel("mdlProducto");
    $this->mdlexistencias = $this->loadModel("mdlExistencias");
  }


    public function informestock()
    {
    require_once APP . 'libs/dompdf/autoload.inc.php';
     $stock=$this->mdlproducto->listarstock();
      ob_start();
      require APP . 'view/producto/pdfstock.php';
      $html = ob_get_clean();
      $dompdf = new Dompdf();
      $dompdf->loadHtml($html);
      // $dompdf->load_html_file($urlImagen);
      $dompdf->setPaper('A4', 'landscape');
      $dompdf->render();
      $dompdf->stream("Informe Stock.pdf", array("Attachment" => false, 'isRemoteEnabled' => true));
    }


    public function generarPdfCodigo(){
      $id = $_GET['id'];
      require_once APP . 'libs/dompdf/autoload.inc.php';
      $urlImagen = URL . 'producto/generarcodigo?id=' . $id;
      ob_start();
      require APP . 'view/producto/pdfcodigo.php';
      $html = ob_get_clean();

      $dompdf = new Dompdf();
      $dompdf->loadHtml($html);
      // $dompdf->load_html_file($urlImagen);
      $dompdf->setPaper('A4', 'landscape');
      $dompdf->render();
      $dompdf->stream("Codigos.pdf", array("Attachment" => false, 'isRemoteEnabled' => true));
    }


    public function generarPdfCodigoProductos(){
      require_once APP . 'libs/dompdf/autoload.inc.php';
      $urlImagen = URL . 'producto/generarcodigo?id=';
      $productos = $this->mdlproducto->listar();
      ob_start();
      require APP . 'view/producto/pdfCodigoProductos.php';
      $html = ob_get_clean();
      $dompdf = new Dompdf();
      $dompdf->loadHtml($html);
      // $dompdf->load_html_file($urlImagen);
      $dompdf->setPaper('A4', 'landscape');
      $dompdf->render();
      $dompdf->stream("Codigos.pdf", array("Attachment" => false, 'isRemoteEnabled' => true));
    }


  public function validacion(){
      $this->mdlproducto->__SET("id_producto", $_POST['campoCodigo']);
      $Validar = $this->mdlproducto->validarCodigo();

      if ($Validar != false)
        echo "1";
      else
        echo "0";
  }


  public function validacionNombre(){
      $this->mdlproducto->__SET("nombre_producto", $_POST['campoNombre']);
      $ValidarNombre = $this->mdlproducto->validarNombre();

      if ($ValidarNombre != false)
        echo "1";
      else
        echo "0";
  }


   public function guardarImagenCodigo($url, $nombre){
    $ruta = APP . "imagenes/$nombre.png";
    $content = file_get_contents($url);
    $fp = fopen($ruta, 'w');
    fwrite($fp, $content);
    fclose($fp);
    // $img = imagecreatefrompng($url);
    // var_dump($img, $url);
    // exit();
    // imagepng($img);
    // imagedestroy($img);
    return realpath($ruta);
  }


    public function informefproducto()
    {
     $ver2= $this->mdlproducto->listarpdfp();
      require_once APP . 'libs/dompdf/autoload.inc.php';
      $ver2 = $this->mdlproducto->listarpdfp();
      ob_start();
      require APP . 'view/producto/pdfinformepf.php';
      $html = ob_get_clean();
      $dompdf = new Dompdf();
      $dompdf->loadHtml($html);
      // $dompdf->load_html_file($urlImagen);
      $dompdf->setPaper('A4', 'landscape');
      $dompdf->render();
      $dompdf->stream("Codigos.pdf", array("Attachment" => false, 'isRemoteEnabled' => true));
    }


  public function validacionCantidad(){
      $this->mdlproducto->__SET("id_producto", $_POST['id']);
      //$this->mdlVentas->__SET("cantidad", $_POST['campoCant']);
      $ValidarCant = $this->mdlproducto->validarCantidad();

      echo json_encode($ValidarCant);
  }


  public function informeBajas()
     {
       require APP . 'view/_templates/header.php';
       require APP. 'view/Existencias/reporteBajas2.php';
       require APP . 'view/_templates/footer.php';
     }


  public function pdfBajas()
     {

       if(isset($_POST['btnconsultar'])){
         $this->mdlexistencias->__SET('fechainicial',date("Y-m-d",strtotime($_POST['txtfechainicial'])));
         $fecha = $this->mdlexistencias->validarFechaBaja();
         $this->mdlexistencias->__SET('fechafinal',date("Y-m-d",strtotime($_POST['txtfechafinal'])));
         $fecha2 = $this->mdlexistencias->validarFechaBaja();

         if($fecha == true && $fecha2 == true){

           $this->mdlexistencias->__SET('fechainicial',date("Y-m-d",strtotime($_POST['txtfechainicial'])));
           $this->mdlexistencias->__SET('fechafinal',date("Y-m-d",strtotime($_POST['txtfechafinal'])));
           $ver = $this->mdlexistencias->listarpdf();

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
           header("Location:".URL.'producto/informeBajas');
           exit();
         }
       }

       require_once APP . 'libs/dompdf/autoload.inc.php';
       // $urlImagen = URL . 'producto/generarcodigo?id=';
       // $productos = $this->mdlproducto->listar();
       ob_start();
       require APP . 'view/Existencias/reporteBajas.php';
       $html = ob_get_clean();
       $dompdf = new Dompdf();
       $dompdf->loadHtml($html);
       // $dompdf->load_html_file($urlImagen);
       $dompdf->setPaper('A4', 'landscape');
       $dompdf->render();
       $dompdf->stream("Informe Bajas.pdf", array("Attachment" => false, 'isRemoteEnabled' => true));
     }


  public function registrarBajas(){
    if(isset($_POST['btn-agregar'])){
      $this->mdlexistencias->tipo_baja = $_POST['tipo_baja'];
      $this->mdlexistencias->__SET("id_bajas", $_POST['empleadoId']);
      $this->mdlexistencias->__SET("id_bajas", $_POST['empleadoId']);

      $error = $this->mdlexistencias->insertarBaja();
      $id_baja = $this->mdlexistencias->ultimaBaja();

      foreach($_POST['producto'] as $k=>$producto_id){
        $error = !$this->mdlexistencias->insertarDetalleBaja($id_baja, $producto_id, $_POST['cantidad'][$k]);
        if($error){
          throw new Exception( 'swal({
            title: "Error en el registro!",
            type: "error",
            confirmButton: "#3CB371",
            confirmButtonText: "Aceptar",
            // confirmButtonText: "Cancelar",
            closeOnConfirm: false,
            closeOnCancel: false
          })', 1);

          header("Location: ".URL."producto/registrarBajas");
          exit();
        }

      }

    $_SESSION['alerta'] = ' swal({
      title: "Guardado exitoso!",
      type: "success",
      confirmButton: "#3CB371",
      confirmButtonText: "Aceptar",
      // confirmButtonText: "Cancelar",
      closeOnConfirm: false,
      closeOnCancel: false
    })';

    header("Location: ".URL."producto/registrarBajas");
    exit();

    }

   $producto = $this->mdlexistencias->listarpro();
    require APP . 'view/_templates/header.php';
    require APP . 'view/Existencias/registrarBajas.php';
    require APP . 'view/_templates/footer.php';
  }


  public function listarBajas(){
    $bajas = $this->mdlexistencias->listarBajas();
    require APP . 'view/_templates/header.php';
    require APP . 'view/Existencias/listarbajas.php';
    require APP . 'view/_templates/footer.php';
  }


  public function registrarProductos(){
    $error = false;
    $guardado = false;
    $errorCodigo = true;
    $errorNombre = true;
    if(isset($_POST["btnguardarpro"])){
      if($_POST["txtpreciocompra"] <  $_POST["txtprecioventa"] && $_POST["txtpreciocompra"] < $_POST["txtprecioalpormayor"] && $_POST["txtprecioventa"] > $_POST["txtprecioalpormayor"]){
      // $this->mdlproducto->__SET("id_producto", $_POST['txtcodigo']);
      // $ValidarCod = $this->mdlproducto->validarCodigo();
      $this->mdlproducto->__SET("nombre_producto", $_POST['txtnombreproducto']);
      $validarNombre = $this->mdlproducto->validarNombre();
      // $this->mdlproducto->__SET("id_producto",$_POST["txtcodigo"]);
      $this->mdlproducto->__SET("nombre_producto",ucfirst($_POST["txtnombreproducto"]));
      $this->mdlproducto->__SET("precio_detal",$_POST["txtprecioventa"]);
      $this->mdlproducto->__SET("precio_por_mayor",$_POST["txtprecioalpormayor"]);
      $this->mdlproducto->__SET("precio_unitario",$_POST["txtpreciocompra"]);
      $this->mdlproducto->__SET("Tbl_Categoria_idcategoria",$_POST["txtcategoria"]);
      $this->mdlproducto->__SET("Talla",$_POST["txttalla"]);
      $this->mdlproducto->__SET("Tamano",$_POST["txttamano"]);
      $this->mdlproducto->__SET("stock",$_POST["txtstock"]);


      try{

          if($validarNombre != false){
            $errorNombre = false;
          }else{

            if($this->mdlproducto->Guardar()){
              $guardado = true;

            }else {
              $error = true;
            }
          }
    }catch (PDOException $ex) {
        echo  $ex->getMessage();
      }

    }else{
      $_SESSION["alerta"] = 'swal({
        title: "Precios no válidos!",
        type: "error",
        confirmButton: "#3CB371",
        confirmButtonText: "Aceptar",
        // confirmButtonText: "Cancelar",
        closeOnConfirm: false,
        closeOnCancel: false
      })';

      header("Location: ".URL."producto/registrarProductos");
      exit();

    }

  }

    if($guardado == true){
        $_SESSION["alerta"] = 'swal({
          title: "Guardado exitoso!",
          type: "success",
          confirmButton: "#3CB371",
          confirmButtonText: "Aceptar",
          // confirmButtonText: "Cancelar",
          closeOnConfirm: false,
          closeOnCancel: false
        })';

        header("Location: ".URL."producto/registrarProductos");
        exit();
    }
    if($error == true){
        $_SESSION["alerta"] = 'swal({
          title: "Error en el registro!",
          type: "error",
          confirmButton: "#3CB371",
          confirmButtonText: "Aceptar",
          // confirmButtonText: "Cancelar",
          closeOnConfirm: false,
          closeOnCancel: false
        })';

        header("Location: ".URL."producto/registrarProductos");
        exit();
    }


    $categorias = $this->mdlproducto->listarca();
    require APP . 'view/_templates/header.php';
    require APP . 'view/producto/registrarProductos.php';
    require APP . 'view/_templates/footer.php';
  }


  public function registrarCategoria(){
    $guarda = false;
    $eror = false;
    $categ = true;

    if(isset($_POST['btn-ca'])){

      $this->mdlproducto->__SET("nombre", $_POST["txtnombrec"]);
      $categoria = $this->mdlproducto->validarNombreCategoria2();
      // var_dump($categoria);
      // exit();

      if($categoria['total'] != 0){
        $categ = false;
      }else{
        if($this->mdlproducto->Guardarca()){
          $guarda = true;
        }else{
          $eror = true;
        }

      if($guarda == true){
        $_SESSION["alerta"] = 'swal({
          title: "Guardado exitoso!",
          type: "success",
          confirmButton: "#3CB371",
          confirmButtonText: "Aceptar",
          // confirmButtonText: "Cancelar",
          closeOnConfirm: false,
          closeOnCancel: false
        })';

        header("Location: ".URL."producto/registrarCategoria");
        exit();
      }

      if( $eror == true){
        $_SESSION["alerta"] =  'swal({
          title: "Error en el registro!",
          type: "success",
          confirmButton: "#3CB371",
          confirmButtonText: "Aceptar",
          // confirmButtonText: "Cancelar",
          closeOnConfirm: false,
          closeOnCancel: false
        })';
        header("Location: ".URL."producto/registrarCategoria");
        exit();
      }

    }

}
    require APP . 'view/_templates/header.php';
    require APP . 'view/producto/registrarCategoria.php';
    require APP . 'view/_templates/footer.php';
  }


  public function listarProductos($id = 0,$tipo = 0){
    $actualizado = false;
    if(isset($_POST['txtcodigo'])){
    $actualizado = $this->modificarProducto();
    }
    $abrirpro = $this->mdlproducto->listar();
    $categorias = $this->mdlproducto->listarca();
    require APP . 'view/_templates/header.php';
    require APP . 'view/producto/listarProductos.php';
    require APP . 'view/_templates/footer.php';
  }


  public function listarCategorias(){
    $guardar=false;
    $error=false;
    $existeCategoria = false;
    $existeCategoria2 = false;
    $noExisteCategoria = false;

    if(isset($_POST['txtcodigo'])){

      $this->mdlproducto->__SET('nombre', ucfirst($_POST['txtnombreca']));
      $this->mdlproducto->__SET('id_categoria', $_POST['txtcodigo']);

      $validarNombreC = $this->mdlproducto->validarModCategoria();
      $consultarcategorias = $this->mdlproducto->consultarCategorias();
      $categoria = $this->mdlproducto->ModNombreCateg();

      foreach ($consultarcategorias as $categ) {
        if ($categ['nombre'] == $validarNombreC['nombre']) {
          $existeCategoria = true;#dejar guardar
          break;
        }
      }

      foreach ($categoria as $categoria) {
        if($categoria['nombre'] == strtolower($_POST['txtnombreca'])){
          $existeCategoria2 = true;# NO dejar guardar
          break;
        }
      }

      foreach ($consultarcategorias as $ca) {
        if ($ca['nombre'] != strtolower($_POST['txtnombreca'])) {
          $noExisteCategoria = true;# dejar guardar
        }
      }

        if(($existeCategoria === false && $existeCategoria2 === true) || $noExisteCategoria === false){
          $_SESSION['alerta'] = ' swal({
                title: "Nombre de categoría ya existe, no se puede modificar!",
                type: "error",
                confirmButton: "#3CB371",
                confirmButtonText: "Aceptar",
                // confirmButtonText: "Cancelar",
                closeOnConfirm: false,
                closeOnCancel: false
              })';

        }else if(($existeCategoria === true && $existeCategoria2 === false) || $noExisteCategoria === true){

          $resultado = $this->mdlproducto->ModificarCategoria();

          if($resultado){

            $guardar=true;
          }
          else {
            $error=true;
          }
        }

        if($guardar == true)
        {
            $_SESSION['alerta']=  'swal({
              title: "Modificación exitosa!",
              type: "success",
              confirmButton: "#3CB371",
              confirmButtonText: "Aceptar",
              // confirmButtonText: "Cancelar",
              closeOnConfirm: false,
              closeOnCancel: false
            })';

            header("Location: ".URL."producto/listarCategorias");
            exit();
        }

        if($error == true)
        {
          $_SESSION['alerta'] =  'swal({
            title: "Error en la modificación!",
            type: "error",
            confirmButton: "#3CB371",
            confirmButtonText: "Aceptar",
            // confirmButtonText: "Cancelar",
            closeOnConfirm: false,
            closeOnCancel: false
          })';

          header("Location: ".URL."producto/listarCategorias");
          exit();
        }

        }
        $cate = $this->mdlproducto->listarca();
        require APP . 'view/_templates/header.php';
        require APP . 'view/producto/listarCategorias.php';
        require APP . 'view/_templates/footer.php';
  }


  public function obtenerProductos(){
    header("Content-type: application/json");
    $producto = $this->mdlproducto->traerPorReferencia($_POST['id']);
    echo json_encode($producto);

  }


  public function obtenerProductos2(){
    header("Content-type: application/json");
    $producto = $this->mdlproducto->traerPorReferencia($_POST['id']);

    if($producto){

      echo json_encode([
        "id"=>$producto['id_producto'],
        "precio1"=>$producto['precio_unitario'],
        "precio2"=>$producto['precio_detal'],
        "precio3"=>$producto['precio_por_mayor']

    ]);
    }else{
      echo json_encode(["v"=>NULL]);
    }

  }


  public function obtenercategoria(){
    header("Content-type: application/json");
    $categoria = $this->mdlproducto->traerporcodigo($_POST['id']);
    echo json_encode($categoria);
  }


  private function modificarProducto(){
    $existe = false;
    $existe2 = false;
    $noExiste = false;

    $this->mdlproducto->id_producto = $_POST["txtcodigo"];
    $this->mdlproducto->nombre_producto = ucfirst($_POST["txtnombreproducto"]);

    $validarNombre = $this->mdlproducto->validarModNombre();
    $consultarNombres = $this->mdlproducto->consultarProductos();
    $nombre = $this->mdlproducto->ModNombreProd();

    foreach ($consultarNombres as $value) {
      if ($value['nombre'] == $validarNombre['nombre']) {
        $existe = true;#dejar guardar
        break;
      }
    }

    foreach ($nombre as $val) {
      if($val['nombre'] == strtolower($_POST['txtnombreproducto'])){
        $existe2 = true;# NO dejar guardar
        break;
      }
    }

    foreach ($consultarNombres as $valor) {
      if ($valor['nombre'] != $_POST['txtnombreproducto']) {
        $noExiste = true;# dejar guardar
      }
    }

    if(($existe === false && $existe2 === true) || $noExiste === false){

      $_SESSION['alerta'] = ' swal({
            title: "Nombre de producto ya existe, no se puede modificar!",
            type: "error",
            confirmButton: "#3CB371",
            confirmButtonText: "Aceptar",
            // confirmButtonText: "Cancelar",
            closeOnConfirm: false,
            closeOnCancel: false
          })';
      // var_dump("no guardado");
      // exit();
    }else if(($existe === true && $existe2 === false) || $noExiste === true){
      // var_dump("Guardado");
      // exit();

  if($_POST["txtpreciocompra"] <  $_POST["txtprecioventa"] && $_POST["txtpreciocompra"] < $_POST["txtprecioalpormayor"] && $_POST["txtprecioventa"] > $_POST["txtprecioalpormayor"]){
    $this->mdlproducto->precio_detal = $_POST["txtprecioventa"];
    $this->mdlproducto->precio_por_mayor = $_POST["txtprecioalpormayor"];
    $this->mdlproducto->precio_unitario = $_POST["txtpreciocompra"];
    $this->mdlproducto->Tbl_Categoria_idcategoria = $_POST["txtcategoria"];

    if($this->mdlproducto->Tbl_Categoria_idcategoria == 1){
      $this->mdlproducto->Talla = $_POST["txttalla"];
      $this->mdlproducto->Tamano = "";
    } else {
      $this->mdlproducto->Tamano = $_POST["txttamano"];
      $this->mdlproducto->Talla = "";
    }
    $this->mdlproducto->stock = $_POST["txtstock"];

    if($this->mdlproducto->actualizarProducto()){
      $_SESSION['alerta'] = 'swal({
        title: "Modificación exitosa!",
        type: "success",
        confirmButton: "#3CB371",
        confirmButtonText: "Aceptar",
        // confirmButtonText: "Cancelar",
        closeOnConfirm: false,
        closeOnCancel: false
      })';
      header("Location: ".URL."producto/listarProductos");
      exit();
      return true;
    }else{
      throw new Exception( 'swal({
        title: "Error en la modificación!",
        type: "success",
        confirmButton: "#3CB371",
        confirmButtonText: "Aceptar",
        // confirmButtonText: "Cancelar",
        closeOnConfirm: false,
        closeOnCancel: false
      })', 1);
      header("Location: ".URL."producto/listarProductos");
      exit();
    }
  }else{
    $_SESSION['alerta'] = 'swal({
      title: "Precios inválidos!",
      type: "error",
      confirmButton: "#3CB371",
      confirmButtonText: "Aceptar",
      // confirmButtonText: "Cancelar",
      closeOnConfirm: false,
      closeOnCancel: false
    })';
    header("Location: ".URL."producto/listarProductos");
    exit();
  }
  }
}


  public function ModificarCategoria(){

    $validarNombreCateg = true;
    $existeCategoria = false;
    $existeCategoria2 = false;
    $noExisteCategoria = false;

    $this->mdlproducto->__SET('id_categoria', $_POST['txtcodigo']);
    $this->mdlproducto->__SET('nombre', ucfirst($_POST['txtnombreca']));

    $validarNombreC = $this->mdlproducto->validarModCategoria();
    var_dump($validarNombreC);
    exit();
    $consultarcategorias = $this->mdlproducto->consultarCategorias();
    $categoria = $this->mdlproducto->ModNombreCateg();

    foreach ($consultarcategorias as $categ) {
      if ($categ['nombre'] == $validarNombreC['nombre']) {
        $existeCategoria = true;#dejar guardar
        break;
      }
    }

    foreach ($categoria as $categoria) {
      if($categoria['nombre'] == $_POST['txtnombreca']){
        $existeCategoria2 = true;# NO dejar guardar
        break;
      }
    }

    foreach ($consultarcategorias as $ca) {
      if ($ca['nombre'] != $_POST['txtnombreca']) {
        $noExisteCategoria = true;# dejar guardar
      }
    }

    $this->mdlproducto-> ModificarCategoria();
  }



  public function generarCodigo(){
    $producto_id = $_GET['id'];
    require APP . 'libs/BarcodeGenerator.php';
    $barcode = new BarcodeGenerator();
    $barcode->init();
    $barcode->bcHeight = 120;
    $barcode->bcThickWidth = 10;
    $barcode->build($producto_id, true);
  }



  public function listarStock()
  {
    $modeloconfiguracion = $this->loadModel("mdlConfiguracionPago");
    $configuracion = $modeloconfiguracion->listarConfiguracion();
    $stock=$this->mdlproducto->listarstock();
    require APP . 'view/_templates/header.php';
    require APP . 'view/producto/listarstockminimo.php';
    require APP . 'view/_templates/footer.php';
  }


  public function cambiarEstado(){
   $resultado = $this->mdlproducto->ModificarEstado($_POST['id']);
   echo 1;
  }



  public function ajaxDetallesProducto(){
    $detalles = $this->mdlproducto->getDetallesProducto($_POST['idproducto']);
     $info = $this->mdlproducto->getInfoProducto($_POST['idproducto']);
      $html = "";
      foreach ($detalles as $key => $value) {
        $html .= '<tr>';
        $html .= '<td class="price">' .$value['precio_unitario'] . '</td>';
        $html .= '<td class="price">' . $value['precio_detal'] . '</td>';
        $html .= '<td class="price">' . $value['precio_por_mayor'] . '</td>';
        $html .= '</tr>';
      }
      echo json_encode([
        'producto'=>$info['nombre_producto'],
        'html' => $html
      ]);

    }


    public function ajaxDetallesBajas(){
      $detalles = $this->mdlproducto->getDetallesBajas($_POST['idbaja']);
      $info = $this->mdlproducto->getInfoBaja($_POST['idbaja']);

        $html = "";
        foreach ($detalles as $key => $value) {
          $html .= '<tr>';
          $html .= '<td>' . $value['fecha_salida'] . '</td>';
          $html .= '<td>' . $value['tipo_baja'] . '</td>';
          $html .= '<td>' . $value['cantidad'] . '</td>';
          $html .= '</tr>';
        }
        echo json_encode([
          'empleado' => $info['empleado'],
          'baja'=>$value['id_bajas'],
          'html' => $html,
        ]);

      }


    public function validacionCategoria(){
        $this->mdlproducto->__SET("id_categoria", $_POST['txtnombrec']);
        $ValidarNombreCateg = $this->mdlproducto->validarNombreCategoria();

        if ($ValidarNombreCateg != false)
          echo "1";
        else
          echo "0";
    }


    public function AnularBaja(){
      $guardar=false;
      $error=false;

      $estado = $this->mdlexistencias->cambiarEstado($_POST['id'], $_POST['estado']);
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
     title: "Error al intentar anular la baja!",
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
