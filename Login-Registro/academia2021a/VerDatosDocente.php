<HTML>
<?php
	include("Biblioteca.php");
	include("conexion.php");
	$doc = $_GET[cod];
	$query = "SELECT * FROM profesor WHERE Cod_profesor= '$doc'" ;
	$result = mysqli_query($conexion,$query);
	$myrow = mysqli_fetch_array($result);
	CabeceraPagina();
?>
<div align="center"><center>
<TABLE border="0" cellpadding="1" bgcolor='#FFFFCC'>
<tr>
<td><strong><big>Codigo Est.: </big></strong></td>
<td><?php echo "<big>".$myrow[0]."</big>" ?> </td>
</tr>
<tr>
<td align="right">Nombre :</td>
<td><?php echo " ".$myrow[2] ?> </td>
</tr>
<tr>
<td align="right">Apellido :</td>
<td> <?php echo " ".$myrow[1] ?> </td>
</tr>
<tr>
<td align="right">Sexo :</td>
<td> <?php echo " ".$myrow[3] ?> </td>
</tr>
<tr>
<td align="right">Fecha Nacim.: </td>
<td> <?php echo " ".$myrow[4] ?></td>
</tr>
<tr>
<td align="right">Telefono :</td>
<td><?php echo $myrow[7] ?> </td>
</tr>
<tr>

	<td align="right">Direccion :</td>
<td><?php echo $myrow[8] ?> </td>
</tr>


<tr>
	<td align="right">Foto :</td>
	<td>
		<?php		
			 $foto = $myrow[10];
			
			 echo "<img src='$foto' name='foto' alt='Foto docente' align=center />";		
		?>
	</td>
</tr>





<tr>
<td align="right">Foto :</td>
<td>
<?php
$sql = "SELECT * FROM fotos WHERE cod_profesor=".$doc;
$result1 = mysqli_query($conexion,$sql);
if($row = mysqli_fetch_array($result1))
{
$foto = $row[1];
echo "<img src=$foto name='foto' border='0' align=center>";
}else {
echo "No hay foto disponible";
};
?>
</td>
</tr>
</TABLE>
<center>
<FORM>
<INPUT type="button" onclick="history.go(-1)" value="Volver" name="B2">
</FORM>
</center>
<?php