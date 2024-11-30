<?php
session_start();
if (isset($_SESSION['user'])) {

} else {
    header("Location: ../index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mostrar errores
    error_reporting(E_ALL ^ E_NOTICE);

    // Conexión a la BD
    include_once("conexion.php");

    // Datos del formulario
    $descripcion = $_POST['descripcion'];

    // Insertar en la base de datos
    $sql = "INSERT INTO `categorias` (`descripcion`) VALUES ('$descripcion');";

    $ejecutar_sql = $conexion->query($sql);

    if ($ejecutar_sql) {
        echo "<script>   
                alert('Categoría agregada correctamente.');
                window.location.href = 'mostrar_categorias.php'; // Redirige a la lista de categorías
              </script>";
    } else {
        echo "<script>   
                alert('No fue posible agregar la categoría, verifique por favor.');
              </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Categoría | PHP Proyecto UTD</title>
    <link rel="stylesheet" href="../css/estilos.css" type="text/css">
    <link rel="stylesheet" href="../css/registrar_categoria.css" type="text/css">
    
</head>

<body>
    <header>
        <div id="logotipo">
            <img src="../img/logophp.png" alt="Logotipo PHP" title="PHP Proyecto">
            <h1>PHP Proyecto Web</h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="acercade.php">Acerca de</a></li>
            <li><a href="mision.php">Misión</a></li>
            <li><a href="vision.php">Visión</a></li>
            <li><a href="mostrar_articulos.php">Ver Artículos</a></li>
            <li><a href="mostrar_categorias.php">Ver Categorías</a></li>
            <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
        </ul>
    </nav>
    <section id="content">
        <div class="box">
            <h1>Registrar Categoría</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <table align="center">
                    <tr>
                        <td><label for="descripcion">Descripción:</label></td>
                        <td><input type="text" name="descripcion" autofocus required></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="enviar" value="Registrar">
                        </td>
                        <td>
                            <input type="reset" name="limpiar" value="Limpiar">
                        </td>
                    </tr>
                </table>
            </form>
            <hr>
        </div>
    </section>
    <footer>
        <p>PHP con Alan &copy; 2024 | Visitado el: 01/10/24</p>
    </footer>
</body>

</html>