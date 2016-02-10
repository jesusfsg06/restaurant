<?php
session_start();
$_SESSION['logged']= $_SESSION['logged'];

if($_SESSION['logged']=='yes')
{
    echo 'Bienvenido '.$_SESSION['user'].'';
    echo "<button> <a href='logout.php'>Salir de la sesion</a></button>";
}
else{
    echo 'Usted no tiene permisos para Acceder a esta pagina, para poder acceder debe loguearse';
    echo "<script>setTimeout(function(){location = '../index.html';},5000);</script>";
    return false;
}
include_once('../conex.php');
$sql="SELECT *FROM recetas order by id";
$res=mysql_query($sql);
if($res)
{
?>
<!DOCTYPE html>
<html>
<head>
    <title>Restaurante Criollo</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>
<body id="page1">
<div class="body6">
    <div class="body1">
        <div class="main">
            <header>
                <h1><a style="text-decoration: none;" href="../index.html">Restaurante Criollo</a></h1>
                <nav>
                    <ul id="top_nav">
                        <li><a href="contenido.php"><img src="../imagenes/icon_1.png" alt=""></a></li>
                        <li class="end"><a href="Contacts.php"><img src="../imagenes/icon_3.png" alt=""></a></li>
                    </ul>
                </nav>
                <nav>
                    <ul id="menu1">
                        <li class="active"><a href="contenido.php">Restaurante</a></li>
                        <li><a href="cocina.php">Cocina</a></li>
                        <li><a href="vinos.php">Vinos</a></li>
                        <li><a href="listarecetas.php">Libro de Recetas</a></li>
                        <li><a href="Contacts.php">Cont&aacute;ctos</a></li>
                        <li><a href="user.php">Crear Usuarios</a></li>
                        <li><a href="recetas.php">Agregar Recetas</a></li>

                    </ul>
                </nav>
            </header>
            <article id="content" style="margin-top:32px">
                <div class="wrap">
                    <div class="box" style="height:auto;width: 482px; color:white;margin-left: 74px;">

                        <table>
                            <thead>

                            <tr style="text-align: center;">
                                <th style="padding-right: 35px;padding-left: 35px">Nombre</th>
                                <th style="padding-right: 100px;padding-left: 100px">Ingredientes</th>
                                <th style="padding-right: 150px; padding-left: 150px">Preparacion</th>

                            </tr>

                            </thead>
                           <tbody>
                                       <?php
                                        $n=0;
                                       while($reg= mysql_fetch_row($res)){
                                           $n++;
                                           ?>
                                 <tr>
                                       <td><?php echo $reg[1];?></td>
                                       <td><?php echo $reg[2];?></td>
                                       <td><?php echo $reg[3];?></td>
                                 </tr>
                                      <?php
                                       }
                                       ?>

                           </tbody>
                        </table>
                    </div>
                </div>
                </article>
        </div>
    </div>
    </body>
</html>
<?php
}
else{
echo "No Existen Registros";
}
?>


<div class="body3">
<div class="body4">
    <div class="main">
        <footer>
            <div class="wrapper">
                <section class="col1 pad_left1">
                    <ul>
                        <li>Numero de Telefono: <span>809-335-1044</span></li>
                        <li>Direccion: <span>Calle Central #28 Urb. Marlin Villa Faro</span></li>
                    </ul>
                </section>
            </div>
        </footer>
    </div>
</div>
</div>
</body>
</html>