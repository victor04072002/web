<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="css/styleLogin.css" />
</head>

<body>
  <div class="container">
    <div class="container-form">
      <form class="sign-in" id="sign-in" method="POST" action="php/iniciarSesion.php">
        <h2>Iniciar Sesión</h2>
        <div class="social-networks">
          <ion-icon name="logo-google"></ion-icon>
          <ion-icon name="logo-facebook"></ion-icon>
        </div>
        <span>Use su correo y contraseña</span>
        <div class="container-input">
          <ion-icon name="mail-outline"></ion-icon>
          <input type="email" name="email" placeholder="Email" required />
        </div>
        <div class="container-input">
          <ion-icon name="lock-closed-outline"></ion-icon>
          <input type="password" name="password" placeholder="Password" required />
        </div>
        <a href="#">¿Olvidaste tu contraseña?</a>
        <button class="button" type="submit">INICIAR SESIÓN</button>
      </form>

    </div>
    <div class="container-form">
      <form class="sing-up" form method="POST" action="php/registro.php">
        <h2>Registrarse</h2>
        <div class="social-networks">
          <ion-icon name="logo-google"></ion-icon>
          <ion-icon name="logo-facebook"></ion-icon>
        </div>
        <span>Use su correo electrónico para registrarse</span>
        <div class="container-input">
          <ion-icon name="person-outline"></ion-icon>
          <input type="text" name="nombre" placeholder="Nombre" required />
        </div>
        <div class="container-input">
          <ion-icon name="person-outline"></ion-icon>
          <input type="text" name="apellidoPaterno" placeholder="Apellido Paterno" required />
        </div>
        <div class="container-input">
          <ion-icon name="mail-outline"></ion-icon>
          <input type="email" name="email" placeholder="Email" required />
        </div>
        <div class="container-input">
          <ion-icon name="lock-closed-outline"></ion-icon>
          <input type="password" name="password" placeholder="Password" required />
        </div>

        <button class="button" type="submit" >REGISTRARSE</button>
      </form>
    </div>

    <div class="container-welcome">
      <div class="welcome-sign-up welcome">
        <h3>¡Bienvenido!</h3>
        <p>
          Ingrese sus datos personales para usar todas las funciones del sitio
        </p>

        <button class="button" id="btn-sign-up">Registrarse</button>
      </div>
      <div class="welcome-sign-in welcome">
        <h3>¡Hola!</h3>
        <p>
          Regístrese con sus datos personales para usar todas las funciones
          del sitio
        </p>
        <button class="button" id="btn-sign-in">Iniciar Sesión</button>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="js/scriptLogin.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>