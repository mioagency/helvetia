<?php

$PageTitle = "Soluciones - Sentinel";
$page = "sentinel";

function customPageHeader()
{ ?>
<!--Arbitrary HTML Tags-->
<?php }

include_once('templates/header.php'); ?>

<div class="container-fluid">
    <div class="row header-bg-img py-xl-5 py-3">
        <h1 class="text-center text-white">Sentinel</h1>
    </div>
</div>

<section class="container-lg mw-1120">
    <div class="row pt-4 pt-100 pb-64 d-flex mio-bg-gradient">
        <div class="col-sm-4">
            <H2 class="fs-3 fw-bold text-primary">Sentinel</H2>
        </div>
        <div class="col-sm-8">
            <p>Sentinel es el producto de excelencia para comenzar esta fase de manejo de contenido electrónico,
                conocido por sus siglas en inglés, ECM (Electronic Content Management). Como parte de la solución se
                incluye un módulo de COLD para la importación de reportes diarios y mensuales. Adicional se incluye
                “Scanning Station”, en adelante SCANNING STATION. Integrado con la aplicación de ALAS y APERTURA, es la
                base para el expediente electrónico del socio.
            </p>
        </div>
    </div>
</section>

<section class="container-lg mw-1120 pt-4 pb-4 py-100">
    <div class="row text-center mx-auto mw-930 pb-4">
        <h2 class="fs-3 fw-bold text-primary pb-4">Componentes de Sentinel para <br />Documentos de Apertura y Préstamos
        </h2>
    </div>
    <div class="row d-flex gx-md-5 align-items-center">
        <div class="col-sm-6">
            <div class="pb-5">
                <img class="img-fluid pb-2" src="images/teller-scanning.svg" alt="scanning station icon">
                <H3 class="fs-4 fw-bold text-primary pb-3">Scanning Station</H3>
                <p>Se utiliza para digitalizar todo documento externo incluyendo los que se deben imprimir para obtener
                    firmas originales. Su comunicación con ALAS y APERTURA permite que reciba todos los campos índices
                    desde la aplicación a la vez que facilita al usuario el trabajo de digitalizar e indexar los
                    documentos.
                </p>
            </div>
            <div>
                <img class="img-fluid pb-2" src="images/helv-api.svg" alt="Helvetica API icon">
                <H3 class="fs-4 fw-bold text-primary pb-3">API de Sentinel</H3>
                <p>El API de Sentinel es el medio para que todos los documentos de ALAS y Apertura entren a Sentinel de
                    forma automática. La ventaja del API es que los documentos entran al momento de ser creados por el
                    sistema, permitiendo acceso inmediato a los mismos por todos los usuarios.
                </p>
            </div>
        </div>
        <div class="col-sm-6 mb-4">
            <img class="rounded-4 img-fluid" src="images/temp-image.svg" alt="temp-image">
        </div>
    </div>
</section>

<!-- Template Más Información -->
<?php include_once('templates/mas-informacion.php'); ?>

<section class="container-lg mw-1120 pt-5 py-100">
    <div class="row d-flex gx-md-5 align-items-center">
        <div class="col-sm-5 d-none d-sm-block">
            <img class="rounded-4 img-fluid" src="images/temp-image.svg" alt="temp-image">
        </div>
        <div class="col-sm-7">
            <div class="pb-5">
                <H2 class="fs-3 fw-bold text-primary pb-3">Integración de Scanning Station</H3>
                    <p>Con la integración de Desktop Scanning con el módulo de ALAS y Apertura se obtienen los
                        siguientes beneficios:

                        Todos los oficiales y los usuarios con acceso a Sentinel y los permisos adecuados pueden acceder
                        fácilmente a todos los documentos asociados con un socio y sus cuentas. Esto elimina un problema
                        crítico actual que es la dependencia de expedientes físicos que pudieran no estar completamente
                        actualizados.

                        Sentinel es un sistema con una plataforma de infraestructura estandarizada, continuamente
                        actualizada y con el potencial de lograr que la cooperativa reduzca costos innecesarios de
                        impresión pero más aún contar con la seguridad de tener todos sus documentos protegidos si
                        cuentan con los sistemas de respaldo necesarios.
                    </p>
            </div>
        </div>
    </div>
</section>

<!-- Template Beneficios -->
<?php include_once('templates/beneficios.php'); ?>

<?php
include_once('templates/footer.php');
?>