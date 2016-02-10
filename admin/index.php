<!DOCTYPE html>
<html>
<head>
    <title>Restaurante Criollo</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="all">
    <script type="text/javascript">
        function validar(){
            var name= document.getElementById("name");
            var mail =document.getElementById("mail");
            var mensaje =document.getElementById("mensaje");

            if(name.value==""){
                alert("llenar campo nombre");
                name.focus();
                return false;

            }
            if(mail.value==""){
                alert("llenar campo e-mail");
                mail.focus();
                return false;

            }
            if(mensaje.value==""){
                alert("llenar campo mensaje");
                mensaje.focus();
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
                <h1><a href="../index.html">Restaurante Criollo</a></h1>
                <nav>
                    <ul id="top_nav">
                        <li><a href="../index.html"><img src="../imagenes/icon_1.png" alt=""></a></li>
                        <li><a href="index.php"><img src="../imagenes/icon_2.png" alt=""></a></li>
                        <li class="end"><a href="../Contacts.html"><img src="../imagenes/icon_3.png" alt=""></a></li>
                    </ul>
                </nav>
                <nav>
                    <ul id="menu">
                        <li class="active"><a href="../index.html">Restaurante</a></li>
                        <li><a href="../cocina.html">Cocina</a></li>
                        <li><a href="../vinos.html">Vinos</a></li>
                        <li><a href="../listarecetasu.php">Libro de Recetas</a></li>
                        <li><a href="../Contacts.html">Cont&aacute;ctos</a></li>
                    </ul>
                </nav>
            </header>
            <article id="content" style="margin-top:65px">
                <div class="wrap">
                    <div class="box" style="width: 352px; margin:auto; height: 255px;">
                        <div>
                            <h2 class="letter_spacing">Iniciar Sesi&oacute;n</h2>
                            <form id="ContactForm" action="registro.php" method="post" enctype="multipart/form-data" onsubmit=" return validar();">
                                <thead>
                                <tr>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <label>Usuario: </label>
                                        <input type="text" name="usuario" id="usuario" >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Clave: </label>
                                        <input type="password"  name="contrasena" id="contrasena"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input id="send" class="send" type="submit" value="Iniciar Sesi&oacute;n" style="width:94px; margin-top: 32px"  >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><a href="regusu.php">No Estas Registrado?</a> </p>
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