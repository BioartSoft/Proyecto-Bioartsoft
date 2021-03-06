<?php
use Dompdf\Dompdf;

  class Existencias extends controller{


   private $mdlexistencias;

  public function __construct(){

    $this->mdlexistencias = $this->loadModel("mdlExistencias");

  }

  public function informbajas()
    {
    require_once APP . 'libs/dompdf/autoload.inc.php';
      // $urlImagen = URL . 'producto/generarcodigo?id=';
      // $productos = $this->mdlproducto->listar();

     $bajas = $this->mdlexistencias->listarBajas();
      ob_start();
      require APP . 'view/Existencias/pdfbaja.php';
      $html = ob_get_clean();
      $dompdf = new Dompdf();
      $dompdf->loadHtml($html);
      // $dompdf->load_html_file($urlImagen);
      $dompdf->setPaper('A4', 'landscape');
      $dompdf->render();
      $dompdf->stream("Codigos.pdf", array("Attachment" => false, 'isRemoteEnabled' => true));
    }


    public function registrarBajas(){
      $modeloconfiguracion = $this->loadModel("mdlConfiguracionPago");
      $configuracion = $modeloconfiguracion->listarConfiguracion();

      if(isset($_POST['btn-agregar'])){
        $this->mdlexistencias->tipo_baja = $_POST['tipo_baja'];
        $error = $this->mdlexistencias->insertarBaja();
        $id_baja = $this->mdlexistencias->ultimaBaja();

        foreach($_POST['producto'] as $k=>$producto_id){
          $error = !$this->mdlexistencias->insertarDetalleBaja($id_baja, $producto_id, $_POST['cantidad'][$k]);
          if($error){
            throw new Exception("Error al guardar los detalles", 1);
          }

        }
        # redireccion a lista bajas
        echo "Guardado Exitoso!";
        exit();
        // header("Location: ");
      }

     $producto = $this->mdlexistencias->listarpro();
      require APP . 'view/_templates/header.php';
      require APP . 'view/Existencias/registrarBajas.php';
      require APP . 'view/_templates/footer.php';
    }

    public function listarBajas(){
      $modeloconfiguracion = $this->loadModel("mdlConfiguracionPago");
      $configuracion = $modeloconfiguracion->listarConfiguracion();
      $bajas = $this->mdlexistencias->listarBajas();
      require APP . 'view/_templates/header.php';
      require APP . 'view/Existencias/listarbajas.php';
      require APP . 'view/_templates/footer.php';
    }

  }
