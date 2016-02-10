<?php

include_once('conex.php');
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
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body id="page1">
    <div class="body6">
        <div class="body1">
            <div class="main">
                <header>
                    <h1><a style="text-decoration: none;" href="../index.html">Restaurante Criollo</a></h1>
                    <nav>
                        <ul id="top_nav">
                            <li><a href="index.html"><img src="imagenes/icon_1.png" alt=""></a></li>
                            <li><a href="admin/index.php"><img src="imagenes/icon_2.png" alt=""></a></li>
                            <li class="end"><a href="Contacts.html"><img src="imagenes/icon_3.png" alt=""></a></li>
                        </ul>
                    </nav>
                    <nav>
                        <ul id="menu">
                            <li class="active"><a href="index.html">Restaurante</a></li>
                            <li><a href="cocina.html">Cocina</a></li>
                            <li><a href="vinos.html">Vinos</a></li>
                            <li><a href="listarecetasu.php">Libro de Recetas</a></li>
                            <li><a href="Contacts.html">Cont&aacute;ctos</a></li>
                        </ul>
                    </nav>
                </header>
                <article id="content" style="margin-top:32px">
                    <div class="wrap">
                        <div class="box" style="height:auto;width: 482px; color:black;margin-left: 74px;">

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
                                while($reg= mysql_fetch_array($res)){
                                    $n++;
                                    ?>
                                    <tr>
                                        <td><?php echo $reg['name'];?></td>
                                        <td><?php echo $reg['ingredient'];?></td>
                                        <td><?php echo $reg['preparation'];?></td>
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