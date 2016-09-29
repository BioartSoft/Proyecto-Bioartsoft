<?php

class Otro extends controller{



  public function index(){
  	// $modeloconfiguracion = $this->loadModel("mdlConfiguracionPago");
    // $configuracion = $modeloconfiguracion->listarConfiguracion();

    require APP . 'view/_templates/header.php';
    require APP . 'view/index/index.php';
    require APP . 'view/_templates/footer.php';
  }

}

?>
