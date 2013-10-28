<html>
<head>
<title>AGREGAR</title>


</head>
<?php

?>
<body>
<fieldset>
<legend>NUEVO CONTACTO</legend><br/><br/>
<form method="post" action="ver.php">

<label id="lblNombre">NOMBRE</label><br/>
<input type="text" id="txtNombre" name="nombre" value="" size=25 required ><br/><br/>

<label id="lblTelefono">T&Eacute;LEFONO</label><br/>
<input type="text" id="txtTelefono" name="telefono" value="" size=25 required><br/><br/>

<label id="lblDomicilio">DOMICILIO</label><br/>
<input type="text" id="txtDomicilio" name="domicilio" value="" size=25 required><br/><br/><br/>

<label>
<input type="submit" name="guardar" id="guardar" value="Guardar" onclick="this.form.action = 'agre.php'" />
</label>

</form>
</fieldset>
</body>
</html>