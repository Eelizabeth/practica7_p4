<html>

<body>
<form id="form1" name="form1" method="post">
<?php
//Conectarse y seleccionar base de datos
$link = mysql_connect('localhost', 'root');
if (!$link) {
die('Could not connect: ' . mysql_error());
}
echo 'REGISTRO AGREGADO';

$db_selected = mysql_select_db('directorio', $link);
if (!$db_selected) {
die ('Cant use directorio : ' . mysql_error());
}
// Tomar los campos provenientes del Formulario
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];

$domicilio = $_POST['domicilio'];


// Insertar campos en la Base de Datos
$que = "INSERT INTO contacto (nombre, telefono,  domicilio) ";
$que.= "VALUES ('".$nombre."','".$telefono."','".$domicilio."') ";
$res = mysql_query($que, $link) or die(mysql_error());

// Cerrar conexión a la Base de Datos
mysql_close($link);

?>
<label>
<input type="submit" name="button" id="button" value="Volver" onclick="this.form.action = 'ver_bd.php'" />
</label>
</form>
</body>

</html>