<?php

$PageTitle="Helvetia - Principal";
$page="principal";

function customPageHeader(){?>
  <!--Arbitrary HTML Tags-->
<?php }

include_once('templates/header.php'); ?>

<div class="container-fluid vh-100 d-flex align-items-center justify-content-center text-white header-home-bg-img text-center">
  <div class="row py-4">
    <div class="col col-md-8 offset-md-2">
      <h1>Desarrollamos e implementamos soluciones informáticas para el sector financiero</h1>
      <h2 class="fs-5 fw-normal pt-4">Innovamos en soluciones y servicios para las cooperativas líderes en Puerto Rico</h2>
      <button class="btn btn-info mx-auto mt-4 text-tertiary">Conoce nuestras soluciones</button>
    </div>
  </div>
</div>
<div class="container pt-4 mio-bg-gradient">
  <div class="row text-center py-4">
    <h2 class="text-primary fw-bold">Nuestras Soluciones</h2>
    <div class="col col-md-7 mx-auto">
      <p class="pt-2">Helvetia del Caribe cuenta con más de 60 empleados para darle servicios a sus clientes, tanto en sus oficinas, así como soporte remoto desde nuestro centro de servicio.</p>
    </div>
  </div>
  <div class="row text-center">
    <div class="col-6 col-md-2 offset-md-1">
      <div class="icon-text-box d-flex flex-column gap-2">
        <div class="icon-wrapper p-2 mx-auto my-auto sistemas-bancarios"></div>
        <h3 class="fs-6 fw-500">Sistemas<br> Bancarios</h3>
      </div>
    </div>
    <div class="col-6 col-md-2">
      <div class="icon-text-box d-flex flex-column gap-2">
        <div class="icon-wrapper p-2 mx-auto my-auto analisis-de-datos"></div>
        <h3 class="fs-6 fw-500">Análisis de datos</h3>
      </div>
    </div>
    <div class="col-6 col-md-2">
      <div class="icon-text-box d-flex flex-column gap-2">
        <div class="icon-wrapper p-2 mx-auto my-auto comunicacion-y-notificaciones"></div>
        <h3 class="fs-6 fw-500">Comunicación y Notificaciones</h3>
      </div>
    </div>
    <div class="col-6 col-md-2">
      <div class="icon-text-box d-flex flex-column gap-2">
        <div class="icon-wrapper p-2 mx-auto my-auto operaciones-en-linea"></div>
        <h3 class="fs-6 fw-500">Operaciones en línea</h3>
      </div>
    </div>
    <div class="col-6 col-md-2">
      <div class="icon-text-box d-flex flex-column gap-2">
        <div class="icon-wrapper p-2 mx-auto my-auto ventas-y-automatizacion"></div>
        <h3 class="fs-6 fw-500">Ventas y automatización</h3>
      </div>
    </div>
  </div>
</div>
<div class="container">
<div class="row py-4 mt-5">
  <div class="col">
    <h3 class="fs-3 fw-bold text-primary">Nuestros sistemas bancarios:</h3>
  </div>
</div>
<div class="row">
  <div class="col-4">
    <div class="row">
      <div class="col-2">
        <img src="<?php $SERVER_URI ?>images/nucsweb.png" alt="">
      </div>
      <div class="col-10">
        <h4 class="text-primary fs-5 fw-bold">NCUS WEB</h4>
        <p>NCUS Web es un sistema especialmente diseñado para la automatización de cooperativas de ahorro y crédito.</p>
        <button type="button" class="btn btn-link text-decoration-none ps-0 pt-0 fw-bold fs-14">Conoce más <i class="fa-solid fa-arrow-right-long"></i></button>
      </div>
    </div>
  </div>
  <div class="col-8">
    <img class="img-fluid" src="<?php $SERVER_URI ?>images/dashboard.png" alt="Dashboard">
  </div>
</div>
</div>

<?php
include_once('templates/footer.php');
?>