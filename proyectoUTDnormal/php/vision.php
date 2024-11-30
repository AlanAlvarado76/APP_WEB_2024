<?php
session_start();
if (isset($_SESSION['user'])) {

} else {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Inicio|PHP Proyecto UTD
    </title>
    <link rel="stylesheet" href="../css/estilos.css" type="text/css">
</head>

<body>
    <header>
        <div id="logotipo">
            <img src="../img/logophp.png" alt="Imagen Django" title="Django">
            <h1>PHP Proyecto Web</h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="acercade.php">Acerca de</a></li>
            <li><a href="mision.php">Mision</a></li>
            <li><a href="vision.php">Vision</a></li>
            <li><a href="mostrar_articulos.php">Ver articulos</a></li>
            <li><a href="mostrar_categorias.php">Ver categorias</a></li>
            <li><a href="cerrar_sesion.php">Cerrar sesión</a></li>
        </ul>
    </nav>
    <section id="content">
        <div class="box">
            <h1>Vision</h1>
            <hr>
            <p>Ser un referente en el desarrollo de aplicaciones web innovadoras, accesibles y de alto rendimiento, que
                transformen la manera en que las personas y empresas interactúan con la tecnología. Aspiramos a crear
                soluciones digitales que impulsen la productividad, fomenten la conectividad global y promuevan
                experiencias de usuario excepcionales. A través de la adopción continua de nuevas tecnologías y
                metodologías ágiles, buscamos anticiparnos a las necesidades del mercado y liderar la evolución hacia un
                futuro digital más eficiente, seguro y sostenible.</p>
        </div>
    </section>
    <footer>
        <p> PHP con Alan &copy; 2024 | Visitado el: 01/10/24</p>
    </footer>
</body>

</html>