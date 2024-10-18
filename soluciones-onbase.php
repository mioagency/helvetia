<?php

$PageTitle="Soluciones - OnBase";
$page="onbase";

function customPageHeader(){?>
<!--Arbitrary HTML Tags-->
<?php }

include_once('templates/header.php'); ?>

<div class="container-fluid">
    <div class="row header-bg-img py-xl-5 py-3">
        <h1 class="text-center text-white">OnBase<sup>®</sup></h1>
    </div>
</div>

<div class="container-lg">
    <div class="row pt-100 pb-64 pt-4 d-flex mio-bg-gradient">
        <div class="col-sm-4">
            <H1 class="fs-3 fw-bold text-primary">OnBase<sup>®</sup></H1>
        </div>
        <div class="col-sm-8">
            <p>OnBase<sup>®</sup> es una solución integral para la gestión electrónica de documentos, diseñada para optimizar las
                operaciones empresariales mediante la creación, organización y control dinámico de documentos. Esta
                plataforma web combina tecnologías avanzadas como la administración de documentos, flujos de trabajo, y
                gestión de imágenes, permitiendo a las organizaciones compartir eficientemente información entre
                empleados, socios comerciales, proveedores y clientes.
            </p>
        </div>
    </div>
</div>


<div class="container-md mw-930 py-4 py-100">
    <div class="row">
        <div class="col-12 pb-40">
            <h1 class="text-center fs-3 fw-bold text-primary">¿Por qué OnBase<sup>®</sup>?</h1>
        </div>
        <div class="col">
            <div class="accordion" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                            Gestión Integral de Documentos
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse show"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">OnBase<sup>®</sup> gestiona diversos tipos de documentos electrónicos,
                            incluyendo imágenes, reportes, archivos de aplicación, formas HTML, mensajes de correo
                            electrónico, y archivos multimedia.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Ciclo de Vida Completo del Documento
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Desde la creación, almacenamiento, recuperación, revisión hasta la
                            distribución de documentos.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            Integración y Eficiencia
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Utiliza una única aplicación basada en web con una base de datos SQL
                            única, facilitando la integración de procesos y eliminando la necesidad de múltiples
                            interfaces y bases de datos.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFour" aria-expanded="false"
                            aria-controls="flush-collapseFour">
                            Escalabilidad y Rendimiento:
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Desarrollada bajo una arquitectura cliente / servidor, aprovechando
                            bases de datos robustas como Oracle y Microsoft SQL Server para garantizar alto desempeño y
                            escalabilidad.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFive" aria-expanded="false"
                            aria-controls="flush-collapseFive">
                            Acceso Versátil
                        </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Permite acceso desde navegadores web, clientes de escritorio,
                            Windows Explorer<sup>®</sup> y otras aplicaciones.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                            Configuración Sin Programación
                        </button>
                    </h2>
                    <div id="flush-collapseSix" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Totalmente configurable a través de herramientas de interfaz
                            gráfica, permitiendo implementaciones rápidas y adaptaciones sin costosas programaciones.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Template Beneficios -->
<?php include_once ('templates/beneficios.php'); ?>

<?php
include_once('templates/footer.php');
?>