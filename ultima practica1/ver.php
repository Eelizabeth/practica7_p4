<html>
<body>
<form id="form1" name="form1" method="post">

<?php

include ("conexion.php");

if(isset ($_GET['id'])){
	$id = $_GET['id'];
	$SQL = "SELECT * FROM contacto WHERE id = '".$id."'";
	$ejecutar_consulta = mysql_query($SQL,$conexion);
	while ($registro = mysql_fetch_array($ejecutar_consulta))
	{ 
	echo "ID: ".$registro["id"]." </br> ";
	echo "Nombre: ".$registro["nombre"]." </br>  ";
	echo "Domicilio: ".$registro["domicilio"]." </br>  ";
	echo "Telefono:".$registro["telefono"]." </br ";
	  	  
	}
}
?>

</body>
<a href="ver_bd.php"><h4>VOLVER</h4></a>
</html>