<?php
// inicia sesión
session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Inicia Sesi&oacute;n</title>

</head>

<body>
<form method="POST" action="inicio.php">

<legend>LOGIN</legend>
<label id="lblcodigo">C&oacute;digo</label><br/>
<input type="text" name="codigo" id="txtcodigo" size="20" maxlength="10" required><br/>
<label id="lblcontraseña">Contrase&ntilde;a</label><br/>
<input type="password" name="contra" id="pass" size="20" maxlength="10" required><br/>
<input type="submit" name="btnenviar" value="ENVIAR" required>

</form>
</body>
</html>