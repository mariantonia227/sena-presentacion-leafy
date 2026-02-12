<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="css/registro.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<section class="register-screen">
  <div class="register-left">
    <img src="assets/iniciarregistrar.jpg" alt="Leafy imagen">
  </div>

  <div class="register-right">
    <div class="register-box">
      <h2>Crear cuenta en <span>Leafy</span></h2>
      <p class="slogan">Únete a nuestra comunidad sostenible 🌿</p>
      
      <!-- 🔹 FORMULARIO REGISTRO -->
      <form action="php/generador.php" method="POST">
        <label for="nombre">Nombre completo</label>
        <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre completo" required>

        <label for="email">Correo electrónico</label>
        <input type="email" id="email" name="email" placeholder="Ingresa tu correo" required>

        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Crea una contraseña" required>

        <label for="tipo">Tipo de usuario</label>
        <select id="tipo" name="tipo" required>
          <option value="cliente">Cliente</option>
          <option value="negocio">Negocio</option>
        </select>

        <!-- 🔹 Botón con name="registrar" -->
        <button type="submit" name="registrar" class="btn-register">REGISTRARME</button>
      </form>

      <p class="inicia">¿Ya tienes una cuenta? <a href="login.php">Inicia sesión aquí</a></p>
      <a href="principal.php" class="volver">← Volver al inicio</a>
    </div>
  </div>
</section>
</body>
</html>