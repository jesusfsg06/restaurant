
<!DOCTYPE html>
    <html>
    <head>
        <title>Restaurante Criollo</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css" type="text/css">

        <script type="text/javascript">
            function validar(){
                var nombre= document.getElementById("nombre");
                var apellido =document.getElementById("apellido");
                var telefono =document.getElementById("telefono");
                var mail =document.getElementById("mail");
                var usuario =document.getElementById("usuario");
                var pass =document.getElementById("pass");
                var rpass =document.getElementById("cpass");

                if(nombre.value==""){
                    alert("Llenar campo Nombre");
                    nombre.focus();
                    return false;
                }
                if(apellido.value==""){
                    alert("Llenar campo Apellido");
                    apellido.focus();
                    return false;
                }
                if(telefono.value==""){
                    alert("Llenar campo Mensaje");
                    telefono.focus();
                    return false;
                }
                if(mail.value==""){
                    alert("Llenar campo Mail");
                    mail.focus();
                    return false;
                }
                if(usuario.value==""){
                    alert("Llenar campo Usuario");
                    usuario.focus();
                    return false;
                }
                if(pass.value==""){
                    alert("Llenar campo Contrasena");
                    pass.focus();
                    return false;
                }
                if(rpass.value==""){
                    alert("Llenar campo de confirmacion de contrasena");
                    rpass.focus();
                    return false;
                }
                if(pass.value !== rpass.value){
                    alert ("Las contrasenas no coinciden");
                    pass.focus();
                    return false;
                }
                return true;
            }
        </script>
    </head>
<body>
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
			<article id="content" style="margin-top:17px; padding-bottom: 49px;">
				<div class="wrap">
					<div class="box" style="width: 482px; margin-left: 246px;height: auto;">
						<div>
							<h2 class="letter_spacing">Agregar Nuevo <span>Usuario</span></h2>
                            <form id="contactform" action="usuario.php" method="post" style="padding-left: 67px; " enctype="multipart/form-data" onsubmit="return validar();">
                                <tbody>
                                    <tr>
                                        <td>
                                            <label>Nombre: </label>
                                            <input type="text" name="nombre" id="nombre" >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Apellido: </label>
                                            <input type="text" name="apellido" id="apellido" >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Direcci&oacute;n: </label>
                                            <input type="text" name="direccion" id="direccion" >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Telefono: </label>
                                            <input type="text"  name="telefono" id="telefono"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>Mail</span>
                                            <input type="text" id="mail" name="mail" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>Usuario</span>
                                            <input type="text" id="usuario" name="usuario" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>Contrasena:</span>
                                            <input type="password" id="pass" name="pass" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>Confirmar Contrasena:</span>
                                            <input type="password" id="cpass" name="cpass" />
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input id="send" class="send" type="submit" value="Enviar" style="width:65px;margin-top: 23px;"  >
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