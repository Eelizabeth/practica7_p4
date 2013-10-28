<?php
   include ("conexion.php");
 
     if(isset ( $_POST['id']) ){
		 $id = $_POST['id'];
		 $nom = $_POST['nombre'];
		 $apellido = $_POST['apellido'];
		 $tel = $_POST['telefono'];
		 $cel = $_POST['celular'];
		 $dom = $_POST['domicilio'];
		 $email = $_POST['email'];
		 
		 $SQL = "UPDATE contacto  SET 
		 
		 nombre = '$nom',
		 apellido = '$apellido',
		 telefono = '$tel',
		 celular = '$cel'
		 domicilio = '$dom',
		 email = '$email',
		 WHERE  id = '$id'";
		 
		 $ejecutar_consulta = mysql_query($SQL,$conexion);
		 echo "Registro Modificado";
    }else{

     echo "tines q llenar todos los campos";

}
  
 ?>
 <a href="ver_bd.php"><h4>ACEPTAR</h4></a>

