<!DOCTYPE html>
<html>
 <head>  
<title>Ver</title>
 </head>
 <body>    
 <h1>Base de Datos	</h1> 
<p>
<a href="agregar.php">
Agregar Registro
</a>
</p>
 <p> 
<form method="post" action="inicio.php">
<input type="submit" value="Volver" />
</form>      
 </p>
 
<table style="margin:-10.5% 0;" border ="1">
 <?php
 $conexion = mysql_connect("localhost","root","");
 mysql_select_db("directorio");
 $consulta = "SELECT * FROM contacto";
 $ejecutar_consulta = mysql_query($consulta,$conexion);
 
 echo "<tr> <th>ID</th>
            <th>NOMBRE</th>
			
			<th>TELEFONO</th>
			
			<th>DOMICILIO</th>
			
			<th>OPCIONES</th> 
 <tr>";
while ($registro = mysql_fetch_array($ejecutar_consulta))
 {   
 echo "<tr>";
	echo "<td>".$registro["id"]." </td> ";
	echo "<td>".$registro["nombre"]." </td>  ";
	//echo "<td>".$registro["apellido"]." </td> ";
	echo "<td>".$registro["telefono"]." </td> ";
	//echo "<td>".$registro["celular"]." </td> ";
	echo "<td>".$registro["domicilio"]." </td> ";
	//echo "<td>".$registro["email"]." </td> ";
	echo '<td>
			<a href="ver.php?id='.$registro["id"].'" >Ver</a>
			<a href="editar.php?id='.$registro["id"].'" >Editar</a>
			<a href="borrar.php?id='.$registro["id"].'" >Eliminar</a>
	       </td>';	  
	echo "<br/ >";
 echo "</tr>";
 }
 ?>
 <!-- Cerramos tabla -->
 </table>

 </body>                                                                 
 </html>