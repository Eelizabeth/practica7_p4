<html>

<body>
<form id="form1" name="form1" method="post">
<?php
//Conectarse y seleccionar base de datos

$link = mysql_connect('localhost', 'root');
if (!$link) {
die('Could not connect: ' . mysql_error());
}
echo 'Registro Modificado';

$db_selected = mysql_select_db('directorio', $link);
if (!$db_selected) {
die ('Cant use directorio : ' . mysql_error());
}

//include ("conexion.php");
// Tomar los campos provenientes del Formulario
//$id = $_POST['id'];
if(isset ( $_POST['id']) ){
$id = $_POST['id'];
$nombre = $_POST['nombre'];

$telefono = $_POST['telefono'];

$domicilio = $_POST['domicilio'];


// Modificar campos en la Base de Datos
$que = "UPDATE contacto SET nombre='$nombre', telefono='$telefono', domicilio='$domicilio' WHERE id='$id' ";
$res = mysql_query($que, $link) or die(mysql_error());
//$res = mysql_query($que,$conexion);
// Cerrar conexión a la Base de Datos
}
mysql_close($link);

?>
<label>
<input type="submit" name="button" id="button" value="Volver" onclick="this.form.action = 'ver_bd.php'" />
</label>
</form>
</body>

</html>