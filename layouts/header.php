<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title><?= isset($title) ? $title . ' - ' : ''; ?>Janus Page</title>

  <!-- css templates -->
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="stylesheet" href="./assets/css/customer.css" />

  <!-- css customs -->

  <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
</head>

<body>
  <!-- navbar -->
  <div class="navbar">
    <div class="navbar__container container">
      <a href="./index.php" class="navbar__brand">
        <img src="./assets/img/logo.png" alt="FloraFavs" />
      </a>
      <?php if (isset($_SESSION['customer_id'])) : ?>
        <nav class="navbar__nav">
          <a href="./products.php" class="navbar__link">Producto</a>
          <a href="./transactions.php" class="navbar__link">Transacciones</a>
          <a href="./cart.php" class="navbar__link">Carrito</a>
        </nav>
      <?php endif; ?>
      <div class="navbar__right">
        <?php if (!isset($_SESSION['customer_id'])) : ?>
          <a href="./login.php" class="navbar__cta">Inicio</a>
          <a href="./register.php" class="navbar__cta">Registrar</a>
        <?php endif; ?>
        <?php if (isset($_SESSION['customer_id'])) : ?>
          <div class="navbar__profile">
            <label for="navbar__profile-toggler" class="navbar__profile-toggler">
              <img src="./assets/img/default-profile.jpg" alt="" class="navbar__profile-img" />
            </label>
            <input type="checkbox" id="navbar__profile-toggler">
            <div class="navbar__profile-menu-list">
              <a href="./profile.php" class="navbar__profile-menu-link">
                <i class="ph ph-user"></i>
                Tu perfil</a>
              <a href="./change-password.php" class="navbar__profile-menu-link">
                <i class="ph ph-lock-simple"></i>
                Cambiar contraseña</a>
              <hr class="navbar__profile-menu-divider" />
              <a href="./logout.php" class="navbar__profile-menu-link">
                <i class="ph ph-arrow-right"></i>
                Salir
              </a>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <!-- end navbar -->