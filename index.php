<?php
session_start();
   include("includes/encabezado.php");
   include("includes/menu.php");
?>
<br>

<!-- añadimos el titulo de nuestro cuerpo y el texto que queramos añadirle -->

<h1>¿Quieres ahorrar en tu factura de la luz?<br> Pásate a la Energía Solar</h1>

<p> Te hacemos un presupuesto para la instalación de placas fotovoltáicas en tu vivienda, en tu negocio o en tu comunidad de propietarios sin compromiso e informándote de las ayudas y subvenciones y de su tramitación para que te la concedan. Contacta con nosotros para informarte sobre la instalación de placas solares en Canarias.</p>
<br>

<!--Creamos el carrusel solo diapositivas -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/placa1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/placa2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/termo1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>
<!--Fin Carrusel-->
         
   
<?php
include("includes/pie.php");
?>
         
   
   
     



