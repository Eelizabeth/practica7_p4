<?php
// inicia sesión
session_start();

?>
<?php
$codigo = $_POST['codigo'];
$contra = $_POST['contra'];

if ($codigo == "100" && $contra == "udg" || $codigo =="110" && $contra=="tonala" || $codigo=="1" && $contra=="root") {

$_SESSION['codigo']= $codigo;
header("Location:ver_bd.php");
# code...
} else {
header("Location:sesion.php");

# code...
}
?>