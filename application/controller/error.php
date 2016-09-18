<?php
class Error extends Controller{
  public function sinPermiso(){
    require APP . 'view/_templates/header.php';
    require APP. 'view/index/index.php';
    echo "<h1>No tiene permisos</h1>";
    require APP . 'view/_templates/footer.php';
  }
}
