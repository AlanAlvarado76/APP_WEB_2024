<?php
session_start();
if (isset($_SESSION['user'])) {

} else {
    header("Location: ../index.php");
    exit();
}

include_once("conexion.php");

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Categorías | PHP Proyecto UTD</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/mostrar_categorias.css">
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
            <li><a href="mostrar_categorias.php">Ver Categorias</a></li>
            <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
        </ul>
    </nav>
    <section id="content">
        <div class="box">
            <h1>Lista de Categorías</h1>
            <div style="text-align: right; margin-bottom: 20px;">
                <!-- Botón para registrar una categoría -->
                <a href="registrar_categoria.php" style="text-decoration: none;">
                    <button style="
                        background: #4CAF50; 
                        color: white; 
                        padding: 10px 20px; 
                        border: none; 
                        border-radius: 5px; 
                        cursor: pointer; 
                        font-size: 1em;
                        transition: background 0.3s ease;
                    " 
                    onmouseover="this.style.background='#45a049';" 
                    onmouseout="this.style.background='#4CAF50';">
                        Registrar Nueva Categoría
                    </button>
                </a>
            </div>
            <?php
            // Consulta SQL para obtener las categorías
            $sql = "SELECT id, descripcion FROM categorias";
            $ejecucion_sql = $conexion->query($sql);

            // Verificar si hay resultados
            if ($ejecucion_sql->num_rows > 0) {
                echo '<table border="1">';
                echo '<tr>
                        <th>ID</th>
                        <th>Descripción</th>
                    </tr>';
                
                while ($fila = $ejecucion_sql->fetch_assoc()) {
                    echo '<tr>
                            <td>' . htmlspecialchars($fila['id']) . '</td>
                            <td>' . htmlspecialchars($fila['descripcion']) . '</td>
                        </tr>';
                }

                echo '</table>';
            } else {
                echo '<p>No hay categorías disponibles.</p>';
            }
            ?>
        </div>
    </section>
    <footer>
        <p>PHP con Alan &copy; 2024 | Visitado el: 01/10/24</p>
    </footer>
</body>

</html>
