<?php

$PageTitle="Soluciones - Global Radar®";
$page="global radar";

function customPageHeader(){?>
  <!--Arbitrary HTML Tags-->
<?php }

include_once('templates/header.php'); ?>

<div class="container-fluid">
  <div class="row header-bg-img py-xl-5 py-3">
    <h1 class="text-center text-white">Global RADAR<sup>®</sup></h1>
  </div>
</div>

<!-- Primer container -->
<div class="container-lg mw-1120">
  <div class="row py-100 pt-4 d-flex gx-md-5 align-items-center">
    <div class="col-sm-6">
      <H1 class="fs-3 fw-bold text-primary pb-4">Global RADAR<sup>®</sup></H1>
      <p>Es una solución de gestión de riesgos basada en una base potente y simple dentro de la red que proporciona un enfoque integral al cumplimiento de AML en una aplicación intuitiva y optimizada. Los muchos beneficios de Global RADAR<sup>®</sup> incluyen la protección de las instituciones con pérdidas financieras o de reputación, a la vez que generan ahorros de costos y oportunidades de generación de ingresos.</p>
    </div>
    <div class="col-sm-6">
      <img class="rounded-4 img-fluid" src="images/temp-image.svg" alt="temp-image">
    </div>
  </div>
</div>

<!-- Template Beneficios -->
<?php include_once ('templates/beneficios.php'); ?>

<?php
include_once('templates/footer.php');
?>