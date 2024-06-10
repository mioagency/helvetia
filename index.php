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
              <h4 class="text-primary fs-6 fw-bold">NCUS WEB</h4>
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
              <h4 class="text-primary fs-6 fw-bold">eLoans</h4>
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
              <h4 class="text-primary fs-6 fw-bold">Shared Branch</h4>
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
              <h4 class="text-primary fs-6 fw-bold">Originación y ACH</h4>
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
              <h4 class="text-primary fs-6 fw-bold">Dashboards</h4>
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
<div class="container-fluid pt-4 pb-5 bg-gray">
  <div class="container pb-5">
    <div class="row text-center py-5">
      <h2 class="text-primary fw-bold">Proveemos los mejores beneficios</h2>
    </div>
    <div class="row gap-4">
      <div class="col p-4 bg-white rounded-3">
        <img class="mb-3" src="<?php $SERVER_URI ?>images/experiencia.svg" alt="">
        <h3 class="fs-6 text-primary text-bold">Experiencia</h3>
        <p>Tenemos una amplia experiencia en el mercado. 33 años sirviendo de manera exclusiva al mercado de ahorro y crédito.</p>
      </div>
      <div class="col p-4 bg-white rounded-3">
        <img class="mb-3" src="<?php $SERVER_URI ?>images/cero-desventajas.svg" alt="">
        <h3 class="fs-6 text-primary text-bold">Cero Desventajas</h3>
        <p>Único proveedor para las cooperativas con un centro de llamadas de servicio al cliente en Puerto Rico.</p>
      </div>
      <div class="col p-4 bg-white rounded-3">
        <img class="mb-3" src="<?php $SERVER_URI ?>images/unico-proveedor.svg" alt="">
        <h3 class="fs-6 text-primary text-bold">Único Proveedor</h3>
        <p>Única institución de servicios que se ha mantenido desarrollando y educando al personal.</p>
      </div>
      <div class="col p-4 bg-white rounded-3">
        <img class="mb-3" src="<?php $SERVER_URI ?>images/mantenimiento.svg" alt="">
        <h3 class="fs-6 text-primary text-bold">Mantenimiento</h3>
        <p>Hacer mejoras al sistema a través de conexión remota para agilizar los procesos de los clientes.</p>
      </div>
    </div>
  </div>
</div>
<div class="container pt-4 pb-5 mb-5">
  <div class="row text-center py-5">
    <h2 class="text-primary fw-bold">APIS</h2>
    <div class="col col-md-7 mx-auto">
      <p class="pt-2">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et</p>
    </div>
  </div>
  <div id="apiCarousel" class="carousel slide" data-bs-theme="dark">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row gap-3">
          <div class="col"><img src="<?php $SERVER_URI ?>images/img-placeholder.svg" alt="..."></div>
          <div class="col"><img src="<?php $SERVER_URI ?>images/img-placeholder.svg" alt="..."></div>
          <div class="col"><img src="<?php $SERVER_URI ?>images/img-placeholder.svg" alt="..."></div>
          <div class="col"><img src="<?php $SERVER_URI ?>images/img-placeholder.svg" alt="..."></div>
          <div class="col"><img src="<?php $SERVER_URI ?>images/img-placeholder.svg" alt="..."></div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row gap-3">
          <div class="col"><img src="<?php $SERVER_URI ?>images/img-placeholder.svg" alt="..."></div>
          <div class="col"><img src="<?php $SERVER_URI ?>images/img-placeholder.svg" alt="..."></div>
          <div class="col"><img src="<?php $SERVER_URI ?>images/img-placeholder.svg" alt="..."></div>
          <div class="col"><img src="<?php $SERVER_URI ?>images/img-placeholder.svg" alt="..."></div>
          <div class="col"><img src="<?php $SERVER_URI ?>images/img-placeholder.svg" alt="..."></div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row gap-3">
          <div class="col"><img src="<?php $SERVER_URI ?>images/img-placeholder.svg" alt="..."></div>
          <div class="col"><img src="<?php $SERVER_URI ?>images/img-placeholder.svg" alt="..."></div>
          <div class="col"><img src="<?php $SERVER_URI ?>images/img-placeholder.svg" alt="..."></div>
          <div class="col"><img src="<?php $SERVER_URI ?>images/img-placeholder.svg" alt="..."></div>
          <div class="col"><img src="<?php $SERVER_URI ?>images/img-placeholder.svg" alt="..."></div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#apiCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon text-primary" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#apiCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon text-primary" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<div class="container-fluid py-5 pr-bg">
  <div class="container">
    <div class="row py-5">
      <div class="col-6">
        <h2 class="text-white">Una empresa puertoriqueña</h2>
        <p class="text-white mt-3">Helvetia del Caribe es una empresa que desarrolla e implementa soluciones informáticas, fundada en 1986 cuando se incorpora bajo las leyes del Estado Libre Asociado de Puerto Rico. Helvetia del Caribe tiene soluciones para el comercio, la industria, y para el desarrollo de aplicaciones. Helvetia del Caribe es una empresa netamente puertorriqueña. Nuestras oficinas están localizadas en Carolina, Puerto Rico y ocupan un espacio de aproximadamente 12,000 pies cuadrados.</p>
        <button class="btn btn-primary text-white mt-3">Conoce más sobre nosotros</button>
      </div>
    </div>
  </div>
</div>
<?php
include_once ('templates/footer.php');
?>