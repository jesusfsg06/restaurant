<?php
session_start();
if($_SESSION['logged']=='yes')
{
    echo 'Bienvenido '.$_SESSION['user'].'';
    echo "<button> <a href='logout.php'>Salir de la sesi&oacute;n</a> </button>";
}
else{
        echo 'Usted no tiene permisos para Acceder a esta pagina, para poder acceder debe loguearse';
        echo "<script>setTimeout(function(){location = '../index.html';},5000);</script>";

        return false;
}
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
				<article id="content">
					<div class="sliderfull">
						<div class="slider">
							<ul class="item">
								<li>
									<img src="../imagenes/img1.jpg" alt="" style="margin-left: 420px;">
									<div class="banner">
										<strong>Mang&uacute;</strong>
										<b>Plato del Dia</b>
										<p>
                                            <span>Nos atreveríamos a Decir que es el plato oficial dominicano<br>
											 Es un plato tradicional de desayuno, almuerzo o cena...</span>
										</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="wrap">
						<section class="cols">
							<div class="box">
								<div>
									<h2>Bienvenido</h2>
									<figure><img src="../imagenes/bienvenido.jpg" alt="" width="220px" height="102px"></figure>
									<p class="pad_bot1">Restaurante Criollo</a> aqui encontraras los mejores platos dominicanos, hecho con los mejores productos y con el mejor sazon.</p>
									<a href="#" class="button1">Leer mas...</a>
								</div>
							</div>
						</section>
						<section class="cols">
							<div class="box">
								<div>
									<h2>Acerca de nosotros</h2>
									<figure><img src="../imagenes/Nosotros.jpg" alt="" width="220px" height="102px" ></figure>
									<p class="pad_bot1">Somos un restaurante donde destacamos lo mejor de la gastronomia Dominicana y al mejor precio.</p>
								    </br>
                                    <a href="#" class="button1">Leer mas...</a>
								</div>
							</div>
						</section>
						<section class="cols " STYLE="padding-right: 0">
							<div class="box" >
								<div>
									<h2>Cont&aacute;ctanos</h2>
									<figure><img src="../imagenes/contacto.jpg" alt="" width="220px" height="102px"></figure>
                                    <p>Nos encontramos en la Calle Central #28, Urb. Marlin</p>
									<p>Nuestros n&uacute;meros son: 809-232-2534  829-434-3234</p>
								</div>
							</div>
						</section>
					</div>
				</article>
			</div>

	</div>
</div>

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