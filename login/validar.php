<?php
require 'conexion.php';
session_start();

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

//$consulta = "SELECT  COUNT(*) as contar from user where  email = '".$usuario."' AND password='".$pass."'";

$consulta = 'SELECT id_usuario,nombre_usuario,email, password from user where email="'.$usuario.'" AND password= "'.$pass.'"';

$resultado = mysqli_query($conexion,$consulta);

//$array = mysqli_fetch_array($resultado);

//if($array['contar'] > 0){
if(mysqli_num_rows($resultado) == 1){
	/*$_SESSION['username'] = $usuario;
	header("location: ./home.php");
*/
	$datos = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
	$_SESSION['usuario_id']= $datos['id_usuario'];
	$_SESSION['usuario_nombre'] = $datos['nombre_usuario'];
	$_SESSION['usuario_email'] = $datos['email'];

	header("location: ./home.php");
	}
else{
	echo '<script>alert("You have entered Incorrect password");</script>';
	session_destroy();
	echo '<script> window.location="./index.html";</script>';
	
}

?>