<?php
include("./conexion.php");
$result = mysqli_query($link, "INSERT INTO usuarios (nombre, empresa, email, mensaje) VALUES ('{$_POST['nombre']}', '{$_POST['empresa']}', '{$_POST['email']}', '{$_POST['mensaje']}')");
mysqli_close($link);
?>
<html>
    <head>
        <title>LINFOWEB - NOMBREPAGINAACTUAL</title>
        <link rel="stylesheet" type="text/css" href="./../Styles/styles.css">
        <meta charset="utf-8">
    </head>
    <body>
        <!-- MENU -->
        <table class="menu" border="0">
            <tr>
                <td align="center">
                    <a href="http://www.udenar.edu.co/" target="blank">
                        <img src="./../Imgs/EscudoUdenarWhite.png" class="escudoUdenarMenu">
                    </a>
                </td>
                <td>
                    <a class="pageName" href="./../../index.html">LINFOWEB</a>
                </td>
                <td align="end">
                    <ul class="optionsMenu">
                        <a class="optionMenu" href="./../Pages/diagramacionInformacion.html">DIAGRAMACION DE INFORMACIÓN</a>
                        <a class="optionMenu" href="./../Pages/manejoDeInformacion.html">CMI</a>
                        <a class="optionMenu" href="./../Pages/pensamientoComputacional.html">PENSAMIENTO COMPUTACIONAL</a>
                        <a class="optionMenu" href="./../Pages/lineasTiempo.html">LINEAS DE TIEMPO</a>
                        <a class="optionMenu" href="./../Pages/contacto.html">CONTACTO</a>
                        <a class="optionMenu" href="./../Pages/usuarios.php">INFO USUARIOS</a>
                    </ul>
                </td>
            </tr>
        </table>
        <!-- END MENU -->
        <!------------------------------------------------------------------------------------------------------------------->
        <!-- CONTENT -->
        <table class="contenidoLargoAnchoMax" border="0">
            <tr>
                <td class="rowPrincipalTittle" align="center">
                    <font class="fontPrincipalTittle">TU MENSAJE FUE ENVIADO CORRECTAMENTE!</font>
                </td>
            </tr>
        </table>
        <!-- END CONTENT -->
        <!------------------------------------------------------------------------------------------------------------------->
        <!-- FOOTER -->
        <table class="siteFooter">
            <tr>
                <td>
                    <p class="footerContent" align="center">Esta sitio web fue desarrollado por Andres Angulo, Julieth Benavides, Leyder Gomez, Juan Carlos Gonzalez</p>
                </td>
            </tr>
        </table>
        <!-- END FOOTER -->
    </body>
</html>