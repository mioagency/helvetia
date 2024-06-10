<?php

$PageTitle = "Helvetia - Principal";
$page = "principal";

function customPageHeader()
{ ?>
  <!--Arbitrary HTML Tags-->
<?php }

include_once ('templates/header.php'); ?>

<div
  class="container-fluid vh-100 d-flex align-items-center justify-content-center text-white header-home-bg-img text-center">
  <div class="row py-4">
    <div class="col col-md-8 offset-md-2">
      <h1>Desarrollamos e implementamos soluciones informáticas para el sector financiero</h1>
      <h2 class="fs-5 fw-normal pt-4">Innovamos en soluciones y servicios para las cooperativas líderes en Puerto Rico
      </h2>
      <button class="btn btn-info mx-auto mt-4 text-tertiary">Conoce nuestras soluciones</button>
    </div>
  </div>
</div>
<!-- Sección - Nuestras Soluciones -->
<div class="container pt-4">
  <div class="row text-center py-5">
    <h2 class="text-primary fw-bold">Nuestras Soluciones</h2>
    <div class="col col-md-7 mx-auto">
      <p class="pt-2">Helvetia del Caribe cuenta con más de 60 empleados para darle servicios a sus clientes, tanto en
        sus oficinas, así como soporte remoto desde nuestro centro de servicio.</p>
    </div>
  </div>
  <ul class="nav nav-tabs d-flex justify-content-center mio-bg-gradient gap-4" id="nuestrasSoluciones" role="tablist">
    <!-- Tab Sistemas Bancarios -->
    <li class="nav-item" role="presentation">
      <button class="nav-link active border border-0 bg-transparent" id="sb-tab" data-bs-toggle="tab" data-bs-target="#sb-tab-pane" type="button" role="tab" aria-controls="sb-tab-pane" aria-selected="true">
        <div class="icon-text-box d-flex flex-column gap-2">
          <div class="icon-wrapper p-2 mx-auto my-auto sistemas-bancarios"></div>
          <h3 class="fs-6 fw-500">Sistemas<br> Bancarios</h3>
        </div>
      </button>
    </li>
    <!-- Tab Analisis de Datos -->
    <li class="nav-item" role="presentation">
      <button class="nav-link border border-0 bg-transparent" id="ad-tab" data-bs-toggle="tab" data-bs-target="#ad-tab-pane" type="button" role="tab" aria-controls="ad-tab-pane" aria-selected="false">
        <div class="icon-text-box d-flex flex-column gap-2">
          <div class="icon-wrapper p-2 mx-auto my-auto analisis-de-datos"></div>
          <h3 class="fs-6 fw-500">Análisis<br> de datos</h3>
        </div>
      </button>
    </li>
    <!-- Tab Comunicación y Notificaciones -->
    <li class="nav-item" role="presentation">
      <button class="nav-link border border-0 bg-transparent" id="cn-tab" data-bs-toggle="tab" data-bs-target="#cn-tab-pane" type="button" role="tab" aria-controls="cn-tab-pane" aria-selected="false">
        <div class="icon-text-box d-flex flex-column gap-2">
          <div class="icon-wrapper p-2 mx-auto my-auto comunicacion-y-notificaciones"></div>
          <h3 class="fs-6 fw-500">Comunicación y<br> Notificaciones</h3>
        </div>
      </button>
    </li>
    <!-- Tab Operaciones en línea -->
    <li class="nav-item" role="presentation">
      <button class="nav-link border border-0 bg-transparent" id="ol-tab" data-bs-toggle="tab" data-bs-target="#ol-tab-pane" type="button" role="tab" aria-controls="ol-tab-pane" aria-selected="false">
        <div class="icon-text-box d-flex flex-column gap-2">
          <div class="icon-wrapper p-2 mx-auto my-auto operaciones-en-linea"></div>
          <h3 class="fs-6 fw-500">Operaciones<br> en línea</h3>
        </div>
      </button>
    </li>
    <!-- Tab Ventas y Automatización -->
    <li class="nav-item" role="presentation">
      <button class="nav-link border border-0 bg-transparent" id="va-tab" data-bs-toggle="tab" data-bs-target="#va-tab-pane" type="button" role="tab" aria-controls="va-tab-pane" aria-selected="false">
        <div class="icon-text-box d-flex flex-column gap-2">
          <div class="icon-wrapper p-2 mx-auto my-auto ventas-y-automatizacion"></div>
          <h3 class="fs-6 fw-500">Ventas y<br> automatización</h3>
        </div>
      </button>
    </li>
  </ul>
  <div class="tab-content mio-bg-gradient pb-5" id="myTabContent">
    <!-- Contenido Tab Sistemas Bancarios -->
    <div class="tab-pane fade show active" id="sb-tab-pane" role="tabpanel" aria-labelledby="sb-tab" tabindex="0">
      <div class="row py-4 mt-5">
        <div class="col">
          <h3 class="fs-3 fw-bold text-primary">Nuestros sistemas bancarios:</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <!-- NCUS WEB -->
          <div class="row">
            <div class="col-2">
              <img src="<?php $SERVER_URI ?>images/ncus-web.svg" alt="">
            </div>
            <div class="col-10">
              <h4 class="text-primary fs-5 fw-bold">NCUS WEB</h4>
              <p>NCUS Web es un sistema especialmente diseñado para la automatización de cooperativas de ahorro y crédito.</p>
              <a href="<?php $SERVER_URI ?>soluciones-nucs-web.php"><button type="button" class="btn btn-link text-decoration-none ps-0 pt-0 fw-bold fs-14">
                Conoce más <i class="fa-solid fa-arrow-right-long"></i>
              </button></a>
            </div>
          </div>
          <!-- eLoans -->
          <div class="row pt-3">
            <div class="col-2">
              <img src="<?php $SERVER_URI ?>images/eloans.svg" alt="">
            </div>
            <div class="col-10">
              <h4 class="text-primary fs-5 fw-bold">eLoans</h4>
              <p>El módulo eLoans tiene una característica nueva y conveniente que permite a los socios solicitar préstamos en cualquier momento.</p>
              <a href="javascript:void(0)"><button type="button" class="btn btn-link text-decoration-none ps-0 pt-0 fw-bold fs-14">
                Conoce más <i class="fa-solid fa-arrow-right-long"></i>
              </button></a>
            </div>
          </div>
          <!-- Shared Branch -->
          <div class="row pt-3">
            <div class="col-2">
              <img src="<?php $SERVER_URI ?>images/shared-branch.svg" alt="">
            </div>
            <div class="col-10">
              <h4 class="text-primary fs-5 fw-bold">Shared Branch</h4>
              <p>Shares Branch empodera a sus socios con una multitud de opciones para administrar sus finanzas.</p>
              <a href="javascript:void(0)"><button type="button" class="btn btn-link text-decoration-none ps-0 pt-0 fw-bold fs-14">
                Conoce más <i class="fa-solid fa-arrow-right-long"></i>
              </button></a>
            </div>
          </div>
          <!-- Originación y ACH -->
          <div class="row pt-3">
            <div class="col-2">
              <img src="<?php $SERVER_URI ?>images/originacion-y-ach.svg" alt="">
            </div>
            <div class="col-10">
              <h4 class="text-primary fs-5 fw-bold">Originación y ACH</h4>
              <p>Facilita el movimeinto de dinero entre cooperativas de ahorro y crédito o hacia otras instituciones financieras.</p>
              <a href="javascript:void(0)"><button type="button" class="btn btn-link text-decoration-none ps-0 pt-0 fw-bold fs-14">
                Conoce más <i class="fa-solid fa-arrow-right-long"></i>
              </button></a>
            </div>
          </div>
          <!-- Dashboards -->
          <div class="row pt-3">
            <div class="col-2">
              <img src="<?php $SERVER_URI ?>images/dashboards.svg" alt="">
            </div>
            <div class="col-10">
              <h4 class="text-primary fs-5 fw-bold">Dashboards</h4>
              <p>Analizar el estado de su cooperativa de ahorro y crédito a través de medios visuales puede resultar una herramienta valiosa para obtener información detallada y valiosa.</p>
              <a href="javascript:void(0)"><button type="button" class="btn btn-link text-decoration-none ps-0 pt-0 fw-bold fs-14">
                Conoce más <i class="fa-solid fa-arrow-right-long"></i>
              </button></a>
            </div>
          </div>
        </div>
        <div class="col-8">
          <img class="img-fluid" src="<?php $SERVER_URI ?>images/dashboard.png" alt="Dashboard">
        </div>
      </div>
    </div>
    <!-- Contenido Tab Analisis de Datos -->
    <div class="tab-pane fade" id="ad-tab-pane" role="tabpanel" aria-labelledby="ad-tab" tabindex="1">
      <div class="row py-4 mt-5">
        <div class="col">
          <h3 class="fs-3 fw-bold text-primary">Analisis de Datos:</h3>
        </div>
      </div>
    </div>
    <!-- Contenido Tab Comunicación y Notificaciones -->
    <div class="tab-pane fade" id="cn-tab-pane" role="tabpanel" aria-labelledby="cn-tab" tabindex="2">
      <div class="row py-4 mt-5">
        <div class="col">
          <h3 class="fs-3 fw-bold text-primary">Comunicación y Notificaciones:</h3>
        </div>
      </div>
    </div>
    <!-- Contenido Tab Operaciones en Línea -->
    <div class="tab-pane fade" id="ol-tab-pane" role="tabpanel" aria-labelledby="ol-tab" tabindex="2">
      <div class="row py-4 mt-5">
        <div class="col">
          <h3 class="fs-3 fw-bold text-primary">Operaciones en línea:</h3>
        </div>
      </div>
    </div>
    <!-- Contenido Tab Ventas y Automatización -->
    <div class="tab-pane fade" id="va-tab-pane" role="tabpanel" aria-labelledby="va-tab" tabindex="2">
      <div class="row py-4 mt-5">
        <div class="col">
          <h3 class="fs-3 fw-bold text-primary">Ventas y automatización:</h3>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Sección - Proveemos los mejores beneficios -->
<div class="container-fluid pt-4 bg-gray">
  <div class="row text-center py-5">
    <h2 class="text-primary fw-bold">Proveemos los mejores beneficios</h2>
  </div>
</div>
<?php
include_once ('templates/footer.php');
?>