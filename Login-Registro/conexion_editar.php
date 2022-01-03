<?php
$dbhost='localhost';
$dbusername='root';
$dbuserpass='12345678';
$dbname='instituto1';
$conexion=mysqli_connect($dbhost, $dbusername, $dbuserpass,$dbname);
if(!$conexion)
{
echo "Error: NO se pudo conectar a la Base de datos";
}
?>