<?php 
// 1. Conexión a la base de datos
include '../conexion.php'; 

// 2. Consulta filtrada por la categoría 'Perro'
$query = "SELECT * FROM productos WHERE categoria = 'Perro'";
$resultado = mysqli_query($conexion, $query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/perro.css">
    <title>Perro - ANIMARKET</title>
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">ANIMARKET</div>

            <button class="nav-toggle" aria-label="Abrir menú de navegación">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <ul class="nav-menu">
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="perro.php">Perro</a></li>
                <li><a href="gato.php">Gato</a></li>
                <li><a href="blog.php">Blog</a></li>
            </ul>
        </div>
    </nav>

    <main>

    <h3>PRODUCTOS PARA PERROS</h3>
    
    <div class="container">
        <?php
        // 3. Bucle dinámico para mostrar las tarjetas de perros
        if (mysqli_num_rows($resultado) > 0) {
            while($row = mysqli_fetch_assoc($resultado)) {
        ?>
                <div class="card">
                    <img src="../assets/images/<?php echo $row['imagen']; ?>" alt="<?php echo $row['nombre']; ?>">
                    <h2><?php echo $row['nombre']; ?></h2>
                    <p>$<?php echo number_format($row['precio'], 0, ',', '.'); ?></p>
                    <small><?php echo $row['descripcion']; ?></small>
                </div>
        <?php 
            }
        } else {
            echo "<p>No hay productos para perros disponibles en este momento.</p>";
        }
        ?>
    </div>    
    </main>
</body>
</html>