<?php

$PageTitle = "Helvetia - Contáctenos";
$page = "contactenos";

function customPageHeader()
{ ?>
  <!--Arbitrary HTML Tags-->
<?php }

include_once ('templates/header.php'); ?>

<div class="container-fluid">
  <div class="row header-bg-img py-xl-5 py-3">
    <h1 class="text-center text-white">Contáctanos</h1>
  </div>
</div>

<div class="container py-5 mio-bg-gradient">
  <div class="row gap-3 d-flex">

        <div class="col d-flex flex-column align-items-center gap-2 border rounded-3 p-4">
          <i class="fa-solid fa-location-dot fs-3 text-primary"></i>
          <h2 class="fs-6 text-primary mio-bg-gradient">Dirección</h2>
          <p class="text-center">Via 11 Esq. Via Viviana, Centro Comercial Villa Fontana II, Carolina, PR 00983</p>
        </div>

      <div class="col d-flex flex-column align-items-center gap-2 border rounded-3 p-4">
        <i class="fa-solid fa-phone fs-3 text-primary"></i>
        <h2 class="fs-6 text-primary mio-bg-gradient">Teléfono</h2>
        <p class="text-center">(787)-750-3300</p>
      </div>

      <div class="col d-flex flex-column align-items-center gap-2 border rounded-3 p-4">
        <i class="fa-solid fa-envelope fs-3 text-primary"></i>
        <h2 class="fs-6 text-primary mio-bg-gradient">Correo</h2>
        <p class="text-center">info@helvetia-pr.com</p>
      </div>

  </div>
</div>

<?php
include_once ('templates/footer.php');
?>