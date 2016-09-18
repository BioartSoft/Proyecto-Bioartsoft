<?php

class mdlLogin
{
  private $nombreUsuario;
  private $idRol;
  private $codigoUsuario;
  private $estado;
  private $clave;
  private $conClave;
  private $id_persona;
  private $db;


public function __SET($atributo, $valor)
{
  $this->$atributo = $valor;
}

public function __GET($atributo)
{
  return $this->$atributo;
}
  function __construct($db)
  {
    try {
      $this->db = $db;
    } catch (Exception $e) {

    }

  }


public function buscarUsuario()
{
  $sql = "CALL	SP_Buscar_Usuario(?)";
  $stm = $this->db->prepare($sql);
  $stm->bindParam(1, $this->nombre_usuario);
  $stm->execute();
  return $stm->fetch(PDO::FETCH_ASSOC);
}


public function existeUsuario(){

  $sql = "CALL	SP_Existe_Usuario(?, ?)";
  $stm = $this->db->prepare($sql);
  $stm->bindParam(1, $this->nombre_usuario);
  $stm->bindParam(2, $this->correo);
  $stm->execute();
  return $stm->fetch(PDO::FETCH_ASSOC);

}


public function consultarUsuario(){
  $sql = "CALL SP_ConsultarUsuario(?)";
  $stm = $this->db->prepare($sql);
  $stm->bindParam(1, $this->id_persona);
  $stm->execute();
  return $stm->fetch(PDO::FETCH_ASSOC);
}

public function listarUsuario($id_U){
    $sql = "CALL	SP_ListarUsuario(?)";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $id_U);
    $stm->execute();
    return $stm->fetch(PDO::FETCH_ASSOC);

}

}

 ?>
