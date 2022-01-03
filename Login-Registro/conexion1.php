<?php

	$host_db = "localhost";
	$user_db = "root";
	$pass_db = "12345678";
	$db_name = "restaurante";

	
$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
if ($conexion->connect_error)
{
die("La conexion falló: " . $conexion->connect_error);
}
?>



