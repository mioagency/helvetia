<?php

$PageTitle = "Soluciones - Colecta";
$page = "colecta";

function customPageHeader()
{ ?>
<!--Arbitrary HTML Tags-->
<?php }

include_once('templates/header.php'); ?>


<div class="container-fluid">
    <div class="row header-bg-img py-xl-5 py-3">
        <h1 class="text-center text-white">Colecta</h1>
    </div>
</div>

<section class="container-lg mw-1120">
    <div class="row pt-100 pt-4 pb-64 d-flex mio-bg-gradient">
        <div class="col-sm-4">
            <h2 class="fs-3 fw-bold text-primary text-center text-sm-start pb-3">¿Qué es Colecta?</h2>
        </div>
        <div class="col-sm-8">
            <p>Colecta consiste en un servicio automatizado de llamadas con un marcador predictivo con el propósito de servir en la gestión de cobros, mercadeo y servicio al cliente sin la intervención de un representante de servicio.
            </p>
        </div>
    </div>
</section>

<section class="container-lg py-5">
    <div class="row text-center mx-auto mw-930 pb-4">
        <h2 class="fs-3 fw-bold text-primary">Características Principales</h2>
    </div>

    <div id="mobile-side-scroll" class="col d-flex flex-wrap custom-card--colecta">
        <div class="card text-center mt-md-3">
            <div class="p-4">
                <img src="images/col-recordatorio-icn.svg" alt="" class="img-responsive">
                <p class="my-3 light-gray-2 fs-6 text-primary fw-medium">Recordatorio <br />de pagos</p>
            </div>
        </div>
        <div class="card text-center mt-md-3">
            <div class="p-4">
                <img src="images/col-renovacion-icn.svg" alt="" class="img-responsive">
                <p class="my-3 light-gray-2 fs-6 text-primary fw-medium">Renovación <br />de préstamos</p>
            </div>
        </div>
        <div class="card text-center mt-md-3">
            <div class="p-4">
                <img src="images/col-tarjetas-icn.svg" alt="" class="img-responsive">
                <p class="my-3 light-gray-2 fs-6 text-primary fw-medium">Campañas de tarjetas <br />de crédito</p>
            </div>
        </div>
        <div class="card text-center mt-md-3">
            <div class="p-4">
                <img src="images/col-llamadas-icn.svg" alt="" class="img-responsive">
                <p class="my-3 light-gray-2 fs-6 text-primary fw-medium">Llamadas de bienvenida <br />a los socios</p>
            </div>
        </div>
        <div class="card text-center mt-md-3">
            <div class="p-4">
                <img src="images/col-asambleas-icn.svg" alt="" class="img-responsive">
                <p class="my-3 light-gray-2 fs-6 text-primary fw-medium">Convocatoria a <br />asambleas</p>
            </div>
        </div>
        <div class="card text-center mt-md-3">
            <div class="p-4">
                <img src="images/col-prestamos-icn.svg" alt="" class="img-responsive">
                <p class="my-3 light-gray-2 fs-6 text-primary fw-medium">Llamadas diarias a todos los <br />préstamos
                    morosos</p>
            </div>
        </div>
    </div>
</section>
<section class="container py-5 sentinel-row-bg mw-1120 rounded-2 my-5 br-0">
    <div class="row text-sm-start text-center mx-auto">
        <div class="col d-flex justify-content-between flex-column flex-sm-row align-items-center px-sm-5">
            <h2 class="fs-3 text-white mb-4">Para más información:</h2>
            <a href="<?php $SERVER_URI ?>contactenos.php">
                <button class="btn btn-info mx-auto text-tertiary fw-light text-nowrap">Contáctanos aquí</button>
            </a>
        </div>
    </div>
</section>


<!-- Template Beneficios -->
<?php include_once('templates/beneficios.php'); ?>

<?php
include_once('templates/footer.php');
?>