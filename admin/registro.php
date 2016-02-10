<?php
session_start();
require_once('funciones.php');

conectar('localhost','root','','restaurante');
$user =$_POST['usuario'];
$pass =$_POST['contrasena'];
$_SESSION['logged']='yes';
$query =@mysql_query('SELECT * from usuario WHERE usuario ="'.$user.'" and contrasena="'.$pass.'"');
if($existe= @mysql_fetch_object($query))
{
    $_SESSION['logged']='yes';
    $_SESSION['user']=$user;
    header("location: contenido.php");
}else{

    echo 'No Estas registrado';
    echo "<button><a href='../index.html'>Volver A inicio</a></button>";
}
?>