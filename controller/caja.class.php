<?
class Caja{
	// VARIABLES DE CABECERA DE CAJA
	private $id_caja;
	private $fecha_caja_cab;
	private $estado_caja_cab;
	private $montoin_caja_cab;
	private $montofin_caja_cab;
	private $observa_caja_cab;
	// VARIABLES DE DETALLE DE CAJA
	private $tipo_caja;
	private $monto;
	private $descrip_caja;
	private $tipo_doc;
	private $num_doc;
	private $saldo;
	private $usuario;
	public 	$resultado = array();
	public  $dia;
	// METODOS PARA CABECERA DE CAJA
	function buscarCaja(){
	
	}
	function aperturarCaja(){
		$sql = 'select * from caja_cab';
		$res = mysql_query($sql);
		while($fila = mysql_fetch_array($res, MYSQL_ASSOC)){
			echo $fila[0];
		}
		$dia = date("d/m/Y");
		$sql = 'select * from caja_cab';
		$x = 0;
		$res = mysql_query($sql);
		while($row = mysql_fetch_array($res, MYSQL_ASSOC)){
			print $row[1];
		}
		if($x>1){
			$this->mensaje = 'si';
		}else{
			$this->mensaje = 'no';
		}
		return $this->mensaje;
	}
	function modiCaja($id_caja){
	
	}
	function eliminarCaja(){
	
	}
	function cerrarCaja(){
	
	}
	function verTodoCaja(){
	
	}
	function verUnaCaja(){
	
	}
	function listarCaja(){
		$sql = 'select *,(montoin_caja_cab - montoeg_caja_cab) saldo from caja_cab';
		$res = mysql_query($sql);
		while($fila = mysql_fetch_array($res, MYSQL_ASSOC)){
			$this->resultado[] = $fila;
		}
	}
	// DETALLE DE CAJA
	function ingresarCajaDet(){
		
	}
	function modificarCajaDet(){
		
	}
	function eliminarCajaDet(){
		
	}
	function listarCajaDet($id_caja){
		$this->id_caja = $id_caja;
		$sql = "select * from caja_det where id_caja=".$id_caja;
		$res = mysql_query($sql);
		while($fila = mysql_fetch_array($res, MYSQL_ASSOC)){
			$this->resultado[] = $fila;
		}
	}
	function verUnaCajaDet(){
		
	}
}
?>