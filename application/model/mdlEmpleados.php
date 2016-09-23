<?php

	class mdlEmpleados
	{
		private $idPersona;
		private $Tbl_nombre_tipo_persona;
		private $tipo_pago;
		private $tiempo_pago;
		private $porcentaje_comision;
		private $valor_base;
		private $valorVentas;
		private $valorComision;
		private $cantidad_Dias;
		private $valor_dia;
		private $valorTotal;
		private $estado;
		private $numero_docu;
		private $Fecha_inicial;
		private $fecha_pago;
		private $id_pago;
		private $idTbl_Configuracion;
		private $valor_prima;
		private $valor_cesantias;
		private $valor_vacaciones;
		private $estado_prestamo;
		private $valor_prestamo;
		private $fecha_prestamo;
		private $id_prestamo;
		private $fecha_limite;
		private $descripcion;
		private $fecha_abono;
		private $fecha_liquidacion;
		private $valor;
		private $id_prestamos;
		private $Tbl_Prestamos_idprestamos;
		private $Tbl_Persona_id_persona;
		private $id_persona;
		private $fecha_inicial;
		private $fecha_final;
		private $cantidad_dias;
		private $estadoabonos;
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
				exit("No se pudo establecer la conexión");
			}
		}

		public function registrarPagoEmpleados()
		{
			$sql = "CALL SP_registrarPagoEmpleadoFijo(?,?,?,?,?,?,?,?)";

			$stm= $this->db->prepare($sql);
			$stm->bindParam(1, $this->numero_docu);
			$stm->bindParam(2, $this->valorVentas);
			$stm->bindParam(3, $this->valorComision);
			$stm->bindParam(4, $this->cantidad_dias);
			$stm->bindParam(5, $this->valor_prima);
			$stm->bindParam(6, $this->valor_cesantias);
			$stm->bindParam(7, $this->valor_vacaciones);
			$stm->bindParam(8, $this->estado);
			return $stm->execute();

		}

		public function registrarPagoEmpleadoTemporal()
		{
		 	$sql = "CALL SP_registrarPagoEmpleadoTemporal(?,?,?,?)";

			$stm= $this->db->prepare($sql);
			$stm->bindParam(1, $this->numero_docu);
			$stm->bindParam(2, $this->cantidad_Dias);
			$stm->bindParam(3, $this->valor_dia);
			$stm->bindParam(4, $this->estado);
			return $stm->execute();
		}

		public function listarPagosEmp()
		{
			$sql = "CALL SP_ListarPagosEmpleados()";
            $stm = $this->db->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
		}

		public function listarEmpleadoFijo()
		{
			$sql = "CALL SP_ListarEmpleadoFijo()";
            $stm = $this->db->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getDetallePagos($idPersona)
		{
			$sql = "CALL SP_DetallePago(?)";
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $idPersona);
			$stm->execute();
			return $stm->fetchAll(2);
		}



		public function getEmpleado()
		{
			$sql = "CALL SP_NombreEmpleado(?)";
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $this->idPersona);
			$stm->execute();
			return $stm->fetch(2);
		}


		public function getDetallePrestamos($idPersona)
		{
			$sql = "CALL SP_getDetallePrestamos(?)";
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $idPersona);
			$stm->execute();
			return $stm->fetchAll(2);
		}

		public function getNombreTipoEmpleado()
		{
			$sql = "CALL SP_NombreTipoPer()";
			$stm = $this->db->prepare($sql);
			$stm->execute();
			return $stm->fetchAll(2);
		}

		public function cambiarestado($codigo, $estado)
		{
			$sql ="CALL SP_AnularPago(?, ?)";
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $codigo);
			$stm->bindParam(2, $estado);
			return $stm->execute();
		}

		public function ultimoPago()
		{
			$sql = "SELECT MAX(id_pago) as id_pago FROM tbl_pagoempleados";
			$stm = $this->db->prepare($sql);
			$stm->execute();
			return $stm->fetch();
		}

		public function registrarDetallepagoconfi()
		{
			$sql = "CALL SP_RegistrarDetallePagoConfiguracion(?,?,?)";
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $this->id_pago);
			$stm->bindParam(2, $this->idTbl_Configuracion);
			$stm->bindParam(3, $this->valorTotal);
			return $stm->execute();
		}

		public function registrarDetallepagoconfiTemp()
		{
			$sql = "CALL SP_RegistrarDetallePagoConfiTemp(?,?,?)";
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $this->id_pago);
			$stm->bindParam(2, $this->idTbl_Configuracion);
			$stm->bindParam(3, $this->valorTotal);
			return $stm->execute();
		}

		public function registrarPrestamo()
		{
			$sql = "CALL SP_RegistrarPrestamo(?,?,?,?,?,?)";
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $this->estado_prestamo);
			$stm->bindParam(2, $this->valor_prestamo);
			$stm->bindParam(3, $this->fecha_prestamo);
			$stm->bindParam(4, $this->fecha_limite);
			$stm->bindParam(5, $this->descripcion);
			$stm->bindParam(6, $this->Tbl_Persona_id_persona);
			return $stm->execute();
		}

		public function actualizarAbono()
		{
			$sql = "CALL SP_actualizarValorPrestamo(?,?)";
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $id_prestamo);
			$stm->bindParam(2, $valor_prestamo);
			return $stm->execute();
		}

		public function registrarAbonoPrestamo()
		{
			$sql = "CALL SP_RegistrarAbonoPrestamo(?,?,?)";
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $this->valor);
			$stm->bindParam(2, $this->estadoabonos);
			$stm->bindParam(3, $this->Tbl_Prestamos_idprestamos);
			return $stm->execute();
		}

		public function sumarAbonos()
		{
			$sql = "CALL SP_sumarValorAbonoPrestamo(?)";
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $this->Tbl_Prestamos_idprestamos);
			$stm->execute();
			return $stm->fetch();
		}

		public function modificarEstadoPre()
		{
			$sql = "UPDATE tbl_prestamos SET estado_prestamo = 0 WHERE id_prestamos = ?";
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $this->Tbl_Prestamos_idprestamos);
			$stm->execute();
			return $stm;
		}

		public function traerFechaDiaDespues()
		{
			$sql = "CALL SP_Traer_Fecha(?)";
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $id_pago);
			$stm->execute();
			return $stm->fetch();
		}

		public function ListarAbonos($id_prestamos)
		{
			$sql = "CALL SP_listarAbonos(?)";
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $id_prestamos);
			$stm->execute();
			return $stm->fetchAll(2);
		}



		public function modificarfechaLiquidacion()
		{
			$sql = "CALL SP_modificarFechadeliquidacion(?,?)";
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $this->numero_docu);
			$stm->bindParam(2, $this->fecha_liquidación);
			return $stm->execute();
		}

		public function totalVentasEmpleado()
		{
			$sql = "CALL SP_listarVentasEmpleID(?,?,?)";
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $this->id_persona);
			$stm->bindParam(2, $this->fecha_inicial);
			$stm->bindParam(3, $this->fecha_final);
			$stm->execute();
			return $stm->fetch(2);
		}

		public function valicantipre()
		{
			$sql ="CALL SP_ValiPrestamo(?)";
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $this->id_persona);
			$stm->execute();
			return $stm->fetch(2);
		}

		public function prestamopendiente()
		{
			$sql = "CALL SP_valorPrestamoliquidacion(?)";
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $this->id_persona);
			$stm->execute();
			return $stm->fetch(2);
		}

		public function informacionprestamo()
		{
			$sql = "CALL SP_traerinfoprestamo(?)";
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $this->id_prestamos);
			$stm->execute();
			return $stm->fetch(PDO::FETCH_ASSOC);
		}

		public function modificarprestamos()
		{
			$sql = "CALL SP_modificarPrestamo(?,?,?)";
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $this->fecha_limite);
			$stm->bindParam(2, $this->valor_prestamo);
			$stm->bindParam(3, $this->id_prestamos);
			return $stm->execute();
		}

		public function cambiarestadoAbonos($codigo, $estado)
		{
			$sql ="CALL SP_anularAbonoPrestamos(?,?)";

			$this->db->beginTransaction();
			
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $codigo);
			$stm->bindParam(2, $estado);	
			return $stm->execute();
		}

		public function devolverProductos($codigo){
		  # listamos los detalles
		  $detalles = $this->getDetallesCompra($codigo);
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
		  $sql = "CALL SP_Actualizar_Existencia_compra(?, ?)";
		  $stm = $this->db->prepare($sql);
		  $stm->bindParam(1, $cantidad);
		  $stm->bindParam(2, $producto);
		  return $stm->execute();
		}

		public function cambiarestadoPrestamo($codigo, $estado)
		{
			$sql ="CALL SP_AnularPrestamo(?,?)";
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $codigo);
			$stm->bindParam(2, $estado);	
			return $stm->execute();
		}

		public function nullEnAbonos()
		{
			$sql = "CALL SP_ValAbonoAnularPrestamo(?)";
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $this->id_prestamos);
			$stm->execute();
			return $stm->fetch(PDO::FETCH_ASSOC);
		}

		public function asociarPago()
		{
			$sql = "CALL SP_AsociarPagoaLiquidacion(?)";
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $this->id_persona);
			$stm->execute();
			return $stm->fetch(2);
		}

		public function asociarPagoPrima()
		{
			$sql = "CALL SP_AsociarPrimaLiquidacion(?)";
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $this->id_persona);
			$stm->execute();
			return $stm->fetch(2);
		}

	}
 ?>
