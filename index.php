<!DOCTYPE html>
<?
require 'config.php';
?>
<html land ='es'>
<head>
	<title></title>
	<link rel='stylesheet' href='css/stylebasico.css'>
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