<?
	include('config.php');
	include('controller/caja.class.php');
	$caja = new Caja();
	$caja->listarCaja();
	foreach ($caja->resultado as $resulta) {
		echo $resulta['fecha_caja_cab'];
	}
	$datos = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','Ñ','O','P','Q','R','S','T','U','W','X','Y','X');
?>
	<style type="text/css">
		#cuadro{
			padding: 2px;
		}
		#cuadro a{
			padding: 5px;
			border: 1px solid red;
			text-decoration: none;
			color: #c1c1c1;
			font-weight: bold;
			font-size: 24px;
		}
	</style><div id='cuadro'>
	<?
	foreach ($datos as $resul) {
	?>
		<a href=""><? echo $resul?></a>
	
	<? }?>
	</div>