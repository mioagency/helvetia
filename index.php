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
      <h2 class="fs-5 fw-normal pt-4 light-grey">Innovamos en soluciones y servicios para las cooperativas líderes en Puerto Rico
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
  <div class="container responsive-tabs">
        <ul class="nav nav-tabs justify-content-between" role="tablist">
            <li class="nav-item">
                <a id="tab-A" href="#pane-A" class="nav-link border border-0 bg-transparent active" data-bs-toggle="tab" role="tab">
                <button class="border border-0 bg-transparent" type="button">
                  <div class="icon-text-box d-flex flex-column gap-2">
                    <div class="icon-wrapper p-2 mx-auto my-auto sistemas-bancarios"></div>
                    <h3 class="fs-6 fw-500 d-none d-md-block">Sistemas<br> Bancarios</h3>
                  </div>
                </button>
                </a>
            </li>
            <li class="nav-item">
                <a id="tab-B" href="#pane-B" class="nav-link border border-0 bg-transparent" data-bs-toggle="tab" role="tab">
                  <button class="border border-0 bg-transparent" type="button">
                    <div class="icon-text-box d-flex flex-column gap-2">
                      <div class="icon-wrapper p-2 mx-auto my-auto analisis-de-datos"></div>
                      <h3 class="fs-6 fw-500 d-none d-md-block">Análisis<br> de datos</h3>
                    </div>
                  </button>
                </a>
            </li>
            <li class="nav-item">
                <a id="tab-C" href="#pane-C" class="nav-link border border-0 bg-transparent" data-bs-toggle="tab" role="tab">
                  <button class="border border-0 bg-transparent" type="button">
                    <div class="icon-text-box d-flex flex-column gap-2">
                      <div class="icon-wrapper p-2 mx-auto my-auto comunicacion-y-notificaciones"></div>
                      <h3 class="fs-6 fw-500 d-none d-md-block">Comunicación y<br> Notificaciones</h3>
                    </div>
                  </button>
                </a>
            </li>
            <li class="nav-item">
                <a id="tab-D" href="#pane-D" class="nav-link border border-0 bg-transparent" data-bs-toggle="tab" role="tab">
                  <button class="border border-0 bg-transparent" type="button">
                    <div class="icon-text-box d-flex flex-column gap-2">
                      <div class="icon-wrapper p-2 mx-auto my-auto operaciones-en-linea"></div>
                      <h3 class="fs-6 fw-500 d-none d-md-block">Operaciones<br> en línea</h3>
                    </div>
                  </button>
                </a>
            </li>
            <li class="nav-item">
                <a id="tab-E" href="#pane-E" class="nav-link border border-0 bg-transparent" data-bs-toggle="tab" role="tab">
                  <button class="border border-0 bg-transparent" type="button" role="tab">
                    <div class="icon-text-box d-flex flex-column gap-2">
                      <div class="icon-wrapper p-2 mx-auto my-auto ventas-y-automatizacion"></div>
                      <h3 class="fs-6 fw-500 d-none d-md-block">Ventas y<br> automatización</h3>
                    </div>
                  </button>
                </a>
            </li>
        </ul>

        <div id="content" class="tab-content" role="tablist">
            <div id="pane-A" class="card shadow-none tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
                <div class="card-header" role="tab" id="heading-A">
                    <h5 class="mb-0">
                        <a data-bs-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                          Sistemas Bancarios
                        </a>
                    </h5>
                </div>
                <div id="collapse-A" class="collapse show" data-bs-parent="#content" role="tabpanel"
                    aria-labelledby="heading-A">
                    <div class="card-body">
                    <div class="row py-4 mt-5">
                      <div class="col">
                        <h3 class="fs-3 fw-bold text-primary">Nuestros sistemas bancarios:</h3>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-md-4 pe-5">
                        <!-- NCUS WEB -->
                        <div class="row">
                          <div class="col-2">
                            <img src="<?php $SERVER_URI ?>images/ncus-web.svg" alt="">
                          </div>
                          <div class="col-10 ps-4">
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
                          <div class="col-10 ps-4">
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
                          <div class="col-10 ps-4">
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
                          <div class="col-10 ps-4">
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
                          <div class="col-10 ps-4">
                            <h4 class="text-primary fs-6 fw-bold">Dashboards</h4>
                            <p>Analizar el estado de su cooperativa de ahorro y crédito a través de medios visuales puede resultar una herramienta valiosa para obtener información detallada y valiosa.</p>
                            <a href="javascript:void(0)"><button type="button" class="btn btn-link text-decoration-none ps-0 pt-0 fw-bold fs-14">
                              Conoce más <i class="fa-solid fa-arrow-right-long"></i>
                            </button></a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-8">
                        <img class="img-fluid" src="<?php $SERVER_URI ?>images/dashboard.png" alt="Dashboard">
                        <button class="btn btn-primary text-white mt-5 ms-5">Conoce nuestras soluciones</button>
                      </div>
                    </div>
                    </div>
                </div>
            </div>

            <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                <div class="card-header" role="tab" id="heading-B">
                    <h5 class="mb-0">
                        <a class="collapsed" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false"
                            aria-controls="collapse-B">
                            Analisis de Datos
                        </a>
                    </h5>
                </div>
                <div id="collapse-B" class="collapse" data-bs-parent="#content" role="tabpanel"
                    aria-labelledby="heading-B">
                    <div class="card-body">Contenido Analisis de Datos</div>
                </div>
            </div>

            <div id="pane-C" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
                <div class="card-header" role="tab" id="heading-C">
                    <h5 class="mb-0">
                        <a data-bs-toggle="collapse" href="#collapse-C" aria-expanded="true" aria-controls="collapse-C">
                          Comunicación y Notificaciones
                        </a>
                    </h5>
                </div>
                <div id="collapse-C" class="collapse" data-bs-parent="#content" role="tabpanel"
                    aria-labelledby="heading-C">
                    <div class="card-body">Contenido Comunicación y Notificaciones</div>
                </div>
            </div>

            <div id="pane-D" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-D">
                <div class="card-header" role="tab" id="heading-D">
                    <h5 class="mb-0">
                        <a data-bs-toggle="collapse" href="#collapse-D" aria-expanded="true" aria-controls="collapse-D">
                          Operaciones en línea
                        </a>
                    </h5>
                </div>
                <div id="collapse-D" class="collapse" data-bs-parent="#content" role="tabpanel"
                    aria-labelledby="heading-D">
                    <div class="card-body">Contenido Operaciones en línea</div>
                </div>
            </div>
            <div id="pane-E" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-E">
                <div class="card-header" role="tab" id="heading-E">
                    <h5 class="mb-0">
                        <a data-bs-toggle="collapse" href="#collapse-E" aria-expanded="true" aria-controls="collapse-E">
                          Ventas y automatización
                        </a>
                    </h5>
                </div>
                <div id="collapse-E" class="collapse" data-bs-parent="#content" role="tabpanel"
                    aria-labelledby="heading-E">
                    <div class="card-body">Contenido Ventas y automatización</div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Template Beneficios -->
<?php include_once ('templates/beneficios.php'); ?>

<!-- Template APIs -->
<?php include_once ('templates/apis.php'); ?>

<div class="container-fluid py-5 pr-bg">
  <div class="container">
    <div class="row py-5 mt-5 mb-5">
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