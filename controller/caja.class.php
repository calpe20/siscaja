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
	public 	$estado;
	// METODOS PARA CABECERA DE CAJA
	function estadoCaja($id){
		$sql = "select * from caja_cab where id =".$id;
		$res = mysql_fetch_array(mysql_query($sql));
		$this->estado = $res['estado_caja_cab'];
		return $this->estado;
	}
	function buscarCaja(){
		
	}
	function aperturarCaja(){
		$dia = Date("Y-m-d");
		$sql = "select * from caja_cab";
		$res = mysql_query($sql);
		$x = 0;
		while($fila = mysql_fetch_array($res, MYSQL_ASSOC)){
			if ($fila['fecha_caja_cab']==$dia){
				if($fila['estado_caja_cab']==0){
					$x = $x + 1;
				}else{
					$x = $x + 1;
					$y = $y + 1; 
				}
			}
		}
		if($x > 0){
			if($y < 1){
				$this->mensaje = 'EL DIA YA FUE APERTURADO';
			}else{
				$this->mensaje = 'LA CAJA ESTA CERRADA DEL DIA';	
			}
		}else{
			mysql_query("insert into caja_cab (id_caja,fecha_caja_cab,estado_caja_cab,montoin_caja_cab,montoeg_caja_cab,observa_caja_cab)
						values (NULL, '$dia',0,0.00,0.00,'')");
			$this->mensaje = 'SE APERTURO RECIEN';
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
	function listarCajaDet($fecha){
		$sql = "select * from caja_cab";
		$res = mysql_query($sql);
		while($fila = mysql_fetch_array($res, MYSQL_ASSOC)){
			if ($fila['fecha_caja_cab']==$fecha){
				$x = $fila['id_caja'];
				$this->estado = $fila['estado_caja_cab'];
			}
		}
		$sql = "SELECT * FROM caja_det where id_caja = ".$x;
		$res = mysql_query($sql);
		while($fila = mysql_fetch_array($res, MYSQL_ASSOC)){
			$this->resultado[] = $fila;
		}
	}
	function listarCajaDet2($id,$fecha){
		$this->id_caja = $id_caja;
		$sql = "SELECT * FROM caja_det WHERE id_caja=".$id;
		$res = mysql_query($sql);
		while($fila = mysql_fetch_array($res, MYSQL_ASSOC)){
			$this->resultado[] = $fila;
		}
	}
	function verUnaCajaDet(){
		
	}
}
?>