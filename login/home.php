<?php
session_start();
 //$usuario = $_SESSION['username'];
$usuario_id = $_SESSION['usuario_id'];
$usuario_nombre = $_SESSION['usuario_nombre'];
$usuario_email = $_SESSION['usuario_email'];
   
if (!isset($_SESSION ['usuario_id'])){
	header("location: ./logout.php");
}
else{
echo "<h1>Bienvenido $usuario_email</h1>";
echo "<a href='./logout.php'>salir</a>";
}
 
?>
<!--<!DOCTYPE html>
<html>
<head>
	<title>Sección segura</title>
</head>
<body>

<h1>Bienvenido $usuario</h1>
<a href=".logout.php">Logout</a>
</body>
</html>-->