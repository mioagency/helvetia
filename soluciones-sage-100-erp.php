<?php

$PageTitle="Soluciones - Sage 100 ERP";
$page="sage 100 erp";

function customPageHeader(){?>
  <!--Arbitrary HTML Tags-->
<?php }

include_once('templates/header.php'); ?>

<div class="container-fluid">
  <div class="row header-bg-img py-xl-5 py-3">
    <h1 class="text-center text-white">Sage 100 ERP</h1>
  </div>
</div>

<section class="container-lg mw-1120 py-100 py-4 mio-bg-gradient">
  <div class="row text-center mx-auto mw-930">
    <h2 class="fs-3 fw-bold text-primary pb-4">¿Qué es Sage 100 ERP?</h2>
    <p class="text-start">Helvetia del Caribe es el principal proveedor en Puerto Rico y Latinoamérica de soluciones avanzadas de software empresarial, destacándose como "Master Developer" de Sage Software, Inc. Nos especializamos en adaptar y optimizar productos Sage para satisfacer las necesidades específicas de su negocio, ofreciendo una integración sin fisuras y soporte técnico de clase mundial.</p>
  </div>
</section>


<!-- Tab menu - Se muestra en tamaños grandes -->
<section class="container mw-930 py-100 px-md-4 d-none d-sm-block">
  <div class="row text-center mx-auto mw-930">
    <h2 class="fs-3 fw-bold text-primary pb-4">Productos Destacados</h2>
  </div>
  <ul class="nav nav-pills justify-content-center" id="pills-tab mobile-side-scroll" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Sage 100 ERP Standard y Advance</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Abra HR Suite</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">FAS Asset Accounting</button>
    </li>
  </ul>

  <div class="tab-content pt-5" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
      <h3 class="fs-6 text-primary">Sage 100 ERP Standard y Advance</h3>
      <p>Ofrecemos Sage 100 ERP en sus versiones Standard y Advance, diseñadas para empresas de todos los tamaños y sectores. Estos sistemas modulares incluyen módulos como Mayor General, Nómina, Cuentas por Pagar y por Cobrar, Reconciliación Bancaria, Activo Fijo, Inventario, e-Business, entre otros. Ambas versiones son totalmente compatibles con plataformas Microsoft, garantizando eficiencia y escalabilidad.
      </p>
    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
      <h3 class="fs-6 text-primary">Abra HR Suite</h3>
      <p>Abra HR Suite es la solución líder en la gestión de recursos humanos, facilitando procesos como nómina, reclutamiento, entrenamiento y administración de beneficios. Sus módulos incluyen Abra Recruiting Solution, Abra Attendance, Abra Train, Abra OrgPlus, Abra Alerts y Abra Employee Self-Service, todos diseñados para mejorar la productividad y eficacia en la gestión del capital humano.</p>
    </div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
      <h3 class="fs-6 text-primary">FAS Asset Accounting</h3>
      <p>FAS Asset Accounting es la herramienta más completa para la gestión de activos fijos, ofreciendo funciones avanzadas de contabilidad, depreciación y generación de reportes. Compatible con más de 300,000 normas fiscales, FAS Asset Accounting es esencial para empresas que requieren un control preciso y eficiente de sus activos.<br/><br/>
      Helvetia del Caribe se distingue por contar con el grupo de programadores más experimentado y un centro de entrenamiento de vanguardia. Como Master Developer de Sage Software, estamos comprometidos a ofrecer soluciones personalizadas y un soporte técnico excepcional, garantizando que su inversión en tecnología sea óptima y rentable.
      </p>
    </div>
  </div>
</section>

<!-- Tab menu - se muestra en tamaño móvil -->
<section class="container-lg mw-1120 py-5 d-block d-sm-none">
  <div class="row text-center mx-auto mw-930">
    <h2 class="fs-3 fw-bold text-primary pb-2 pb-sm-4">Productos Destacados</h2>
  </div>
  <div class="container responsive-tabs px-0">
    <div id="content" class="tab-content" role="tablist">
        <div id="pane-A" class="card shadow-none tab-pane fade" role="tabpanel" aria-labelledby="tab-A">
            <div class="card-header border-0 bg-light-primary rounded-2 mb-2" role="tab" id="heading-A">
              <a class="text-decoration-none" data-bs-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                <div class="icon-text-box">
                  <div class="py-2">Sage 100 ERP Mobile Tab</div>
                </div>
              </a>
            </div>
            <div id="collapse-A" class="collapse show" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-A">
              <div class="card-body">
                <div class="row py-2">
                  <div class="col">
                    <p class="">Ofrecemos Sage 100 ERP en sus versiones Standard y Advance, diseñadas para empresas de todos los tamaños y sectores. Estos sistemas modulares incluyen módulos como Mayor General, Nómina, Cuentas por Pagar y por Cobrar, Reconciliación Bancaria, Activo Fijo, Inventario, e-Business, entre otros. Ambas versiones son totalmente compatibles con plataformas Microsoft, garantizando eficiencia y escalabilidad.
                    </p>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div id="pane-B" class="card shadow-none tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
            <div class="card-header border-0 bg-light-primary rounded-2 mb-2" role="tab" id="heading-B">
              <a class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                <div class="icon-text-box">
                  <div class="py-2">Abra HR Suite</div>
                </div>
              </a>
            </div>
            <div id="collapse-B" class="collapse" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-B">
              <div class="card-body">
                <div class="row py-2">
                  <div class="col">
                    <p class="">Abra HR Suite es la solución líder en la gestión de recursos humanos, facilitando procesos como nómina, reclutamiento, entrenamiento y administración de beneficios. Sus módulos incluyen Abra Recruiting Solution, Abra Attendance, Abra Train, Abra OrgPlus, Abra Alerts y Abra Employee Self-Service, todos diseñados para mejorar la productividad y eficacia en la gestión del capital humano.
                    </p>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div id="pane-C" class="card shadow-none tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
            <div class="card-header border-0 bg-light-primary rounded-2 mb-2" role="tab" id="heading-C">
              <a class="text-decoration-none" data-bs-toggle="collapse" href="#collapse-C" aria-expanded="true" aria-controls="collapse-C">
                <div class="icon-text-box">
                  <div class="py-2">FAS Asset Accounting</div>
                </div>
              </a>
            </div>
            <div id="collapse-C" class="collapse" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-C">
              <div class="card-body">
                <div class="row py-2">
                  <div class="col">
                    <p class="">FAS Asset Accounting es la herramienta más completa para la gestión de activos fijos, ofreciendo funciones avanzadas de contabilidad, depreciación y generación de reportes. Compatible con más de 300,000 normas fiscales, FAS Asset Accounting es esencial para empresas que requieren un control preciso y eficiente de sus activos.
                      <br/><br/>
                    Helvetia del Caribe se distingue por contar con el grupo de programadores más experimentado y un centro de entrenamiento de vanguardia. Como Master Developer de Sage Software, estamos comprometidos a ofrecer soluciones personalizadas y un soporte técnico excepcional, garantizando que su inversión en tecnología sea óptima y rentable.
                    </p>
                  </div>
                </div>
              </div>
            </div>
        </div>

    </div>
  </div>
</section>

<!--CTA Coordinar llamada-->
<?php include_once('templates/cta-full-width.php');?>

<!-- Template Beneficios -->
<?php include_once ('templates/beneficios.php'); ?>

<?php
include_once('templates/footer.php');
?>