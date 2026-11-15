<?php
$datos_json = file_get_contents('productos.json');
$productos = json_decode($datos_json, true);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTOS</title>
    <link rel="icon" type="image/png" href="assets/img/logo_motomecanica.webp">
    <!-- FUENTES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik+Dirt&family=Russo+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/styles.css">

    <!-- LINK A BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1 id="titulo_principal">ZAMPEDRI</h1>
    <h2 id="subtitulo_principal"><span id="span_principal">MOTO</span>MECANICA</h2>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="barra">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <img src="assets/img/logo_motomecanica.webp" alt="" width="40" height="40">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active item_navbar" aria-current="page" href="index.html">INICIO</a>
                    </li>
                </ul>
            </div>
            <button id="modo">MODO CLARO/OSCURO</button>
        </div>
    </nav>

    <!-- SECCIÓN DINÁMICA DE PRODUCTOS -->
    <section>
        <div class="container" id="grid_tarjetas">
            <?php foreach ($productos as $prod): ?>
            
            <div class="tarjeta">
                <h2 class="producto"><?php echo htmlspecialchars($prod['nombre']); ?></h2>
                <img class="imagen_producto" src="<?php echo htmlspecialchars($prod['imagen']); ?>" alt="Imagen del producto.">
                <p class="precio"><?php echo htmlspecialchars($prod['precio']); ?></p>
            </div>
            
        <?php endforeach;?>
        </div>
    </section>
    <footer id="contacto">
        <p class="parrafo2">Dirección: Av Francisco ramirez 2158 – Los Charruas | Carlos Zampedri | </p>
        <p class="parrafo2">NUESTRAS REDES SOCIALES</p>
        <a class="link" href="https://www.facebook.com/carlos.zampedri">
            <img class="img_footer" src="assets/img/logofacebook.webp">
        </a>
        <a class="link" href="https://www.instagram.com/zampedri">
            <img class="img_footer" src="assets/img/logoinstagram.webp">
        </a>
        <a class="link" href="https://www.tiktok.com/@carloszampedri">
            <img class="img_footer" src="assets/img/logotiktok.webp">
        </a>
        
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Script del modo claro -->
    <script src="js/java.js"></script>
</body>
</html>
