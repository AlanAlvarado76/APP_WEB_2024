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
            <li><a href="mostrar_articulos.php">Ver Articulos</a></li>
            <li><a href="mostrar_categorias.php">Ver Categorias</a></li>
            <li><a href="cerrar_sesion.php">Cerrar sesión</a></li>
        </ul>
    </nav>
    <section id="content">
        <div class="box">
            <h1>Mision</h1>
            <hr>
            <p>Mi propósito es diseñar y desarrollar aplicaciones web confiables, funcionales y seguras utilizando PHP,
                orientadas a ofrecer soluciones tecnológicas avanzadas que potencien la experiencia del usuario y
                optimicen su rendimiento. A través de un enfoque constante en la mejora continua y la adopción de
                prácticas de programación de alto estándar, aspiro a construir herramientas digitales accesibles y
                efectivas que resuelvan desafíos cotidianos, promoviendo la eficiencia y simplificando los procesos en
                distintos entornos.</p>
        </div>
    </section>
    <footer>
        <p>PHP con Alan &copy; 2024 | Visitado el: 01/10/24</p>
    </footer>
</body>

</html>