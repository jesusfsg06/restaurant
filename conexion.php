<?php
$name= $_POST['nombre'];
$mail= $_POST['mail'];
$mensaje= $_POST['mensaje'];
$puerto= "localhost";
$usuario= "root";
$contrasena= "";
$conexion= mysql_connect($puerto,$usuario,$contrasena);
mysql_select_db("restaurante",$conexion);
$insertar= "insert into contact(name, mail , mensaje) values ('$name','$mail','$mensaje')";
mysql_query($insertar);
echo("Se ha enviado corectamente su mensaje")
?>
<p><a href="Contacts.html">Regresar a Contactos</a> </p>
<p><a href="index.html">Regresar al Menu Principal</a> </p>