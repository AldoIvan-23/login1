<?php
session_start();
include '../models/conexion.php';

if(!isset($_SESSION['user'])){
    echo '
    <script>
        alert("Por favor inicia sesión");
        setTimeout(function () {
            window.location.href = "../index.php";
        }, 1200);
    </script>';
    die();
}
$sql = "SELECT * FROM usuario";
$res = mysqli_query($mysqli,$sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Gaceta</title>
    <link rel="stylesheet" href="/css/home.css">
</head>
<body>
    <header class="header">
        <div class="logo">LaGaceta</div>
        <nav class="nav">
            <a href="#">Secciones</a>
            <a href="#">Secciones</a>
            <a href="#">Secciones</a>
            <a href="#">Secciones</a>
            <a href="#">Secciones</a>
        </nav>
        <div class="login">
            <button>Iniciar Sesión / Registrate</button>
        </div>
    </header>
    
    <main class="main-content">
        <aside class="sidebar">
            <h2>Lo de hoy</h2>
            <ul>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
            </ul>
        </aside>

        <section class="trending">
            <h2>#EnTendencia</h2>
            <div class="tags">
                <button>#Noticia1</button>
                <button>#Noticia1</button>
                <button>#Noticia1</button>
            </div>
            <div class="main-article">
                <img src="" alt="Imagen de la noticia">
                <h3>Titular</h3>
                <p class="date">14 enero 2022</p>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>
        </section>

        <aside class="advertisement">
            <img src="" alt="Publicidad">
        </aside>
    </main>
</body>
</html>
