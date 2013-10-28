
 <?php
include ("conexion.php");

if(isset ($_GET['id'])){
	$id = $_GET['id'];
	
	
	 $SQL = "DELETE FROM contacto WHERE id = '".$id."'";

 $ejecutar_consulta = mysql_query($SQL,$conexion);
 
	echo "datos eliminados";

    }
    ?>
<a href="ver_bd.php"><h4>ACEPTAR</h4></a>
 

