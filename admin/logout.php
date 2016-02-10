<?php
session_start();

session_destroy();
$_SESSION = array();
header("location:index.php");
?>

<html>
<head>
    <title>webpage title</title>
</head>
<body>

</body>
</html>
