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
                        <li><a href="../index.html"><img src="../imagenes/icon_1.png" alt=""></a></li>

                        <li class="end"><a href="../Contacts.html"><img src="../imagenes/icon_3.png" alt=""></a></li>
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
				<div class="wrap">
					<section class="cols1">
						<div class="box2">
							<div>
								<h2 class="letter_spacing">Vinos</h2>
								<figure><img src="../imagenes/page3_img1.jpg" alt="" ></figure>
								<p class="pad_bot1">El vino (del latín vinum) es una bebida obtenida de la uva (especie Vitis vinifera) mediante la fermentación alcohólica de su mosto o zumo.</p>
								<a href="#" class="button1">Leer mas...</a>
							</div>
						</div>
					</section>
					<section class="cols1 pad_left1">
						<div class="box2">
							<div>
								<h2>Preparacion de<span> Vinos</span></h2>
								<figure><img src="../imagenes/page3_img2.jpg" alt="" ></figure>
								<p class="">Fermentación alcohólica del jugo de la uva fresca. Los vinos de mesa se dividen básicamente en tintos, blancos y rosados. Dentro de los primeros existen algunos de poco color a los que se denomina claretes.</p>
                                <a href="#" class="button1">Reservar alguno?</a>
							</div>
						</div>
					</section>
					<section class="cols1 pad_left1">
						<div class="box2">
							<div>
								<h2>Vinos <span>Exclusivos</span></h2>
								<figure><img src="../imagenes/page3_img3.jpg" alt="" ></figure>
                                <div class="cols pad_left1" style="padding-bottom: 30px">
                                    <div class="col2">
                                        <ul class="price">
                                            <li><a href="#">Ramón Bilbao Reserva</a></li>
                                            <li><a href="#">Viñas del Vero Merlot Colección</a></li>
                                            <li><a href="#">Marqués de Griñon Reserva</a></li>
                                            <li><a href="#">Etchart Mendoza</a></li>
                                            <li><a href="#">Flichman Tanguero</a></li>
                                            <li><a href="#">Torre de Cálago</a></li>
                                            <li><a href="#">Pazo de Barrantes</a></li>

                                        </ul>
                                    </div>
                                </div>
								<a href="#" class="button1">Leer mas...</a>
							</div>
						</div>
					</section>
				</div>
			</article>
		</div>
	</div>
</div>
<div class="body2">
	<div class="main">
		<article id="content2">
			<div class="wrapper">
				<section class="pad_left1">
					<div class="wrapper">
						<div class="cols">
							<h2>Venta de Vinos</h2>
						</div>
						<div class="col3 pad_left1">
							<h2>Nuestra Lista de Vinos</h2>
						</div>
					</div>
					<div class="line1">
						<div class="wrapper line2">
							<div class="cols">
								<div class="wrapper pad_bot1">
									<figure class="pad_bot1"><img src="../imagenes/page3_img4.jpg" alt=""></figure>
									Todas Nuestras Ventas se haran en dolares o su equivalente en pesos Dominicanos.
								</div>
							</div>
							<div class="cols pad_left1">
								<div class="col2">
									<ul class="price">
										<li><a href="#">Castillo de Javier Rosado </a><span>$15</span></li>
										<li><a href="#">Finca Antigua Tempranillo 2004 </a><span>$23</span></li>
										<li><a href="#">Dominio de Tares Godello 2005</a><span>$57</span></li>
										<li><a href="#">Numanthia 2005 </a><span>$47</span></li>
										<li><a href="#">Anima Negra Callet 2003 - An Negra </a><span>$87</span></li>
										<li><a href="#">Viña Sastre Pago de Santa Cruz 2003 - Ribera del Duero </a><span>$12</span></li>
										<li><a href="#">Alion 1998 - Ribera del Duero D.O. </a><span>$33</span></li>
										<li><a href="#">Marqués de Murrieta Blanco Reserva 2000 - Rioja </a><span>$78</span></li>
									</ul>
								</div>
							</div>
							<div class="col2 pad_left1">
								<ul class="price">
									<li><a href="#">Nicolás Catena Zapata </a><span>$15</span></li>
									<li><a href="#">Yllera Tinto Reserva Gran Selección </a><span>$23</span></li>
									<li><a href="#">Fuentespina Reserva </a><span>$57</span></li>
									<li><a href="#">Etchart privado </a><span>$47</span></li>
									<li><a href="#">Lavernoya Merlot Rosado </a><span>$87</span></li>
									<li><a href="#">Martinez Lacuesta 2006 </a><span>$12</span></li>
									<li><a href="#">PX Reserva 1979 </a><span>$33</span></li>
									<li><a href="#">Dominio de Tares Bembibre 2004 </a><span>$78</span></li>
								</ul>
							</div>
						</div>
					</div>
				</section>
			</div>
		</article>
<!-- / content -->
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