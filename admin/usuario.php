<?php
$name= $_POST['nombre'];
$apellido= $_POST['apellido'];
$direccion= $_POST['direccion'];
$telefono= $_POST['telefono'];
$mail= $_POST['mail'];
$user= $_POST['usuario'];
$pass= $_POST['pass'];

$puerto= "localhost";
$usuario= "root";
$contrasena= "";
$conexion= mysql_connect($puerto,$usuario,$contrasena);
mysql_select_db("restaurante",$conexion);
$insertar= "insert into usuario(nombre, apellido , direccion, telefono, mail, usuario, contrasena) values ('$name','$apellido','$direccion','$telefono','$mail','$user','$pass')";
mysql_query($insertar);
echo("Se ha enviado corectamente su mensaje")
?>
<p><a href="user.php">Agregar otro usuario?</a> </p>
<p><a href="index.php">Loguearte</a> </p>