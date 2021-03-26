<?php
$host = "localhost";
$usuario = "Sty";
$password = "Wersdf195#";
$bd = "log";

 $conexion = mysqli_connect($host,$usuario,$password,$bd)
 ;
 if(!$conexion){
die('Erro de conexión:'.mysqli_connect_error());
exit();
 }
 else{
 	mysqli_query($conexion, "SET NAMES 'utf8'");

 }

?>