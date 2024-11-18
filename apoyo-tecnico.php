<?php

$PageTitle="Helvetia - Servicio Técnico";

function customPageHeader(){?>
  <!--Arbitrary HTML Tags-->
<?php }

include_once('templates/header.php'); ?>

<div class="container-fluid">
  <div class="row header-bg-img-oncall py-xl-5 py-3">
    <h1 class="text-center text-white">OnCall</h1>
  </div>
</div>

<section class="container-lg mw-1120">
  <div class="row py-100 pt-4 pb-5 mio-bg-gradient justify-content-sm-between justify-content-center">
    <div class="col-12 pb-4 col-sm-6">
      <h2 class="fs-3 fw-bold text-primary pb-2">Nuestro Apoyo Técnico:</h2>
      <p>Nuestro servicio de OnCall ha sido diseñado para proveer apoyo técnico a nuestros clientes sobre los diferentes productos que tenemos. Nuestros técnicos se encargan de detectar cualquier problema con el sistema y canalizarlo a través del departamento correspondiente.</p>
    </div>
    <div class="col-11 col-sm-5 ms-sm-4 p-5 border rounded-3 bg-white">
        <form>
          <h3 class="fs-5 fw-normal">Registrar un nuevo servicio</h3>
          <hr>
          <div class="mb-3">
            <label for="inputName" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="inputName" aria-describedby="nameHelp" placeholder="">
          </div>
          <div class="mb-3">
            <label for="inputPass" class="form-label">Contraseña</label>
            <input type="password" minlength="8" class="form-control" id="inputPass" aria-describedby="passHelp" placeholder="">
          </div>
          <button type="submit" class="btn w-100 btn-primary text-white">ENTRAR</button>
        </form>
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
    <p class="fs-5 fs-md-4 fw-bold text-center mb-5 mx-auto mw-760">Si desea registrar otro servicio seleccione <span class="text-primary">Nuevo Servicio</span>, de lo contrario puede <span class="text-primary">Salir del Sistema.</span></p>
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