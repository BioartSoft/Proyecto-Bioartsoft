<?php


class mdlVentas
{

  private $codigo_venta;
  private $descuento;
  private $valor_total;
  private $codigo_cliente;
  private $cantidad;
  private $tipo_Pago;
  private $valor_subtotal;
  private $estado;
  private $_ValSubtotal_Minimo;
  private $_Porcentaje_MinimoD;
  private $_ValSubtotal_Maximo;
  private $_Porcentaje_MaximoD;
  private $codigoEmpleado;
  private $dias_credito;
  private $fechainicial;
  private $fechafinal;
  private $db;

  public function __SET($attr, $valor){
    $this->$attr = $valor;
  }

  public function __GET($attr){
    return $this->$attr;
  }

  function __construct($db)
  {
    try {
      $this->db = $db;
    } catch (PDOException $e) {
      exit("No se pudo establecer conexión con la base de datos");
    }
  }


  public function listarpdf()
 {
   $sql="CALL SP_Informe_Ventas(?,?)";
   try {
    $ca = $this->db->prepare($sql);
    $ca->bindParam(1,$this->fechainicial);
    $ca->bindParam(2,$this->fechafinal);
   $ca->execute();
    return $ca->fetchAll(PDO::FETCH_ASSOC);
   } catch (Exception $e) {

   }

 }

  public function insertarVenta(){
    $sql = "CALL 	SP_InsertarVenta(?,?,?,?,?, ?)";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $this->valor_subtotal);
    $stm->bindParam(2, $this->descuento);
    $stm->bindParam(3, $this->valor_total);
    $stm->bindParam(4, $this->codigo_cliente);
    $stm->bindParam(5, $this->tipo_Pago);
    $stm->bindParam(6, $this->codigoEmpleado);
    $resultado = $stm->execute();
    $this->codigo_venta  = $this->ultimaVenta()["ultima"];
    return $resultado;
  }


  public function insertarVentaCredito(){
    $sql = "CALL 	SP_Insertar_venta_Credito(?,?,?,?,?, ?, ?)";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $this->valor_subtotal);
    $stm->bindParam(2, $this->descuento);
    $stm->bindParam(3, $this->valor_total);
    $stm->bindParam(4, $this->codigo_cliente);
    $stm->bindParam(5, $this->tipo_Pago);
    $stm->bindParam(6, $this->codigoEmpleado);
    $stm->bindParam(7, $this->dias_credito);
    $resultado = $stm->execute();
    $this->codigo_venta  = $this->ultimaVenta()["ultima"];
    return $resultado;
  }




  public function validarCantidad(){
    $sql = "CALL SP_Validar_Cantidad_Producto(?)";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $this->idProducto);
    //$stm->bindParam(2, $this->cantidad);
    $stm->execute();
    return $stm->fetch(PDO::FETCH_ASSOC);
  }


    public function insertarDetalleVenta($codigoProd, $cant){
    $sql = "CALL 	SP_InsertarDetalleVenta(?,?,?)";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $codigoProd);
    $stm->bindParam(2, $this->codigo_venta);
    $stm->bindParam(3, $cant);
    return $stm->execute();
  }



  public function ultimaVenta(){
    $sql = "CALL 	SP_UltimaVenta()";
    $stm = $this->db->prepare($sql);
    $stm->execute();
    return $stm->fetch();
  }



  public function listarVentas(){
    $sql = "CALL 	SP_Listar_Ventas()";
    $stm = $this->db->prepare($sql);
    $stm ->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
  }



  public function cambiarEstado($codigo, $estado){
    $sql = "CALL SP_Anular_Venta(?, ?)";
    # abrimos la transacción
    $this->db->beginTransaction();

    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $codigo);
    $stm->bindParam(2, $estado);
    $respuesta = $stm->execute();
    # validamos si se ejecutó correctamente
    if($respuesta == true && $this->devolverProductos($codigo)){
      # confirmamos los cambios
      $this->db->commit();
    } else {
      # hubo error, entonces devolvemos los cambios realizados
      $this->db->rollback();
    }
    return $respuesta;
  }




  public function devolverProductos($codigo){
    # listamos los detalles
    $detalles = $this->getDetallesVenta($codigo);
    $ok = true;
    # recorremos los detalles
    foreach($detalles AS $detalle){
      $r = $this->devolverProducto($detalle['cantidad'], $detalle['id_producto']);
      # si ocurrió un error al devolver el producto cancelamos todo
      if($r == false){
        $ok = false;
        break;
      }
    }
    return $ok;
  }




  public function devolverProducto($cantidad, $producto){
    $sql = "CALL SP_Actualizar_Existencia_venta(?, ?)";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $cantidad);
    $stm->bindParam(2, $producto);
    return $stm->execute();
  }




  public function getDetallesVenta($idVenta){
    $sql = "CALL SP_Detalles_Venta(?)";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $idVenta);
    $stm->execute();
    return $stm->fetchAll(2);

  }


  public function getInfoVenta($codigo){
    $sql = "CALL SP_Info_Venta(?)";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $codigo);
    $stm->execute();
    return $stm->fetch(2);
  }




  public function facturaVenta($cod){
    $sql = "SELECT * FROM venta v INNER JOIN venta_producto vp ON v.codigo = vp.codigo_venta INNER JOIN producto p.codigo = vp.codigoProducto INNER JOIN cliente c ON v.codigo_cliente = c.documento WHERE v.codigo = ?";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1,$cod);
    $stm->execute();
    return $stm->fetchAll();
  }




  public function listarConfiguracionVentas()
  {
    $sql = "CALL 	SP_Listar_Configuracion_Venta()";
    $stm = $this->db->prepare($sql);
    $stm->execute();
    return $stm->fetchAll(2);
  }




  public function modificarConfiguracionVentas(){
   $sql ="CALL SP_ModificarConfiguracionVentas(?,?,?,?)";
   $stm = $this->db->prepare($sql);
   $stm->bindParam(1, $this->_ValSubtotal_Minimo);
   $stm->bindParam(2, $this->_Porcentaje_MinimoD);
   $stm->bindParam(3,$this->_ValSubtotal_Maximo);
   $stm->bindParam(4,$this->_Porcentaje_MaximoD);
   return $stm->execute();
  }


  public function listarClientesCreditoV(){
    $sql= "CALL SP_Listar_Cliente_Creditos_Ventas()";
    $stm = $this->db->prepare($sql);
    $stm->execute();
    return $stm->fetchAll(2);
  }



  public function getDetalleCreditosV($idPersona)
  {
    $sql = "CALL SP_getDetalleCreditosV(?)";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $idPersona);
    $stm->execute();
    return $stm->fetchAll(2);
  }


  public function totalAbono($abono){
    $sql = "CALL SP_Consultar_Total_Abono(?, ?)";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $this->codigo_venta);
    $stm->bindParam(2, $abono);
    $stm->execute();
    return $stm->fetch(2);
  }


  public function cambiarEstadoCredito($estado){
    $sql = "CALL 	SP_Cambiar_Estado_Credito2(?, ?)";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $this->codigo_venta);
    $stm->bindParam(2, $estado);
    return $stm->execute();
  }


  public function cambiarEstadoCredito2($estado, $codigo){
    $sql = "CALL SP_Cambiar_Estado_Credito(?, ?)";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $estado);
    $stm->bindParam(2, $codigo);
    return $stm->execute();
  }


  public function getNombreCliente($idCliente)
  {
    $sql = "CALL SP_getNombreCliente(?)";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $idCliente);
    $stm->execute();
    return $stm->fetch(2);
  }


  public function insertarAbonoCreditoVen(){
    $sql = "CALL SP_Insertar_Abono_CreditoVen	(?,?)";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $this->valorAbonarCreditoV);
    $stm->bindParam(2, $this->codigo_venta);
    $resultado = $stm->execute();
    return $resultado;
  }



  public function listarAbonosCreditosV($id_ventas)
  {
      $sql = "CALL SP_listarAbonosCreditosV(?)";
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $id_ventas);
      $stm->execute();
      return $stm->fetchAll(2);
  }

}

?>
