<?php 
// 1. Incluimos la conexión (asegúrate de que el archivo conexion.php esté en la misma carpeta)
include 'conexion.php'; 

// 2. Consultamos los productos de la base de datos
$query = "SELECT * FROM productos";
$resultado = mysqli_query($conexion, $query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/index.css">
    <title>ANIMARKET</title>
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
                <li><a href="index.php">Inicio</a></li>
                <li><a href="pages/perro.php">Perro</a></li>
                <li><a href="pages/gato.php">Gato</a></li>
                <li><a href="pages/blog.php">Blog</a></li>
            </ul>
        </div>
    </nav>
    
    <div class="busqueda">
        <input type="text" placeholder="¿Que buscas para tu peludo?">
    </div>

    <div class="slider-box">
        <ul>
            <li><img loading="lazy" src="assets/images/chigüiro.jpg" alt="Chigüiro ">
                <div class="slider-text">
                    <h2>¡Bienvenido a Animarket!</h2>
                    <p>Tu tienda de confianza para el cuidado de tus mascotas.</p>
                </div>
            </li>

            <li><img loading="lazy" src="assets/images/gato.jpg" alt="Gato">
                <div class="slider-text">
                    <h2>¡Bienvenido a Animarket!</h2>
                    <p>Tu tienda de confianza para el cuidado de tus mascotas.</p>
                </div>
            </li>

            <li><img loading="lazy" src="assets/images/perro.jpg" alt="Perro">
                <div class="slider-text">
                    <h2>¡Bienvenido a Animarket!</h2>
                    <p>Tu tienda de confianza para el cuidado de tus mascotas.</p>
                </div>
            </li>

            <li><img loading="lazy" src="assets/images/jaguar.jpg" alt="Jaguar">
                <div class="slider-text">
                    <h2>¡Bienvenido a Animarket!</h2>
                    <p>Tu tienda de confianza para el cuidado de tus mascotas.</p>
                </div>
            </li>
        </ul>
    </div>

    <main>

    <h3>Nuestros Productos</h3>
    
    <div class="container">
        <?php
        // 3. Este bucle reemplaza todas las tarjetas manuales. 
        // Se creará una tarjeta por cada producto que tengas en la base de datos.
        while($row = mysqli_fetch_assoc($resultado)) {
        ?>
            <div class="card">
                <img src="assets/images/<?php echo $row['imagen']; ?>" alt="<?php echo $row['nombre']; ?>">
                <h2><?php echo $row['nombre']; ?></h2>
                <p>$<?php echo number_format($row['precio'], 0, ',', '.'); ?></p>
                <small><?php echo $row['descripcion']; ?></small>
            </div>
        <?php } ?>
    </div>    
    </main>

    </body>
</html>