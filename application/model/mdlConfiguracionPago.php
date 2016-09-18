<?php

	class mdlConfiguracionPago
	{

		private $tipo_pago;
		private $tiempo_pago;
		private $porcentaje_comision;
		private $valor_base;
		private $Valor_dia;
		private $idTbl_Configuracion;
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
				exit("No se pudo establecer conexión con la base de datos");
			}
		}


		public function listarConfiguracion()
		{
			$sql = "SELECT tipo_pago, tiempo_pago, Valor_dia, porcentaje_comision, valor_base, idTbl_Configuracion FROM Tbl_configuracion WHERE idTbl_Configuracion = 1";

			$stm = $this->db->prepare($sql);
			$stm->execute();
			return $stm->fetchAll();
		}

		public function listarConfiguracion2()
		{
			$sql = "SELECT tipo_pago, tiempo_pago, porcentaje_comision, valor_base, idTbl_Configuracion FROM Tbl_configuracion WHERE idTbl_Configuracion = 2";
			$stm = $this->db->prepare($sql);
			$stm->execute();
			return $stm->fetchAll();
		}

		public function listarconfiguracion3()
		{
			$sql = "SELECT tipo_pago, tiempo_pago, porcentaje_comision, valor_base, idTbl_Configuracion FROM Tbl_configuracion WHERE idTbl_Configuracion = 3";
			$stm = $this->db->prepare($sql);
			$stm->execute();
			return $stm->fetchAll();
		}

		public function listarConfiguracionPagos()
		{
			$sql = "SELECT idTbl_Configuracion, tipo_pago FROM Tbl_configuracion";

			$stm = $this->db->prepare($sql);
			$stm->execute();
			return $stm->fetchAll();
		}

		public function modificarConfiguracion()
		{
			$sql = "UPDATE tbl_configuracion SET tiempo_pago = ?, Valor_dia = ?, porcentaje_comision = ?, valor_base = ? WHERE idTbl_Configuracion = 1";
			$stm = $this->db->prepare($sql);
			// $stm->bindParam(1, $this->idTbl_Configuracion);
			// $stm->bindParam(1, $this->tipo_pago);
			$stm->bindParam(1, $this->tiempo_pago);
			$stm->bindParam(2, $this->Valor_dia);
			$stm->bindParam(3, $this->porcentaje_comision);
			$stm->bindParam(4, $this->valor_base);
			return $stm->execute();
		}

		public function modificarValorBase()
		{
			$sql = "UPDATE tbl_configuracion SET valor_base = ? WHERE idTbl_Configuracion BETWEEN 1 AND 3";
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $this->valor_base);
			$stm->execute();
			return $stm;
		}
	}
