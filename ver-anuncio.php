<?php
/**
 * Este archivo contiene la vista de un articulo en particular
 * junto con los datos del vendedor.
 * 
 * @package vistas
 * @name ver-anuncio.php
 * @author Jesús Díaz 
 * @copyright Agilecode
 */
?>
<!DOCTYPE HTML>
<html>
    <head lang="es">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Notiexpress - Compra y venta de articulos, nuevos y usados</title>
        <link rel="stylesheet" href="Css/estilos.css">
    </head>	
    <body>
        <!-- Contenedor principal -->
        <div id="wrapper">
            <!-- Cabecera -->
            <header>
                <div id="wrapper-logo">
                    <a href="index.php"><img src="Images/logo.jpg"/></a>
                </div>				
            </header>
            <!-- Cuerpo de la pagina -->
            <div id=container>
                <div id="row1">
                    <div id="containter-box">
                        <div id="title-box">Categorias</div>
                        <ul style="font-size: 12px;">
                            <li><a href="">Adultos</a></li>
                            <li><a href="">Animales y Mascotas</a></li>
                            <li><a href="">Arte y Antiguedades</a></li>
                            <li><a href="">Autos</a></li>
                            <li><a href="">Celulares</a></li>
                            <li><a href="">Cine</a></li>
                            <li><a href="">Fotografia</a></li>
                            <li><a href="">Inmuebles</a></li>
                            <li><a href="">Instrumentos</a></li>
                            <li><a href="">Indumentaria</a></li>
                            <li><a href="">Joyas</a></li>
                        </ul>                    
                    </div>
                    <div id="containter-box">
                        <div id="title-box">Consejos Notiexpress</div>
                        <div id="wrapper-council">
                            Busca el articulo que quieres vender,
                            compara con los demas vendendores y 
                            publica tu articluo a un precion competitivo.
                            No esperes mas, y vende eso que ya no necesitas
                            y consigue lo que quieres!
                        </div>
                    </div>
                </div>
                <div id="row2">
                    <?php
                    /**
                     * Aqui llamo al Snippet ver-anuncio.php que contiene
                     * el 'fragmento de vista' donde se muestra un articulo
                     * seleccionado. 
                     */
                    require_once __DIR__ . '/Snippet/Ver-anuncio/ver-anuncio.php';
                    ?>
                </div>
                <div id="row3">
                    <?php
                    /**
                     * Aqui llamo al Snippet verificarLogin.php que contiene
                     * el 'fragmento de vista' donde se verifica si el usuario esta logueado
                     * o no esta logueado. 
                     */
                    require_once __DIR__ . '/Snippet/Inicio/verificar-login.php';
                    ?>
                </div>
            </div>
            <!-- Pie de pagina -->
            <footer>
                <div id="copyleft">
                    &copy <?= date('Y') ?> Desarrollado por Jesus Diaz | <a href="http://www.agilecode.com.ar">Agilecode</a>.
                </div>
                <div id="menu-footer">
                    <ul>
                        <li><a href ="#">Inicio</a></li>
                        <li><a href ="#">Terminos</a></li>
                        <li><a href ="#">Privacidad</a></li>
                        <li><a href ="#">Acerca de nuestros anuncios</a></li>
                        <li><a href ="#">Desarrolladores</a></li>
                    </ul>
                </div>
            </footer>
        </div>	
    </body>
</html>