<?php
$conex=mysql_connect('localhost','root','') or die('error en la conexion');
$db=mysql_select_db('restaurante',$conex) or  die('error en la conexion a la base de datos');
?>