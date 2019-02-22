<html>
    <head>
        <title>LINFOWEB - FORMUALRIO DE CONTACTO</title>
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
                        <a class="optionMenu" href="./diagramacionInformacion.html">DIAGRAMACION DE INFORMACIÓN</a>
                        <a class="optionMenu" href="./manejoDeInformacion.html">CMI</a>
                        <a class="optionMenu" href="./pensamientoComputacional.html">PENSAMIENTO COMPUTACIONAL</a>
                        <a class="optionMenu" href="./lineasTiempo.html">LINEAS DE TIEMPO</a>
                        <a class="optionMenu" href="./contacto.html">CONTACTO</a>
                        <a class="optionMenu" href="./usuarios.php">INFO USUARIOS</a>
                    </ul>
                </td>
            </tr>
        </table>
        <!-- END MENU --
        <!------------------------------------------------------------------------------------------------------------------->
        <!-- CONTENT -->
        <table class="contenidoLargoAnchoMax" border="0">
            <tr>
                <td class="rowPrincipalTittle" align="center">
                    <font class="fontPrincipalTittle">INFORMACION DE LOS USUARIOS</font>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <table border="1">
                        <tr>
                            <td class="columnaTablaUsuarios" align="center">ID</td>
                            <td class="columnaTablaUsuarios" align="center">NOMBRE</td>
                            <td class="columnaTablaUsuarios" align="center">EMPRESA</td>
                            <td class="columnaTablaUsuarios" align="center">EMAIL</td>
                            <td class="columnaTablaUsuarios" align="center">MENSAJE</td>
                        </tr>
                        <?php
                        include("./../php/conexion.php");
                        $result = mysqli_query($link,"SELECT * from usuarios");
                        // información obtenida de: http://php.net/manual/es/mysqli-result.fetch-row.php
                        // while ($row = $result->fetch_row()) { en caso de error habilitar esta linea y comentar la siguiente
                        while ($row = mysqli_fetch_row($result)) {
                            echo '<tr>';
                            foreach($row as $clave) {
                                echo '<td class="columnaTablaUsuarios">' . $clave .'</td>';
                            }
                            echo '</tr>';
                        }
                        // $result->close(); en caso de error habilitar esta linea y comentar la siguiente
                        mysqli_free_result($result);
                        mysqli_close($link);
                        ?>
                    </table>
                </td>
            </tr>
            
            ?>
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