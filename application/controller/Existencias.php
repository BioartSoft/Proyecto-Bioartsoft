<?php

  class Existencias extends controller{


   private $mdlexistencias;

  public function __construct(){

    $this->mdlexistencias = $this->loadModel("mdlExistencias");

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
