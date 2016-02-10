<?php
$name= $_POST['name'];
$ingredient= $_POST['ingredient'];
$preparation= $_POST['preparation'];


$puerto= "localhost";
$usuario= "root";
$contrasena= "";
$conexion= mysql_connect($puerto,$usuario,$contrasena);
mysql_select_db("restaurante",$conexion);
$insertar= "insert into recetas (name, ingredient , preparation) values ('$name','$ingredient','$preparation')";
mysql_query($insertar);
echo("Su Receta se he procesada Correctamente")
?>
<p><a href="contenido.php">Regresar al Menu Principal</a> </p>