<?php
// Buscamos todas las imágenes (medida requerida 250px x 250px)
$files = glob("./images/clients/*.*");
?>
<div class="container-fluid pt-4 pb-5 px-0  bg-gray">
<div class="container pt-4 pb-5 mb-5">
  <div class="row text-center py-5">
    <h2 class="text-primary fw-bold">Clientes</h2>
    <div class="col col-md-7 mx-auto">
      <p class="pt-2">Hemos colaborado con una diversa gama de clientes, brindando soluciones efectivas y óptimas que impulsan su crecimiento y éxito.</p>
    </div>
  </div>
	<div id="carouselExampleControls" class="carousel" data-bs-theme="dark">
    <div class="carousel-inner">
        <?php
        // Mostramos mediante un loop cada una de las imágenes
        for ($i=1; $i<count($files); $i++)
        {
            $num = $files[$i];
            echo '<div class="carousel-item"><div class="img-wrapper"><img src="'.$num.'" alt="random image" class="d-block w-100"></div></div>';
            }
        ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
	</div>
</div>
</div>