<?php

include ("conexion.php");

if(isset ($_GET['id'])){
	$id = $_GET['id'];
	$SQL = "SELECT * FROM contacto WHERE id = '".$id."'";
	$ejecutar_consulta = mysql_query($SQL,$conexion);
	$registro = mysql_fetch_array($ejecutar_consulta);
}
?>
	<form method="POST"  action="mod.php" >
	<input type="hidden" name="id" value = "<?php echo $registro['id']; ?>"/><br />
	<label id="lblNombre">NOMBRE</label><br/>
<input type="text" id="txtNombre" name="nombre" value="<?php echo $registro['nombre']; ?>" size=25 required><br/><br/>

<label id="lblTelefono">T&Eacute;LEFONO</label><br/>
<input type="text" id="txtTelefono" name="telefono" value="<?php echo $registro['telefono']; ?>" size=25 required><br/><br/>

<label id="lblDomicilio">DOMICILIO</label><br/>
<input type="text" id="txtDomicilio" name="domicilio" value="<?php echo $registro['domicilio']; ?>" size=25 ><br/><br/><br/>

	<input type="submit" name="enviar" value="GUARDAR">
	</form>
 
<a href="ver_db.php"><h4>Cancelar</h4></a>
