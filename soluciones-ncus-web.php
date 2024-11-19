<?php

$PageTitle = "Soluciones - NCUS Web";
$page = "ncus web";

function customPageHeader()
{ ?>
<!--Arbitrary HTML Tags-->
<?php }

include_once('templates/header.php'); ?>

<div class="container-fluid">
    <div class="row header-bg-img-ncus py-xl-5 py-3">
        <h1 class="text-center text-white">NCUS Web</h1>
    </div>
</div>

<div class="container-lg">
    <div class="row pt-4 pt-100 pb-64 d-flex mio-bg-gradient">
        <div class="col-sm-4">
            <h1 class="fs-3 fw-bold text-primary">NCUS Web</h1>
        </div>
        <div class="col-sm-8">
            <p>NCUS Web es un sistema diseñado especialmente para la automatización de cooperativas de ahorro y crédito.
                Proveemos las herramientas más novedosas para ofrecer a los socios una diversidad de servicios
                beneficiosos.
            </p>
            <p>NCUS Web es el producto más completo para cooperativas de ahorro y crédito en Puerto Rico, cubriendo
                todas las necesidades del mercado. Nuestro departamento de desarrollo está constantemente incorporando
                nuevas tecnologías y desarrollando nuevos productos para fortalecer aún más este sistema.
            </p>
        </div>
    </div>
</div>

<!--Sección Modelos Básicos-->
<div class="container-fluid responsive-tabs bg-light-grey">

    <div class="container">

        <div class="row text-center py-5">
            <h2 class="text-primary fw-bold">Modelos Básicos</h2>
        </div>

        <ul class="nav nav-tabs justify-content-between border-0 mio-bg-gradient-alt" role="tablist">
            <li class="nav-item col text-center">
                <a id="tab-A" href="#pane-A" class="nav-link border border-0 bg-transparent active" data-bs-toggle="tab" data-bs-target="#pane-A"
                    role="tab">
                    <button class="border border-0 bg-transparent" type="button">
                        <div class="icon-text-box d-flex flex-column gap-2">
                            <div class="icon-wrapper p-2 mx-auto my-auto area-de-caja"></div>
                            <h3 class="fs-6 fw-500 d-none d-md-block">Área de caja</h3>
                        </div>
                    </button>
                </a>
            </li>
            <li class="nav-item col text-center">
                <a id="tab-B" href="#pane-B" class="nav-link border border-0 bg-transparent" data-bs-toggle="tab" data-bs-target="#pane-B"
                    role="tab">
                    <button class="border border-0 bg-transparent" type="button">
                        <div class="icon-text-box d-flex flex-column gap-2">
                            <div class="icon-wrapper p-2 mx-auto my-auto prestamos"></div>
                            <h3 class="fs-6 fw-500 d-none d-md-block">Área de préstamos</h3>
                        </div>
                    </button>
                </a>
            </li>
            <li class="nav-item col text-center">
                <a id="tab-C" href="#pane-C" class="nav-link border border-0 bg-transparent" data-bs-toggle="tab" data-bs-target="#pane-C"
                    role="tab">
                    <button class="border border-0 bg-transparent" type="button">
                        <div class="icon-text-box d-flex flex-column gap-2">
                            <div class="icon-wrapper p-2 mx-auto my-auto contabilidad"></div>
                            <h3 class="fs-6 fw-500 d-none d-md-block">Contabilidad</h3>
                        </div>
                    </button>
                </a>
            </li>
            <li class="nav-item col text-center">
                <a id="tab-D" href="#pane-D" class="nav-link border border-0 bg-transparent" data-bs-toggle="tab" data-bs-target="#pane-D"
                    role="tab">
                    <button class="border border-0 bg-transparent" type="button">
                        <div class="icon-text-box d-flex flex-column gap-2">
                            <div class="icon-wrapper p-2 mx-auto my-auto computos"></div>
                            <h3 class="fs-6 fw-500 d-none d-md-block">Centro de cómputos</h3>
                        </div>
                    </button>
                </a>
            </li>
            <li class="nav-item col text-center">
                <a id="tab-E" href="#pane-E" class="nav-link border border-0 bg-transparent" data-bs-toggle="tab" data-bs-target="#pane-E"
                    role="tab">
                    <button class="border border-0 bg-transparent" type="button" role="tab">
                        <div class="icon-text-box d-flex flex-column gap-2">
                            <div class="icon-wrapper p-2 mx-auto my-auto administracion"></div>
                            <h3 class="fs-6 fw-500 d-none d-md-block">Administración</h3>
                        </div>
                    </button>
                </a>
            </li>
        </ul>

        <div id="content" class="tab-content mt-5" role="tablist">
            <div id="pane-A" class="card shadow-none tab-pane fade mb-3 active show" role="tabpanel"
                aria-labelledby="tab-A">
                <div class="card-header bg-light-primary border-0 p-4 rounded-2" role="tab" id="heading-A">
                    <h5 class="mb-3">
                        <a class="text-decoration-none" data-bs-toggle="collapse" href="#collapse-A"
                            aria-expanded="true" aria-controls="collapse-A">
                            <div class="icon-text-box">
                                <div class="icon-wrapper p-2 mx-auto my-auto float-start area-de-caja me-2"></div>
                                <div class="pt-2">Modelo área de caja</div>
                            </div>
                        </a>
                    </h5>
                </div>
                <div id="collapse-A" class="collapse" data-bs-parent="#content" role="tabpanel"
                    aria-labelledby="heading-A">
                    <div class="card-body bg-light-grey">
                        <div class="row py-2">
                            <div class="col">
                                <h3 class="fs-4 fw-bold text-primary md-mt-3">Modelo área de caja</h3>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!-- Módulo de Área de Caja -->
                                <div id="mobile-side-scroll" class="row">
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Acciones:</h3>
                                            <p>Retiro y depósito de acciones con clave de seguridad.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Cuentas de ahorros: </h3>
                                            <p>Manejo de múltiples cuentas de ahorros.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Préstamos:</h3>
                                            <p>Pagos múltiples y abonos al principal, acumulación de recargos e
                                                intereses no pagados.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Pago de utilidades: </h3>
                                            <p>Cobro de agua, luz, teléfono y transferencia mecanizada al BPPR.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Giros y cheques de gerente: </h3>
                                            <p>Servicio de venta y cuadre por cajero.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Master Card: </h3>
                                            <p>Cobro y adelanto, exportación de balances a NCUS.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Certificado de ahorro: </h3>
                                            <p>Manejo de certificados, retención del 17%, avisos de renovación.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Fondos retenidos y suspensión de
                                                pago:</h3>
                                            <p>Retención de fondos y suspensión de pagos de cheques.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Entradas de Jornal:</h3>
                                            <p>Entradas contables autorizadas por la gerencia.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Control de cajeros:</h3>
                                            <p>Control de efectivo y cheques recibidos.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Cuadre de cajero:</h3>
                                            <p>Detalle de cada transacción, sin manipulación de cuadre.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Entradas reversivas: </h3>
                                            <p>Requiere clave de seguridad, asignada al supervisor de caja.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="pane-B" class="card shadow-none tab-pane fade mb-3" role="tabpanel" aria-labelledby="tab-B">
                <div class="card-header border-0 p-4 bg-light-primary rounded-2" role="tab" id="heading-B">
                    <h5 class="mb-3">
                        <a class="text-decoration-none" data-bs-toggle="collapse" href="#collapse-B"
                            aria-expanded="false" aria-controls="collapse-B">
                            <div class="icon-text-box">
                                <div class="icon-wrapper p-2 mx-auto my-auto float-start prestamos me-2"></div>
                                <div class="pt-2">Modelo área de préstamos</div>
                            </div>
                        </a>
                    </h5>
                </div>
                <div id="collapse-B" class="collapse" data-bs-parent="#content" role="tabpanel"
                    aria-labelledby="heading-B">
                    <div class="card-body bg-light-grey">
                        <div class="row py-2">
                            <div class="col">
                                <h3 class="fs-4 fw-bold text-primary mt-3">Modelo área de préstamos</h3>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!-- Módulo de área de préstamos -->
                                <div id="mobile-side-scroll" class="row">
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Solicitud electrónica:</h3>
                                            <p>Utiliza información existente para agilizar el proceso.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Emisión de préstamo:</h3>
                                            <p>Proceso ágil con cobro de intereses adelantados, seguros y más.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Reportes de préstamos:</h3>
                                            <p>Auxiliares, balances, amortización y más con Crystal Report.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Seguimiento de cobro: </h3>
                                            <p>Proceso mecanizado y registro de promesas de pago.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Quiebra y legal:</h3>
                                            <p>Auxiliar de préstamos en quiebra y acción legal.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Préstamos Hipotecarios:</h3>
                                            <p>Manejo de auxiliares, seguros y estados de reserva.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Préstamos de construcción:</h3>
                                            <p>Líneas de crédito y manejo de desembolsos e intereses.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Línea de Crédito:</h3>
                                            <p>Desembolsos vía caja o cajeros automáticos, detalle de transacciones
                                                mensuales.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="pane-C" class="card shadow-none tab-pane fade mb-3" role="tabpanel" aria-labelledby="tab-C">
                <div class="card-header border-0 p-4 bg-light-primary rounded-2" role="tab" id="heading-C">
                    <h5 class="mb-3">
                        <a class="text-decoration-none" data-bs-toggle="collapse" href="#collapse-C"
                            aria-expanded="false" aria-controls="collapse-C">
                            <div class="icon-text-box">
                                <div class="icon-wrapper p-2 mx-auto my-auto float-start contabilidad me-2"></div>
                                <div class="pt-2">Modelo contabilidad</div>
                            </div>
                        </a>
                    </h5>
                </div>
                <div id="collapse-C" class="collapse" data-bs-parent="#content" role="tabpanel"
                    aria-labelledby="heading-C">
                    <div class="card-body bg-light-grey">
                        <div class="row py-2">
                            <div class="col">
                                <h3 class="fs-4 fw-bold text-primary mt-3">Modelo contabilidad</h3>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!-- Módulo contabilidad -->
                                <div id="mobile-side-scroll" class="row">
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Fin de día::</h3>
                                            <p>Contabilidad integrada con reportes diarios.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Inversiones: </h3>
                                            <p>Auxiliar y acumulado de intereses.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Cheques devueltos: </h3>
                                            <p>Mantenimiento y opciones de redeposito.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Préstamos incobrables: </h3>
                                            <p>Auxiliar y reporte de préstamos llevados a reserva.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Reporte de cuentas inactivas: </h3>
                                            <p>Auxiliar y programa de capitalización.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Múltiples reportes: </h3>
                                            <p>Por edades, distritos, tipos de cuentas y más con Crystal Report.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">MAS 90: </h3>
                                            <p>Integración y ajuste contable sin cerrar meses anteriores.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Cuentas a pagar: </h3>
                                            <p>Retención y generación de formas de Hacienda.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Nómina: </h3>
                                            <p>Depósito directo y eliminación de impresión de cheques.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Reconciliación bancaria: </h3>
                                            <p>Cancelación automática de cheques con cuentas operacionales.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Secrecy Act: </h3>
                                            <p>Reportes de lavado de dinero y cumplimiento legal.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Reporte de Asambleas: </h3>
                                            <p>Reportes por distrito y etiquetas.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Auditoría: </h3>
                                            <p>Cartas de confirmación y selección de casos.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Activo fijo: </h3>
                                            <p>Auxiliar y depreciación mensual.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">COSSEC: </h3>
                                            <p>Reporte completo para el sistema de COSSEC.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="pane-D" class="card shadow-none tab-pane fade mb-3" role="tabpanel" aria-labelledby="tab-D">
                <div class="card-header border-0 p-4 bg-light-primary rounded-2" role="tab" id="heading-D">
                    <h5 class="mb-3">
                        <a class="text-decoration-none" data-bs-toggle="collapse" href="#collapse-D"
                            aria-expanded="false" aria-controls="collapse-D">
                            <div class="icon-text-box">
                                <div class="icon-wrapper p-2 mx-auto my-auto float-start computos me-2"></div>
                                <div class="pt-2">Modelo centro de cómputos</div>
                            </div>
                        </a>
                    </h5>
                </div>
                <div id="collapse-D" class="collapse" data-bs-parent="#content" role="tabpanel"
                    aria-labelledby="heading-D">
                    <div class="card-body bg-light-grey">
                        <div class="row py-2">
                            <div class="col">
                                <h3 class="fs-4 fw-bold text-primary mt-3">Modelo centro de cómputos</h3>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!-- Módulo centro de cómputos -->
                                <div id="mobile-side-scroll" class="row">
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Archivo de parámetros:</h3>
                                            <p>Modificaciones operacionales con más de 800 parámetros.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Desembolso NaviCoop y VeraCoop:
                                            </h3>
                                            <p>Cómputos de interés y desembolso.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">ACH: </h3>
                                            <p>Procesamiento de depósitos, retiros y pagos.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Transferencia: </h3>
                                            <p>Acuerdos para transferencias entre cuentas.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Estados de cuentas: </h3>
                                            <p>Impresión vía láser o impacto.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Descuento nominal: </h3>
                                            <p>Procesamiento de múltiples empresas.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Reporte de crédito: </h3>
                                            <p>Envío de cartera a TransUnion y EquiFax.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="pane-E" class="card shadow-none tab-pane fade mb-3" role="tabpanel" aria-labelledby="tab-E">
                <div class="card-header border-0 p-4 bg-light-primary rounded-2" role="tab" id="heading-E">
                    <h5 class="mb-3">
                        <a class="text-decoration-none" data-bs-toggle="collapse" href="#collapse-E"
                            aria-expanded="false" aria-controls="collapse-E">
                            <div class="icon-text-box">
                                <div class="icon-wrapper p-2 mx-auto my-auto float-start administracion me-2"></div>
                                <div class="pt-2">Modelo de administración</div>
                            </div>
                        </a>
                    </h5>
                </div>
                <div id="collapse-E" class="collapse" data-bs-parent="#content" role="tabpanel"
                    aria-labelledby="heading-E">
                    <div class="card-body bg-light-grey">
                        <div class="row py-2">
                            <div class="col">
                                <h3 class="fs-4 fw-bold text-primary mt-3">Modelo de administración</h3>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!-- Módulo centro de administración -->
                                <div id="mobile-side-scroll" class="row">
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Seguridad:</h3>
                                            <ul>
                                                <li>Doble clave para acceso seguro.</li>
                                                <li>Vencimiento mensual de claves.</li>
                                                <li>Desconexión automática por inactividad.</li>
                                                <li>Asignación de programas según departamento.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Cambios archivos maestros:</h3>
                                            <p>Requiere clave de seguridad.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Registro de entradas especiales:
                                            </h3>
                                            <p>Transacciones críticas registradas permanentemente.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Fondo de cambio:</h3>
                                            <p>Diseño para evitar mal uso de fondos.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Cuadres de auxiliares, históricos y
                                                mayor general:</h3>
                                            <p>Comparaciones diarias.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="p-4 bg-white rounded-3 h-100">
                                            <h3 class="fs-6 text-primary text-bold">Balance de comprobación del mayor
                                                general:</h3>
                                            <p>Reporte diario.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-md mw-930 py-4 py-100">
    <div class="row">
        <div class="col-12 pb-40">
            <h1 class="text-center fs-3 fw-bold text-primary">Modelos Opcionales</h1>
        </div>
        <div class="row gx-md-2 mx-n24 custom-card">
          <!-- Tarjetas de diferenciadores -->
          <div class="col-md-8 d-none d-sm-block mx-auto">
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-center">
                <div class="col-1 align-items-center">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">ALAS - Automated Loan Application System</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-center">
                <div class="col-1 align-items-center">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">Cajeros Automáticos (ATM)</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-center">
                <div class="col-1 align-items-center">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">IDM (Intelligent Depository Module)</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-center">
                <div class="col-1 align-items-center">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">ENA (Enhanced Note Acceptor)</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-center">
                <div class="col-1 align-items-center">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">Control de Cajeros</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-center">
                <div class="col-1 align-items-center">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">Cuenta Corriente</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-center">
                <div class="col-1 align-items-center">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">Home Banking</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-center">
                <div class="col-1 align-items-center">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">HVIEW</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-center">
                <div class="col-1 align-items-center">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">Laser Check</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-center">
                <div class="col-1 align-items-center">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">OnBase</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-center">
                <div class="col-1 align-items-center">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">PagoCoop</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-center">
                <div class="col-1 align-items-center">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">Red de Cajeros</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-center">
                <div class="col-1 align-items-center">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">Sistema Troy</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-center">
                <div class="col-1 align-items-center">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">TeleCoop</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-center">
                <div class="col-1 align-items-center">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">eLoans</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-center">
                <div class="col-1 align-items-center">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">eNCUS</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Movil : Columna -->
          <div id="mobile-side-scroll" class="col d-sm-none">

            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-top">
                <div class="col-1 align-items-top">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">ALAS - Automated Loan Application System</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-top">
                <div class="col-1 align-items-top">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">Cajeros Automáticos (ATM)</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-top">
                <div class="col-1 align-items-top">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">IDM (Intelligent Depository Module)</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-top">
                <div class="col-1 align-items-top">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">ENA (Enhanced Note Acceptor)</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-top">
                <div class="col-1 align-items-top">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">Control de Cajeros</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-top">
                <div class="col-1 align-items-top">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">Cuenta Corriente</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-top">
                <div class="col-1 align-items-top">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">Home Banking</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-top">
                <div class="col-1 align-items-top">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">HVIEW</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-top">
                <div class="col-1 align-items-top">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">Laser Check</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-top">
                <div class="col-1 align-items-top">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">OnBase</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-top">
                <div class="col-1 align-items-top">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">PagoCoop</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-top">
                <div class="col-1 align-items-top">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">Red de Cajeros</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-top">
                <div class="col-1 align-items-top">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">Sistema Troy</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-top">
                <div class="col-1 align-items-top">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">TeleCoop</p>
                </div>
              </div>
            </div>
            <div class="card text-start mt-md-3">
              <div class="row p-2 p-md-3 align-items-top">
                <div class="col-1 align-items-top">
                  <img class="checked-list" src="images/check-circle-fill.svg" alt="" />
                </div>
                <div class="col-11 align-items-center">
                  <p class="mb-1 text-primary">eLoans</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Fin elementos móvil -->
        </div>
    </div>
</div>


<!-- Template Más Información -->
<?php include_once('templates/mas-informacion.php'); ?>

<!-- Template Beneficios -->
<?php include_once('templates/beneficios.php'); ?>

<?php include_once('templates/footer.php');?>

<?php
include_once('templates/footer.php');
?>