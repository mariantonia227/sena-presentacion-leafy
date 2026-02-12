<?php
session_start(); // Para poder leer si hay sesión activa
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="css/styleproduct.css">
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
<br>
<br>

<section>
  <div class="barra-productos">
    <div class="productos-header">
   <h3>Productos</h3>
   <div class="filtros">
    <div class="categorias-lista">
    <button class="btn-filtro btnCategorias" id="btnCategorias">Categorías</button>
        <ul class="lista-categorias" id="listaCategorias">
          <li><a href="#mujer">Mujer</a></li>
          <li><a href="#hombre">Hombre</a></li>
          <li><a href="#niño">Niño</a></li>
          <li><a href="#niña">Niña</a></li>
        </ul>
    </div>
    <li class="btn-filtro"><a href="#a-z">A-Z</a></li>
    <li class="btn-filtro"><a href="#rango-de-precio">Rango de precio</a></li>
  </div>
    </div>
   <hr>
  </div>
</section>

<section>
  <div class="contenedor-productos">
  <a  href="camisa-M-para-hombre.php"   class="producto">
    <img src="assets/image 1.png" alt="Producto 1">
    <h3>Camiseta Hombre</h3>
    <p>$49.900</p>
    <small>Para Hombre - Talla: M</small>
  </a>

  <a href="camisa-S-para-mujer.php" class="producto">
    <img src="assets/image 2.png" alt="Producto 2">
    <h3>Blusa</h3>
    <p>$39.900</p>
    <small>Para Mujer - Talla: S</small>
  </a>

</section>
<br>
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
        <img src="assets/Rectangle 26.png" alt="imagen del slogan"  width="600" height="300">
    </div>
          <br>
          <p><span>Leafy</span><br>¡Ropa <br> sostenible <br> para todo el <br> mundo!</p>
        </div>
      </footer>
    </section>
    <script src="js/producto.js"></script>
</body>
</html>