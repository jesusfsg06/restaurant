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
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all">
    <script type="text/javascript">
        function validar(){
            var name= document.getElementById("name");
            var ingredient =document.getElementById("ingredient");
            var preparation =document.getElementById("preparation");

            if(name.value==""){
                alert("Llenar campo nombre");
                name.focus();
                return false;

            }
            if(ingredient.value==""){
                alert("Llenar campo de Ingredientes");
                ingredient.focus();
                return false;

            }
            if(preparation.value==""){
                alert("Llenar campo Preparacion");
                preparation.focus();
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
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
			<article id="content" style="margin-top:40px">
				<div class="wrap">
					<div class="box" style="width: 482px; height: 440px;margin-left: 246px;">
						<div>
							<h2 class="letter_spacing">Formulario de <span>Recetas</span></h2>
                            <form id="ContactForm" action="recetasf.php" method="post" enctype="multipart/form-data" onsubmit=" return validar();">
								<thead>
                                    <tr>
                                        <th></th>
                                    </tr>
								</thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <label>Nombre: </label>
                                            <input type="text" name="name" id="name" >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Ingredientes: </label>
                                            <textarea name="ingredient" id="ingredient"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>Preparaci&oacute;n: </span>
                                            <textarea id="preparation" name="preparation" cols="1" rows="1"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input id="send" class="send" type="submit" value="Enviar" style="width:65px;"  >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input id="clear" type="reset" name="limpiar" value="Borrar datos del formulario" style="width: 171px;"/>
                                        </td>
                                    </tr>
                                </tbody>
							</form>
						</div>
					</div>
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