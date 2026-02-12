<?php
session_start(); // Para poder leer si hay sesión activa
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camiseta Hombre</title>
    <link rel="stylesheet" href="css/productos-descripcion.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <section>
      <header>
    <div class="barra-menu">
        <a href="principal.php"><img src="assets/IMG-20251024-WA0034-removebg-preview.png" alt=""></a>
        <nav>
            <div class="buscador-menu">
                    <input type="text" placeholder="Buscar">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            <ul>
                <li><a href="principal.php">Home</a></li>
                <li><a href="product.php">Product</a></li>
                <li><a href="contact.php">Contact</a></li>
    <!-- Control de sesión -->
    <?php if (isset($_SESSION['nombre'])): ?>
    <li class="user-menu">
        <button class="user-btn">
            <?php echo $_SESSION['nombre']; ?> <i class="fa-solid fa-caret-down"></i>
        </button>

        <ul class="dropdown">
            <li><a href="perfil.php">Mi perfil</a></li>
            <li><a href="php/logout.php">Cerrar sesión</a></li>
        </ul>
    </li>
<?php else: ?>
    <li><a href="login.php" class="btn-login">Iniciar sesión</a></li>
<?php endif; ?>
                <a href="#carrito" class="btn-carrito">Carrito</a>
              </ul>
        </nav>
            </div>
      </header>
    </section>


<section  class="Producto-Camiseta">
   <div id="Producto-1" class="producto-informacion">
    <div class="Producto-muestra"><img src="assets/image 1.png" alt=""></div>
    <div class="descripcion">
        <h2>Camiseta Hombre</h2>
        <p>Camiseta de corte recto en color negro. 
            Confeccionada en tejido suave y cómodo, presenta cuello redondo, mangas cortas. 
            Ideal para un look relajado y moderno.</p>
        <h3 class="precio">
            <span class="precio-simbolo">$</span>
            49.900
        </h3>
        <div class="tallas">
        <h3>Tallas</h3>
        <div class="opcion-tallas">
        <a href="#" class="btn-tallas">S</a>
        <a href="#" class="btn-tallas">M</a>
        <a href="#" class="btn-tallas">L</a>
        </div>
        </div>
        <div class="contenedor-botones">
        <button type="submit" class="añadir-carrito">Añadir al Carrito</button>
        <button class="corazon-btn" id="corazonBtn">
            <span class="corazon-icon">♡</span>
        </button>
        </div>
    </div>
   </div>
</section>
<br>

<br>
    <section>
      <footer>
        <div class="parte-abajo">
          <h4>Ayuda e Información</h4>
          <ul>
            <li><a href="#">Contactanos</a></li>
            <li><a href="#">Politica de Envios</a></li>
            <li><a href="#">Terminos y Condiciones de ventas</a></li>
            <li><a href="#">Términos y condiciones</a></li>
          </ul>
        </div>
    
        <div class="parte-abajo">
          <h4>Sobre nosotros</h4>
          <ul>
            <li><a href="principal.php#info-texto">Quiénes somos</a></li>
            <li><a href="principal.php#proyecto">Sobre el proyecto</a></li>
          </ul>
        </div>

                <div class="redes">
          <h4>Donde encontrarnos</h4>
          <ul>
            <li><a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-square-facebook"></i></a></li>
            <li><a href="https://www.tiktok.com" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
          </ul>
        </div>
    
        <div class="slogan">
          <div class="imagen-sloga">
        <img src="assets/Rectangle 26.png 26.png" alt="imagen del slogan"  width="600" height="300">
    </div>
          <br>
          <p><span>Leafy</span><br>¡Ropa <br> sostenible <br> para todo el <br> mundo!</p>
        </div>
      </footer>
    </section>
    <script src="js/script.js"></script>
</body>
</html>