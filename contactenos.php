<?php

$PageTitle = "Helvetia - Comuníquese con nosotros";
$page = "contactenos";

function customPageHeader()
{ ?>
  <!--Arbitrary HTML Tags-->
<?php }

include_once ('templates/header.php'); ?>

<div class="container-fluid">
  <div class="row header-bg-img py-xl-5 py-3">
    <h1 class="text-center text-white">Comuníquese con nosotros</h1>
  </div>
</div>

<div class="container-fluid mio-bg-gradient mt-2 mt-md-5 pt-4 pb-3 md-mw-75 xs-mw-100">
  <div class="container px-3">
    <div class="row g-3">
      <div class="col-12 col-md-4">
        <div class="d-flex flex-column align-items-center gap-2 border rounded-3 p-4 h-100">
          <i class="fa-solid fa-location-dot fs-3 text-primary"></i>
          <h2 class="fs-6 text-primary">Dirección</h2>
          <p class="text-center">Via 11 Esq. Via Viviana, Centro Comercial Villa Fontana II, Carolina, PR 00983</p>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="d-flex flex-column align-items-center gap-2 border rounded-3 p-4 h-100">
          <i class="fa-solid fa-phone fs-3 text-primary"></i>
          <h2 class="fs-6 text-primary">Teléfono</h2>
          <p class="text-center"><a href="tel:7877503300">(787)-750-3300</a></p>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="d-flex flex-column align-items-center gap-2 border rounded-3 p-4 h-100">
          <i class="fa-solid fa-envelope fs-3 text-primary"></i>
          <h2 class="fs-6 text-primary">Correo electrónico</h2>
          <p class="text-center"><a href="mailto:info@helvetia-pr.com">info@helvetia-pr.com</a></p>
        </div>
      </div>
    </div>
  </div>
  <div class="container px-4">
    <div class="row g-4 py-4 mt-md-3 py-md-5">
      <div class="col-12 col-md-6 d-flex flex-column gap-2 pe-5">
        <h2 class="text-primary fw-bold fs-3">Para Helvetia del Caribe es un placer servirles</h2>
        <p>En Helvetia del Caribe, nuestro compromiso es ofrecer un servicio de excelencia. Nos dedicamos a satisfacer las necesidades de nuestros clientes con soluciones personalizadas y un enfoque constante en la calidad. Nos esforzamos por mejorar continuamente, buscando innovar y adaptarnos a los cambios para garantizar que nuestros clientes siempre reciban lo mejor.</p>
        <!--<h3 class="fs-6 text-primary fw-bold">Síguenos en las redes:</h3>
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
        </ul>-->
      </div>
      <div class="col-12 col-md-6 p-5  border rounded-3 bg-white">
        <form>
          <div class="mb-3">
            <label for="inputName" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="inputName" aria-describedby="nameHelp" placeholder="Ingresa tu nombre">
          </div>
          <div class="mb-3">
            <label for="inputTel" class="form-label">Teléfono</label>
            <input type="tel" class="form-control" id="inputTel" aria-describedby="telHelp" placeholder="Ingresa tu número de teléfono">
          </div>
          <div class="mb-3">
            <label for="inputEmail" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Ingresa tu correo electrónico">
          </div>
          <div class="mb-3">
            <label for="selectService">Orientación sobre nuestro servicio:</label>
            <select style="margin-top:5px" id="selectService" class="form-select" aria-label="Default select example">
              <option selected>Selecciona un servicio</option>
              <option value="nucs-web">NUCS Web</option>
              <option value="onbase">OnBase</option>
              <option value="sage-100-erp">Sage 100 ERP</option>
              <option value="global-radar">Global Radar</option>
              <option value="sentinel">Setinel</option>
              <option value="colecta">Colecta</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="vormControlTextarea1" class="form-label">Mensaje</label>
            <textarea class="form-control" id="vormControlTextarea1" rows="3" placeholder="Escríbenos tu mensaje"></textarea>
          </div>
          <button type="submit" class="btn w-100 btn-primary text-white">Enviar Mensaje</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid p-0">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3785.800508704122!2d-65.97720312571585!3d18.40192827278932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c0366c2094c5d7f%3A0x91f34c832be6c3bf!2sHelvetia%20Del%20Caribe!5e0!3m2!1ses-419!2sar!4v1717456688237!5m2!1ses-419!2sar" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<?php
include_once ('templates/footer.php');
?>