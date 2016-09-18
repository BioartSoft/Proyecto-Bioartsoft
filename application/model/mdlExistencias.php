<?php

/**
*
*/
class mdlExistencias
{

	private $db;
  private $fecha_salida;
  private $tipo_baja;
  private $id_bajas;

	public function __SET($parametros, $valor){

      $this->$parametros= $valor;
    }

    public function __GET($parametros){

      return $this->$parametros;
    }


  function __construct($db)
  {
    try {
        $this->db = $db;
    } catch (PDOException $e) {
        exit('Database connection could not be established.');
    }
  }


   public function listarpro(){

		  $sql="CALL SP_listar_producto()";

		  try {
		   $ca= $this->db->prepare($sql);
		  $ca->execute();
		   return $ca->fetchAll(PDO::FETCH_ASSOC);
		  } catch (Exception $e) {

		  }

  }


  public function insertarBaja(){
    $sql = "CALL SP_InsertarBaja(?)";
    try {

    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $this->tipo_baja);
    return $stm->execute();

    } catch (Exception $e) {

    }
  }


  public function ultimaBaja(){
    //$sql = "SELECT MAX(id_bajas) ultimo_id FROM tbl_bajas";
		$sql = "CALL SP_UltimaBaja";
		try {
			$stm = $this->db->prepare($sql);
			$stm->execute();
			$r = $stm->fetch(2);
			return $r['ultimo_id'];
		} catch (Exception $e) {

		}

  }


    public function insertarDetalleBaja($idBaja, $Tbl_Productos_id_productos,$cant){
    $sql = "CALL SP_DetalleBaja(?,?,?)";
		try {
			$stm = $this->db->prepare($sql);
			$stm->bindParam(1, $idBaja);
			$stm->bindParam(2, $Tbl_Productos_id_productos );
			$stm->bindParam(3, $cant);
			return $stm->execute();
		} catch (Exception $e) {

		}

  }


	public function listarBajas()
	{
		$sql = "CALL SP_ListarBajas()";
		try {
			$stm=$this->db->prepare($sql);
			$stm->execute();
	  return $stm->fetchAll(PDO::FETCH_ASSOC);
		} catch (Exception $e) {
		}
	}
}


 ?>
