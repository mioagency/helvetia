<?php

$PageTitle="Helvetia - Servicio Técnico";

function customPageHeader(){?>
  <!--Arbitrary HTML Tags-->
<?php }

include_once('templates/header.php'); ?>

<div class="container-fluid">
  <div class="row header-bg-img py-xl-5 py-3">
    <h1 class="text-center text-white">OnCall</h1>
  </div>
</div>

<section class="container-lg mw-1120">
  <div class="row py-100 py-4 mio-bg-gradient">
    <div class="col-12 col-sm-6">
      <h2 class="fs-3 fw-bold text-primary pb-2">¿Qué es OnCall?</h2>
      <p>Nuestro servicio de OnCall ha sido diseñado para proveer asistencia operacional a nuestros clientes sobre los diferentes productos que tenemos. Nuestros técnicos se encargan de detectar cualquier problema con el sistema y canalizarlo a través del departamento correspondiente.
      </p> 
      <p>De encontrarse algún problema en la programación, se verifican los programas con la versión más reciente para corregir la situación en el menor tiempo posible. Otra de las funciones de este departamento, siempre y cuando la situación lo amerite, es hacer mejoras al sistema a través de conexión remota para agilizar los procesos de los clientes y no esperar por un técnico a ser asignado para que realice una visita a las localidades del cliente.
      </p>
    </div>
    <div class="col-12 col-sm-6">
      <img class="img-fluid" src="images/oncall-form-1.svg" alt="captura de formulario para servicio OnCall">
    </div>
  </div>
</section>

<section class="container-fluid bg-light-grey pt-100 pb-500 py-4 px-0">
  <div class="row mw-1120 pb-4 mx-auto">
    <div class="col-12 px-0">
      <h2 class="fs-3 text-center fw-bold text-primary pb-2">Registro de Servicio</h2>
      <div id="mobile-side-scroll" class="col d-flex flex-wrap custom-card--oncall">
        <div class="card text-center mt-md-3">
          <div class="p-4">
            <div class="card_number fs-5 text-white fw-medium">1</div>
            <p class="my-3 fs-6 text-primary fw-medium">Confirme sus datos</p>
          </div>
        </div>
        <div class="card text-center mt-md-3">
          <div class="p-4">
            <div class="card_number fs-5 text-white fw-medium">2</div>
            <p class="my-3 fs-6 text-primary fw-medium">Seleccione el servicio correspondiente</p>
          </div>
        </div>
        <div class="card text-center mt-md-3">
          <div class="p-4">
              <div class="card_number fs-5 text-white fw-medium">3</div>
              <p class="my-3 fs-6 text-primary fw-medium">Ingrese una breve descripción de su situación</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Form con margin negativo -->
<section class="mt-n500">
  <div class="col-12 mw-930 mx-auto pt-3">
      <img class="img-fluid" src="images/oncall-form-2.svg" alt="captura de formulario para servicio OnCall">
    </div>
</section>

<section class="container-lg mw-1120 mio-bg-gradient">
  <div class="row py-100 py-4">
    <div class="col-12 px-0">
      <h2 class="fs-3 text-center fw-bold text-primary pb-2">Carga de Archivos</h2>
      <div id="mobile-side-scroll" class="col d-flex flex-wrap justify-content-md-center custom-card--oncall">
        <div class="card text-center mt-md-3">
          <div class="p-4">
            <div class="card_number fs-5 text-white fw-medium">1</div>
            <p class="my-3 fs-6 text-primary fw-medium">Seleccione el documento (Browse)</p>
          </div>
        </div>
        <div class="card text-center mt-md-3">
          <div class="p-4">
            <div class="card_number fs-5 text-white fw-medium">2</div>
            <p class="my-3 fs-6 text-primary fw-medium">Enviar archivo</p>
          </div>
        </div>
      </div>
    </div>
    <p class="pt-4 text-center mw-760 mx-auto">De ser necesario, puede incluir Documentación de Apoyo a su solicitud de Servicio. Todo documento debe estar en formato PDF. El sistema le notificará si su documento fue incluido exitosamente.
    </p>

    <div class="col-12 mw-930 mx-auto pt-4">
      <img class="img-fluid" src="images/oncall-form-3.svg" alt="captura de formulario para servicio OnCall">
    </div>
    <p class="fs-5 fs-md-4 fw-bold text-center">De no ser necesario proceda con <span class="text-primary">Completa Solicitud.</span></p>
  </div>
</section>

<section class="container-fluid bg-light-grey py-5">
  <div class="row py-100 pb-4 mw-930 mx-auto">
    <div class="col-12">
      <h2 class="fs-3 text-center fw-bold text-primary pb-3">Solicitud completada</h2>
      <p class="text-center">Una vez completada su solicitud recibirá una Confirmación en pantalla.
      </p>
    </div>
    <div class="col-12 mw-930 mx-auto mt-3">
      <img class="img-fluid" src="images/oncall-form-4.svg" alt="captura de formulario para servicio OnCall">
    </div>
    <p class="fs-5 fs-md-4 fw-bold text-center mb-5 mx-md-4">Si desea registrar otro servicio seleccione <span class="text-primary">Nuevo Servicio</span>, de lo contrario puede <span class="text-primary">Salir del Sistema.</span></p>
    <p class="text-center mw-760 mx-auto">Adicionalmente estará recibiendo una Confirmación al correo electrónico vinculado a su solicitud. El mismo detalla su número de caso y la descripción de su situación. 
    <br/><br/>
    Favor de NO escribir a este correo electrónico, el mismo es solo para confirmar su solicitud. Para seguimiento o si desea agregar algún detalle a su caso, favor comunicarse a nuestras oficinas</p>
    <div class="d-flex justify-content-center">
      <img src="images/phone-icn.svg" alt="" width="24px">
      <p class="fw-bold text fs-5 mb-0 mx-2">
        <a class="dark-grey text-decoration-none" href="tel:7877503300">787-750-3300</a>
      </p>
    </div>
  </div>
</section>


<?php
include_once('templates/footer.php');
?>