<footer id="footer" class="container pt-5">
  <div class="row">
    <div class="col-12 col-md-4 col-sm-12 col-xs-12 pe-5 mb-3">
      <img src="<?php $SERVER_URI ?>images/logo.png" alt="Helvetia Logo">
      <p class="mt-2 text-terciary">Helvetia del Caribe es una empresa que desarrolla e implementa soluciones informáticas.</p>
      <ul class="list-inline">
        <li class="list-inline-item fs-10">
          <a href="#">
            <span class="fa-stack fa-2x">
              <i class="fa-solid fa-circle fa-stack-2x text-info"></i>
              <i class="fa-brands fa-facebook-f fa-stack-1x fa-inverse alt-primary"></i>
            </span>
          </a>
        </li>
        <li class="list-inline-item fs-10">
          <a href="#">
            <span class="fa-stack fa-2x">
              <i class="fa-solid fa-circle fa-stack-2x text-info"></i>
              <i class="fa-brands fa-linkedin-in fa-stack-1x fa-inverse alt-primary"></i>
            </span>
          </a>
        </li>
        <li class="list-inline-item fs-10">
          <a href="#">
            <span class="fa-stack fa-2x">
              <i class="fa-solid fa-circle fa-stack-2x text-info"></i>
              <i class="fa-brands fa-x-twitter fa-stack-1x fa-inverse alt-primary"></i>
            </span>
          </a>
        </li>
      </ul>
    </div>
    <div class="col-12 col-md-4 col-sm-12 col-xs-12 ps-sm-5 mb-3">
      <h4 class="mb-3 text-secondary">Menú</h4>
      <nav class="navbar navbar-expand-lg navbar-light">

        <ul class="navbar-nav mb-2 mb-lg-0 flex-column">
          <li class="nav-item">
            <a class="<?= ($activePage == 'index') ? 'active' : ''; ?> nav-link p-025" aria-current="page"
              href="<?php $SERVER_URI ?>index.php">Principal</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle p-025" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Soluciones
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="<?= ($activePage == 'soluciones-nucs-web') ? 'active' : ''; ?> dropdown-item"
                  href="<?php $SERVER_URI ?>soluciones-nucs-web.php">NUCS Web</a></li>
              <li><a class="<?= ($activePage == 'soluciones-onbase') ? 'active' : ''; ?> dropdown-item"
                  href="<?php $SERVER_URI ?>soluciones-onbase.php">OnBase</a></li>
              <li><a class="<?= ($activePage == 'soluciones-sage-100-erp') ? 'active' : ''; ?> dropdown-item"
                  href="<?php $SERVER_URI ?>soluciones-sage-100-erp.php">Sage 100 ERP</a></li>
              <li><a class="<?= ($activePage == 'soluciones-global-radar') ? 'active' : ''; ?> dropdown-item"
                  href="<?php $SERVER_URI ?>soluciones-global-radar.php">Global Radar</a></li>
              <li><a class="<?= ($activePage == 'soluciones-sentinel') ? 'active' : ''; ?> dropdown-item"
                  href="<?php $SERVER_URI ?>soluciones-sentinel.php">Sentinel</a></li>
              <li><a class="<?= ($activePage == 'soluciones-colecta') ? 'active' : ''; ?> dropdown-item"
                  href="<?php $SERVER_URI ?>soluciones-colecta.php">Colecta</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="<?= ($activePage == 'nosotros') ? 'active' : ''; ?> nav-link p-025"
              href="<?php $SERVER_URI ?>nosotros.php">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="<?= ($activePage == 'servicio-tecnico') ? 'active' : ''; ?> nav-link p-025"
              href="<?php $SERVER_URI ?>servicio-tecnico.php">Servicio Técnico</a>
          </li>
          <li class="nav-item">
            <a class="<?= ($activePage == 'contactenos') ? 'active' : ''; ?> nav-link p-025"
              href="<?php $SERVER_URI ?>contactenos.php">Contáctenos</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="col-12 col-md-4 col-sm-12 col-xs-12 pe-4 mb-3">
      <h4 class="mb-3 text-secondary">Contáctanos</h4>
      <ul class="list-unstyled">
        <li>
          <a class="d-flex mb-1 text-decoration-none link-dark" href="#">
            <i class="fa-solid fa-location-dot m-1 me-2 text-primary"></i><span>Via 11 Esq. Via Viviana, Centro
              Comercial Villa Fontana II, Carolina, PR 00983</span>
          </a>
        </li>
        <li>
          <a class="d-flex mb-1 text-decoration-none link-dark" href="#">
            <i class="fa-solid fa-phone m-1 me-2 text-primary"></i><span>(787) 750-3300</span>
          </a>
        </li>
        <li>
          <a class="d-flex mb-1 text-decoration-none link-dark" href="#">
            <i class="fa-solid fa-envelope m-1 me-2 text-primary"></i><span>info@Helvetia-pr.com</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="row copyright">
    <div class="col-12 text-center">
      <p>&#169; Copyright 2024 - Todos los derechos reservados | <a href="<?php $SERVER_URI ?>politicas-privacidad.php">Políticas de Privacidad</a></p>
    </div>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="<?php $SERVER_URI ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php $SERVER_URI ?>js/custom.js"></script>
</body>

</html>