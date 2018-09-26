<?php
	include_once '../clase/conexion.php';
	$usuario = $_POST['nombre'];
	$contrasenha = $_POST['contrasenha'];
	$contrasenha_md5  = md5($contrasenha);
	$db = "Empresa";
	$query = "select id,nombre,contrasenha as pass from usuario where nombre = \"$usuario\";";
	//echo $query;
	$conexion = new Conection('localhost',"root","",$db);
	$result = $conexion->verificar_usuario($query,$contrasenha_md5);
	
?>