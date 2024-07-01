<?php

$PageTitle = "Helvetia - Principal";
$page = "principal";

function customPageHeader()
{ ?>
  <!--Arbitrary HTML Tags-->
<?php }

include_once ('templates/header.php'); ?>

<div
  class="container-fluid custom-vh-100 d-flex align-items-center justify-content-center text-white header-home-bg-img text-center">
  <div class="row py-4">
    <div class="col col-md-8 offset-md-2">
      <h1>Desarrollamos e implementamos soluciones informáticas para el sector financiero</h1>
      <h2 class="fs-5 fw-normal pt-4 light-grey">Innovamos en soluciones y servicios para las cooperativas líderes en Puerto Rico
      </h2>
      <button class="btn btn-info mx-auto mt-4 text-tertiary">
        <a class="text-decoration-none" href="<?php $SERVER_URI ?>contactenos.php">Contacta nuestro equipo hoy</a>
      </button>
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
  <div class="container responsive-tabs pb-5">
    <ul class="nav nav-tabs justify-content-between border-0" role="tablist">
      <li class="nav-item">
          <a id="tab-A" href="#pane-A" class="nav-link border border-0 bg-transparent active" data-bs-toggle="tab" role="tab" aria-selected="true">
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
        <div id="pane-A" class="card shadow-none tab-pane fade active show" role="tabpanel" aria-labelledby="tab-A">
            <div class="card-header border-0 p-4 bg-light-primary rounded-2 mb-2" role="tab" id="heading-A">
                <h5 class="mb-3">
                    <a class="text-decoration-none" data-bs-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                      <div class="icon-text-box">
                        <div class="icon-wrapper p-2 mx-auto my-auto float-start sistemas-bancarios me-2"></div>
                        <div class="pt-2">Sistemas Bancarios</div>
                      </div>
                    </a>
                </h5>
            </div>
            <div id="collapse-A" class="collapse show" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-A">
              <div class="card-body">
                <div class="row py-4 mt-5">
                  <div class="col">
                    <h3 class="fs-3 fw-bold text-primary">Nuestros sistemas bancarios:</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 pe-5">
                    <!-- NCUS WEB -->
                    <div class="row">
                      <div class="col-12 d-flex ps-4">
                        <div>
                          <img class=" me-2" src="<?php $SERVER_URI ?>images/ncus-web.svg" alt="">
                        </div>
                        <div>
                          <h4 class="text-primary fs-6 fw-bold">NCUS WEB</h4>
                          <p>Nuestro "Core Bancario" (NCUS-Next Generation Credit Union System) es un sistema basado en la Web que está especialmente diseñado para ayudar a las cooperativas de ahorro y crédito a optimizar sus operaciones y maximizar su eficiencia. Con una variedad de poderosas herramientas, que incluyen bases de datos, “dashboards”, imágenes, envíos por correo electrónico y capacidades de mercadeo.  </p>
                          <a href="<?php $SERVER_URI ?>soluciones-nucs-web.php"><button type="button" class="btn btn-link text-decoration-none ps-0 pt-0 fw-bold fs-14">
                            Conoce más <i class="fa-solid fa-arrow-right-long"></i>
                          </button></a>
                        </div>
                      </div>
                    </div>
                    <!-- Origicación y ACH -->
                    <div class="row pt-3">
                      <div class="col-12 d-flex ps-4">
                        <div>
                          <img class="me-2" src="<?php $SERVER_URI ?>images/originacion-y-ach.svg" alt="">
                        </div>
                        <div>
                          <h4 class="text-primary fs-6 fw-bold">Originación y ACH</h4>
                          <p>Facilita el movimiento de dinero (transacciones) entre cooperativas de ahorro y crédito o hacia otras instituciones financieras.</p>
                          <a href=""><button type="button" class="btn btn-link text-decoration-none ps-0 pt-0 fw-bold fs-14">
                            Conoce más <i class="fa-solid fa-arrow-right-long"></i>
                          </button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div id="pane-B" class="card shadow-none tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
          <div class="card-header border-0 p-4 bg-light-primary rounded-2 mb-2" role="tab" id="heading-B">
              <h5 class="mb-3">
                  <a class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                    <div class="icon-text-box">
                      <div class="icon-wrapper p-2 mx-auto my-auto float-start analisis-de-datos me-2"></div>
                      <div class="pt-2">Analisis de datos</div>
                    </div>
                  </a>
              </h5>
          </div>
          <div id="collapse-B" class="collapse" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-B">
            <div class="card-body ">
              <div class="row py-4 mt-5">
                <div class="col">
                  <h3 class="fs-3 fw-bold text-primary">Analisis de datos:</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-4 pe-5">
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

        <div id="pane-C" class="card shadow-none tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
          <div class="card-header border-0 p-4 bg-light-primary rounded-2 mb-2" role="tab" id="heading-C">
              <h5 class="mb-3">
                  <a class="text-decoration-none" data-bs-toggle="collapse" href="#collapse-C" aria-expanded="true" aria-controls="collapse-C">
                    <div class="icon-text-box">
                      <div class="icon-wrapper p-2 mx-auto my-auto float-start comunicacion-y-notificaciones me-2"></div>
                      <div class="pt-2">Comunicación y Notifiaciones</div>
                    </div>
                  </a>
              </h5>
          </div>
          <div id="collapse-C" class="collapse" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-C">
            <div class="card-body">
              <div class="row py-4 mt-5">
                <div class="col">
                  <h3 class="fs-3 fw-bold text-primary">Comunicación y Notificaciones:</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-12 pe-5">
                  <!-- Notificación HDC -->
                  <div class="row pt-3">
                    <div class="col-12 d-flex ps-4">
                      <div>
                        <img class="me-2" width="60" src="<?php $SERVER_URI ?>images/icon-placeholder.webp" alt="">
                      </div>
                      <div>
                        <h4 class="text-primary fs-6 fw-bold">Notificación HDC</h4>
                        <p>Reciba notificaciones instantáneas de cualquier compra o transacción realizada con su tarjeta con nuestra módulo de Notificación de HDC. Los socios pueden mantener el control de sus cuentas comprobando el número de transacciones y los cargos de sus tarjetas desde tu dispositivo móvil. Esta función ayuda a evitar compras no autorizadas y/o fraudulentas proporcionándole seguridad y tranquilidad a los socios.</p>
                        <a href="javascript:void(0)"><button type="button" class="btn btn-link text-decoration-none ps-0 pt-0 fw-bold fs-14">
                          Conoce más <i class="fa-solid fa-arrow-right-long"></i>
                        </button></a>
                      </div>
                    </div>
                  </div>
                  <!-- Notificaciones por Texto -->
                  <div class="row pt-3">
                    <div class="col-12 d-flex ps-4">
                      <div>
                        <img class="me-2" width="60" src="<?php $SERVER_URI ?>images/icon-placeholder.webp" alt="">
                      </div>
                      <div>
                        <h4 class="text-primary fs-6 fw-bold">Notificaciones por Texto</h4>
                        <p>Nuestro módulo de Notificaciones por texto es la herramienta perfecta para mantener a sus socios actualizados e informados. La cooperativa puede enviar fácilmente mensajes de texto sobre cambios importantes en los horarios, eventos, asambleas, felicitaciones y cualquier otra informacion importantes. </p>
                        <a href="javascript:void(0)"><button type="button" class="btn btn-link text-decoration-none ps-0 pt-0 fw-bold fs-14">
                          Conoce más <i class="fa-solid fa-arrow-right-long"></i>
                        </button></a>
                      </div>
                    </div>
                  </div>
                  <!-- OnCall -->
                  <div class="row pt-3">
                    <div class="col-12 d-flex ps-4">
                      <div>
                        <img class="me-2" width="60" src="<?php $SERVER_URI ?>images/icon-placeholder.webp" alt="">
                      </div>
                      <div>
                        <h4 class="text-primary fs-6 fw-bold">OnCall</h4>
                        <p>Servicio de Help Desk local en Puerto Rico</p>
                        <a href="javascript:void(0)"><button type="button" class="btn btn-link text-decoration-none ps-0 pt-0 fw-bold fs-14">
                          Conoce más <i class="fa-solid fa-arrow-right-long"></i>
                        </button></a>
                      </div>
                    </div>
                  </div>
                  <!-- Ventas Cruzadas -->
                  <div class="row pt-3">
                    <div class="col-12 d-flex ps-4">
                      <div>
                        <img class="me-2" width="60" src="<?php $SERVER_URI ?>images/icon-placeholder.webp" alt="">
                      </div>
                      <div>
                        <h4 class="text-primary fs-6 fw-bold">Ventas Cruzadas</h4>
                        <p>Utiliza algoritmos avanzados para identificar las preferencias y hábitos de sus socios, lo que le permite crear ofertas personalizadas adaptadas a sus necesidades. Presentar a sus clientes con promociones relevantes y específicas, puede aumentar significativamente sus ventas y la lealtad de sus socios. Así que, ¡no te pierdas esta fantástica oportunidad de llevar los esfuerzos de mercadeo de tu cooperativa al siguiente nivel!</p>
                        <a href="javascript:void(0)"><button type="button" class="btn btn-link text-decoration-none ps-0 pt-0 fw-bold fs-14">
                          Conoce más <i class="fa-solid fa-arrow-right-long"></i>
                        </button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="pane-D" class="card shadow-none tab-pane fade" role="tabpanel" aria-labelledby="tab-D">
            <div class="card-header border-0 p-4 bg-light-primary rounded-2 mb-2" role="tab" id="heading-D">
                <h5 class="mb-3">
                    <a class="text-decoration-none" data-bs-toggle="collapse" href="#collapse-D" aria-expanded="true" aria-controls="collapse-D">
                      <div class="icon-text-box">
                        <div class="icon-wrapper p-2 mx-auto my-auto float-start operaciones-en-linea me-2"></div>
                        <div class="pt-2">Operaciones en Línea</div>
                      </div>
                    </a>
                </h5>
            </div>
            <div id="collapse-D" class="collapse" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-D">
              <div class="card-body">
                <div class="row py-4 mt-5">
                  <div class="col">
                    <h3 class="fs-3 fw-bold text-primary">Operaciones en Línea:</h3>
                  </div>
                </div>
                <!-- eLoans -->
                <div class="row pt-3">
                  <div class="col-12 d-flex ps-4">
                    <div>
                      <img class="me-2" src="<?php $SERVER_URI ?>images/eloans.svg" alt="">
                    </div>
                    <div>
                      <h4 class="text-primary fs-6 fw-bold">eLoans</h4>
                      <p> Tiene una característica nueva y conveniente que permite a los socios solicitar préstamos en cualquier momento del día a través de la internet. Con el beneficio adicional de la Pre-aprobación inmediata sin afectar el crédito. El proceso de solicitud de préstamo nunca ha sido más sencillo. Además, la firma remota de documentos a través de DocuSign hace que toda la transacción sea muy fácil y segura. </p>
                      <a href="javascript:void(0)"><button type="button" class="btn btn-link text-decoration-none ps-0 pt-0 fw-bold fs-14">
                        Conoce más <i class="fa-solid fa-arrow-right-long"></i>
                      </button></a>
                    </div>
                  </div>
                </div>
                <!-- eNCUS -->
                <div class="row pt-3">
                  <div class="col-12 d-flex ps-4">
                    <div>
                      <img class="me-2" width="60" src="<?php $SERVER_URI ?>images/icon-placeholder.webp" alt="">
                    </div>
                    <div>
                      <h4 class="text-primary fs-6 fw-bold">eNCUS</h4>
                      <p>Le proporciona un módulo conveniente y fácil de usar que permite a las personas interesadas convertirse en socios de la cooperativa sin la necesidad de visitas físicas a la cooperativa. Esta función de registro de membresía en línea está disponible las 24 horas del día, los 7 días de la semana, lo que hace que sea fácil y sin complicaciones para los socios potenciales unirse. Al aprovechar el poder de la tecnología, eNCUS ha abierto nuevas vías de crecimiento al atraer a más socios a su cooperativa.</p>
                      <a href="javascript:void(0)"><button type="button" class="btn btn-link text-decoration-none ps-0 pt-0 fw-bold fs-14">
                        Conoce más <i class="fa-solid fa-arrow-right-long"></i>
                      </button></a>
                    </div>
                  </div>
                </div>
                <!-- Estados de Cuenta Digital -->
                <div class="row pt-3">
                  <div class="col-12 d-flex ps-4">
                    <div>
                      <img class="me-2" width="60" src="<?php $SERVER_URI ?>images/icon-placeholder.webp" alt="">
                    </div>
                    <div>
                      <h4 class="text-primary fs-6 fw-bold">Estados de Cuenta Digital</h4>
                      <p>One Time Password - Para socios NO inscritos en Home Banking. Nuestro módulo de Estados de Cuenta Digital permite a los socios acceder a sus estados de cuenta de manera conveniente, sin necesidad de tener una cuenta activa de Home Banking o de iniciar sesión en Home Banking. Esto significa que todos los socios pueden aprovechar esta nueva función y disfrutar de los beneficios de tener sus estados de cuenta disponibles en línea al alcance de su mano.</p>
                      <a href="javascript:void(0)"><button type="button" class="btn btn-link text-decoration-none ps-0 pt-0 fw-bold fs-14">
                        Conoce más <i class="fa-solid fa-arrow-right-long"></i>
                      </button></a>
                    </div>
                  </div>
                </div>
                <!-- FonoCoop -->
                <div class="row pt-3">
                  <div class="col-12 d-flex ps-4">
                    <div>
                      <img class="me-2" width="60" src="<?php $SERVER_URI ?>images/icon-placeholder.webp" alt="">
                    </div>
                    <div>
                      <h4 class="text-primary fs-6 fw-bold">FonoCoop</h4>
                      <p>Ofrece un servicio telefónico confiable las 24 horas del día, los 7 días de la semana. Le permite a los socios realizar una variedad de transacciones financieras, como transferencias, cancelaciones y verificaciones de balances. Puede acceder a estos servicios desde la comodidad de su hogar. </p>
                      <a href="javascript:void(0)"><button type="button" class="btn btn-link text-decoration-none ps-0 pt-0 fw-bold fs-14">
                        Conoce más <i class="fa-solid fa-arrow-right-long"></i>
                      </button></a>
                    </div>
                  </div>
                </div>
                <!-- Foto Depósito -->
                <div class="row pt-3">
                  <div class="col-12 d-flex ps-4">
                    <div>
                      <img class="me-2" width="60" src="<?php $SERVER_URI ?>images/icon-placeholder.webp" alt="">
                    </div>
                    <div>
                      <h4 class="text-primary fs-6 fw-bold">Foto Depósito</h4>
                      <p>Con este módulo puede depositar cheques de forma rápida y sin esfuerzo simplemente tomando una foto del cheque y seleccionando la cuenta. Nuestro sistema procesará su depósito y le notificará por correo electrónico una vez que se complete la transacción. Esta forma rápida y conveniente de depositar cheques le ahorra tiempo y esfuerzo, lo que le permite concentrarse en las cosas que más importan.</p>
                      <a href="javascript:void(0)"><button type="button" class="btn btn-link text-decoration-none ps-0 pt-0 fw-bold fs-14">
                        Conoce más <i class="fa-solid fa-arrow-right-long"></i>
                      </button></a>
                    </div>
                  </div>
                </div>
                <!-- Home Banking -->
                <div class="row pt-3">
                  <div class="col-12 d-flex ps-4">
                    <div>
                      <img class="me-2" width="60" src="<?php $SERVER_URI ?>images/icon-placeholder.webp" alt="">
                    </div>
                    <div>
                      <h4 class="text-primary fs-6 fw-bold">Home Banking</h4>
                      <p>Su cooperativa en cualquier lugar. Sistema disponible 24/7 donde puedes realizar, verificación de cuentas, balances disponibles, acceder a detalles de sus préstamos,l hacer pagos y mucho más.</p>
                      <a href="javascript:void(0)"><button type="button" class="btn btn-link text-decoration-none ps-0 pt-0 fw-bold fs-14">
                        Conoce más <i class="fa-solid fa-arrow-right-long"></i>
                      </button></a>
                    </div>
                  </div>
                </div>
                <!-- Móvil Coop -->
                <div class="row pt-3">
                  <div class="col-12 d-flex ps-4">
                    <div>
                      <img class="me-2" width="60" src="<?php $SERVER_URI ?>images/icon-placeholder.webp" alt="">
                    </div>
                    <div>
                      <h4 class="text-primary fs-6 fw-bold">Móvil Coop</h4>
                      <p>Aplicación que permite a su cooperativa ofrecer a sus socios acceso a sus cuentas a través de su dispositivo móvil.</p>
                      <a href="javascript:void(0)"><button type="button" class="btn btn-link text-decoration-none ps-0 pt-0 fw-bold fs-14">
                        Conoce más <i class="fa-solid fa-arrow-right-long"></i>
                      </button></a>
                    </div>
                  </div>
                </div>
                <!-- Shared Branch -->
                <div class="row pt-3">
                  <div class="col-12 d-flex ps-4">
                    <div>
                      <img class="me-2" width="60" src="<?php $SERVER_URI ?>images/icon-placeholder.webp" alt="">
                    </div>
                    <div>
                      <h4 class="text-primary fs-6 fw-bold">Shared Branch</h4>
                      <p>Con su amplia red de cooperativas participantes, Shared Branch empodera a sus socios con una multitud de opciones para administrar sus finanzas. Los socios pueden realizar fácilmente depósitos, retiros y pagos en cualquiera de las cooperativas que forman parte de la red COOP. Además, pueden realizar transacciones en más de 5,000 puntos de servicio ubicados fuera de Puerto Rico, lo que les brinda una comodidad y accesibilidad sin igual.</p>
                      <a href="javascript:void(0)"><button type="button" class="btn btn-link text-decoration-none ps-0 pt-0 fw-bold fs-14">
                        Conoce más <i class="fa-solid fa-arrow-right-long"></i>
                      </button></a>
                    </div>
                  </div>
                </div>
                <!-- Text Coop -->
                <div class="row pt-3">
                  <div class="col-12 d-flex ps-4">
                    <div>
                      <img class="me-2" width="60" src="<?php $SERVER_URI ?>images/icon-placeholder.webp" alt="">
                    </div>
                    <div>
                      <h4 class="text-primary fs-6 fw-bold">Text Coop</h4>
                      <p>Nuestros innovadores Text Coop permite a los miembros acceder y solicitar información sobre sus cuentas sin esfuerzo en cualquier momento, todo a través de la comodidad de los mensajes de texto utilizando palabras claves y simples.</p>
                      <a href="javascript:void(0)"><button type="button" class="btn btn-link text-decoration-none ps-0 pt-0 fw-bold fs-14">
                        Conoce más <i class="fa-solid fa-arrow-right-long"></i>
                      </button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div id="pane-E" class="card shadow-none tab-pane fade" role="tabpanel" aria-labelledby="tab-E">
            <div class="card-header border-0 p-4 bg-light-primary rounded-2 mb-2" role="tab" id="heading-E">
                <h5 class="mb-3">
                    <a class="text-decoration-none" data-bs-toggle="collapse" href="#collapse-E" aria-expanded="true" aria-controls="collapse-E">
                      <div class="icon-text-box">
                        <div class="icon-wrapper p-2 mx-auto my-auto float-start ventas-y-automatizacion me-2"></div>
                        <div class="pt-2">Ventas y Automatización</div>
                      </div>
                    </a>
                </h5>
            </div>
            <div id="collapse-E" class="collapse" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-E">
              <div class="card-body">
                <div class="row py-4 mt-5">
                  <div class="col">
                    <h3 class="fs-3 fw-bold text-primary">Ventas y Automatización:</h3>
                  </div>
                </div>
                <!-- Helvetia CRM -->
                <div class="row pt-3">
                  <div class="col-12 d-flex ps-4">
                    <div>
                      <img class="me-2" width="60" src="<?php $SERVER_URI ?>images/icon-placeholder.webp" alt="">
                    </div>
                    <div>
                      <h4 class="text-primary fs-6 fw-bold">Helvetia CRM</h4>
                      <p>El módulo de CRM permite el acceso a todos los trámites que el socio lleva a cabo en la institución, a través de cualquier canal utilizado por el socio. Faculta el ajustar procesos de negocios integrados con NCUS y además procesos que no necesariamente se llevan a cabo dentro de NCUS. Desde reclamaciones a procesos de negocios de suplidores de la institución, cada uno de ellos puede ser modelado en un flujo de trabajo que garantice un proceso sistemático y ordenado.</p>
                      <a href="javascript:void(0)"><button type="button" class="btn btn-link text-decoration-none ps-0 pt-0 fw-bold fs-14">
                        Conoce más <i class="fa-solid fa-arrow-right-long"></i>
                      </button></a>
                    </div>
                  </div>
                </div>
                <!-- Sentinel -->
                <div class="row pt-3">
                  <div class="col-12 d-flex ps-4">
                    <div>
                      <img class="me-2" width="60" src="<?php $SERVER_URI ?>images/icon-placeholder.webp" alt="">
                    </div>
                    <div>
                      <h4 class="text-primary fs-6 fw-bold">Sentinel</h4>
                      <p>Es el producto por excelencia para el manejo de contenido electrónico conocido por sus siglas en inglés ECM (Electronic Content Management). Esta plataforma permite la centralización de los documentos y reportes importantes de un negocio en un solo lugar y de manera segura. Sentinel es la solución ideal para el manejo y almacenamiento de documentos electrónicos con el fin de reducir gastos operacionales y promover la eficiencia en los procesos de la empresa.</p>
                      <a href="<?php $SERVER_URI ?>soluciones-sentinel.php"><button type="button" class="btn btn-link text-decoration-none ps-0 pt-0 fw-bold fs-14">
                        Conoce más <i class="fa-solid fa-arrow-right-long"></i>
                      </button></a>
                    </div>
                  </div>
                </div>
              </div>
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
        <a class="text-decoration-none" href="<?php $SERVER_URI ?>contactenos.php">
          <button class="text-white btn btn-primary mt-3">Conoce más sobre nosotros</button>
        </a>
      </div>
    </div>
  </div>
</div>
<?php
include_once ('templates/footer.php');
?>