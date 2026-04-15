<?php 
// Incluimos la conexión por si en el futuro quieren mostrar noticias desde la DB
include '../conexion.php'; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/blog.css">
    <title>Blog - ANIMARKET</title>
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
        <h3>BLOG</h3>
        </main>
</body>
</html>