<!DOCTYPE html>
<?
require 'config.php';
?>
<html land ='es'>
<head>
	<title>VENTAS - CAJA</title>
	<link rel='stylesheet' href='css/stylebasico.css'>
	<link type="text/css" rel="stylesheet" href="dhtmlgoodies_calendar/dhtmlgoodies_calendar.css?random=20051112" media="screen"></LINK>
	<SCRIPT type="text/javascript" src="dhtmlgoodies_calendar/dhtmlgoodies_calendar.js?random=20060118"></script>
	<script type="text/javascript" src="js/ajax.js"></script>
</head>
<body>
	<div id='contenedor'>
		<?
		if(!isset($_SESSION['usuario'])){
			require('view/contenedor.phtml');
		}else{
			require('view/formularioAcceso.phtml');
		}
		?>
		<div id='pie'>
		</div>
	</div>
</body>
</html>