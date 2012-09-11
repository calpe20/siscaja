<?
	session_start;
	include('controller/conexion.class.php');
	$con = new DBManager();
	$con->conectar();
?>