<html>
<head>
<title>MODIFICAR</title>

</head>
<?php
include ("conexion.php");

if(isset ($_GET['id'])){
	$id = $_GET['id'];
	$SQL = "SELECT * FROM contacto WHERE id = '".$id."'";
	$ejecutar_consulta = mysql_query($SQL,$conexion);
	$registro = mysql_fetch_array($ejecutar_consulta);
}
?>
<body>

<fieldset>
<form id="form1" name="form1" method="post">

<legend>Modificar Registro</legend><br/><br/>


<label id="lblId">ID </label><br/>
<input type="text" id="txtId" name="id" value="<?php echo $registro['id']; ?>" size=25 required><br/><br/>

<label id="lblNombre">NOMBRE</label><br/>
<input type="text" id="txtNombre" name="nombre" value="<?php echo $registro['nombre']; ?>" size=25 required><br/><br/>

<label id="lblApellido">APELLIDO</label><br/>
<input type="text" id="txtApellido" name="apellido" value="<?php echo $registro['apellido']; ?>" size=25 required ><br/><br/><br/>

<label id="lblTelefono">T&Eacute;LEFONO</label><br/>
<input type="text" id="txtTelefono" name="telefono" value="<?php echo $registro['telefono']; ?>" size=25 required><br/><br/>

<label id="lblCelular">CELULAR</label><br/>
<input type="text" id="txtCelular" name="celular" value="<?php echo $registro['celular']; ?>" size=25 required><br/><br/>

<label id="lblDomicilio">DOMICILIO</label><br/>
<input type="text" id="txtDomicilio" name="domicilio" value="<?php echo $registro['domicilio']; ?>" size=25 ><br/><br/><br/>

<label id="lblEmail">EMAIL</label><br/>
<input type="text" id="txtEmail" name="email" value="<?php echo $registro['domicilio']; ?>" size=25 required><br/><br/><br/>

<label>
<input type="submit" name="guardar" id="guardar" value="Guardar" onclick="this.form.action = 'mod.php'" />
</label>

</form>
</fieldset>
</body>
</html>