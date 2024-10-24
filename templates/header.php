<?php
$SERVER_URI = 'http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]';
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title><?= isset($PageTitle) ? $PageTitle : "Default Title" ?></title>
  <!-- Additional tags here -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex, nofollow" />
  <link rel="icon" type="image/x-icon" href="./images/favicon.png"/>
  <!--<link href="<?php $SERVER_URI ?>css/bootstrap/bootstrap.min.css" rel="stylesheet">-->
  <link href="<?php $SERVER_URI ?>css/fontawesome/css/fontawesome.min.css" rel="stylesheet" />
  <link href="<?php $SERVER_URI ?>css/fontawesome/css/all.min.css" rel="stylesheet" />
  <link href="<?php $SERVER_URI ?>css/custom.css" rel="stylesheet">
  <!-- tipografías Roboto -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <?php if (function_exists('customPageHeader')) {
    customPageHeader();
  } 
  ?>
</head>

<body>
  <header id="header" class="container-fluid bg-white">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="<?php $SERVER_URI ?>index.php">
          <img src="<?php $SERVER_URI ?>images/logo.png" width="205" alt="Logo Helvetia"
            class="d-inline-block align-text-top" width="116">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navItems"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navItems">
          <ul class="navbar-nav ms-lg-auto mb-2 mb-lg-0 align-items-xl-center">
            <li class="nav-item">
              <a class="<?= ($activePage == 'index') ? 'active':''; ?> nav-link" aria-current="page" href="<?php $SERVER_URI ?>index.php">Principal</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Soluciones
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="<?= ($activePage == 'soluciones-ncus-web') ? 'active':''; ?> dropdown-item" href="<?php $SERVER_URI ?>soluciones-ncus-web.php">NCUS Web</a></li>
                <li><a class="<?= ($activePage == 'soluciones-onbase') ? 'active':''; ?> dropdown-item" href="<?php $SERVER_URI ?>soluciones-onbase.php">OnBase</a></li>
                <li><a class="<?= ($activePage == 'soluciones-sage-100-erp') ? 'active':''; ?> dropdown-item" href="<?php $SERVER_URI ?>soluciones-sage-100-erp.php">Sage 100 ERP</a></li>
                <li><a class="<?= ($activePage == 'soluciones-global-radar') ? 'active':''; ?> dropdown-item" href="<?php $SERVER_URI ?>soluciones-global-radar.php">Global RADAR<sup>®</sup></a></li>
                <li><a class="<?= ($activePage == 'soluciones-sentinel') ? 'active':''; ?> dropdown-item" href="<?php $SERVER_URI ?>soluciones-sentinel.php">Sentinel</a></li>
                <li><a class="<?= ($activePage == 'soluciones-colecta') ? 'active':''; ?> dropdown-item" href="<?php $SERVER_URI ?>soluciones-colecta.php">Colecta</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="<?= ($activePage == 'nosotros') ? 'active':''; ?> nav-link" href="<?php $SERVER_URI ?>nosotros.php">Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="<?= ($activePage == 'apoyo-tecnico') ? 'active':''; ?> nav-link" href="<?php $SERVER_URI ?>apoyo-tecnico.php">Apoyo Técnico</a>
            </li>
            <li class="nav-item">
                <a class="<?= ($activePage == 'contactenos') ? 'active':''; ?> nav-link" href="<?php $SERVER_URI ?>contactenos.php"><button class="btn btn-primary text-white">Contáctenos</button></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>