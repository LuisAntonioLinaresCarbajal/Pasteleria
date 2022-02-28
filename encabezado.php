
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras con PHP y MySQL - By Parzibyte</title>
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <!--icono de la pagina-->
    <link rel="shortcut icon" href="img/gato.png" type="image/x-icon">
    <!--etiqueta meta para que acepte simbolos extraños-->
    <meta charset="UTF-8">
    <!--nombre del sitio web para mostrar al comparir url-->
    <meta name="title" content="Pasteleria El Gato Boris.">
    <!--descripcion del sitio-->
    <meta name="description" content="Hola Bienvenido a Pastelería El Gato Boris, empresa mexicana con mas de 15 años
    de experiencia elaborando los pasteles mas deliciosos del mundo.">
    <!--imagen miniatura de la pagina-->
    <meta property="og:image" content="">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <!--miniatura de la pagina-->
    <link rel="image_src" href="">
</head>

<body>

    <nav class="navbar is-warning" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <img alt="" src="img/gato.png" style="max-height: 80px"> <h1>Pasteleria El Gato Boris</h1> 
            </a>
            <button class="navbar-burger is-warning button" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </button>
        </div>
        <div class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="index.html">Inicio</a>
                <a class="navbar-item" href="productos.php">Productos</a>
                <a class="navbar-item" href="tienda.php">Tienda</a>
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="ver_carrito.php" class="button is-success">
                            <strong>Ver carrito <?php
                                                include_once "funciones.php";
                                                $conteo = count(obtenerIdsDeProductosEnCarrito());
                                                if ($conteo > 0) {
                                                    printf("(%d)", $conteo);
                                                }
                                                ?>&nbsp;<i class="fa fa-shopping-cart"></i></strong>
                        </a>
                    </div>
                </div>
                <div class="navbar-item">
                    <div class="buttons">
                        <a target="_blank" rel="noreferrer" href="https://luisantoniolinarescarbajal.github.io/TECHMEXElComfortdelingeniero/" class="button is-primary" target="_blank" rel="nofollow noopener">
                            <strong>Soporte y ayuda</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", () => {
            const boton = document.querySelector(".navbar-burger");
            const menu = document.querySelector(".navbar-menu");
            boton.onclick = () => {
                menu.classList.toggle("is-active");
                boton.classList.toggle("is-active");
            };
        });
    </script>
    <section class="section">