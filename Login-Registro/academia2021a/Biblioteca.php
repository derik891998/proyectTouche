<?php
function CabeceraPagina()
{
echo "<center><h2>Prototipo de Sistema Académico </h2></center> <hr>";
}
function PiePagina()
{
echo "<center> <hr>
<p><font size='2'> Av. Pinto / Av. Bolognesi s/n <br>
Cel: 978541388 E-mail: <a href='mailto:jonyec@gmail.com'>jonyec@gmail.com</a><br>
Siga@Libre: Gestion Académica - Software Libre<br></font></p>
</center>";
}
function FechaSistema()
{
$Fecha=date("dd/mm/yyyy");
echo $Fecha;
}
function CuerpoHTML()
{
echo "<body text=white bgcolor=006699 link=yellow vlink=yellow alink=red>";
}
function CuerpoHTMLMENSAJE()
{
echo "<body text=white bgcolor=006699 link=yellow vlink=yellow alink=red onload=avisar()>";
}
?>