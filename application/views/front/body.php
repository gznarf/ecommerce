<!-- Carousel -->
<section>
<div id="carousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/slide1.png" class="d-block w-100" alt="Imagen 01">
      <div class="carousel-caption d-none d-md-block text-dark">
        <div class='slide-content'>
          <div class='overlay'></div>
          <h3>Todas las herramientas</h3>
          <h2>Todas tus herramientas en un solo lugar.</h2>
        </div>
      </div> 
      
    </div>
    <div class="carousel-item">
      <img src="assets/img/slide2.png" class="d-block w-100" alt="Imagen 02">
      <div class="carousel-caption d-none d-md-block text-dark">
        <div class='slide-content'>
          <div class='overlay '></div>
          <h3>Kits de destornilladores</h3>
          <h2>Completa tus herramientas con los kits disponibles.</h2>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/slide3.png" class="d-block w-100" alt="Imagen 03">
      <div class="carousel-caption d-none d-md-block text-dark">
        <div class='slide-content'>
          <div class='overlay'></div>
          <h3>Tornillos y Clavos</h3>
          <h2>Disponible todos los tipos de tornillos y clavos que necesites.</h2>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>
</section>
<!--<div class="jumbotron jumbotron-fluid bg-light">
  <div class="container text-center">
    <h1 class="display-4">Ferretex</h1>
    <p class="lead">Una compañia joven para ayudarlos en la construcción de sus proyectos más especiales.</p>
  </div>
</div>-->


<!-- highlight Products-->
<section>
  <div class="container my-5">
    <hr class="">
    <h3 class="text-uppercase text-center mb-4 text-info">Productos destacados</h3>
    <?php foreach($destacados as $productos){?>
    <div class="row d-flex align-items-center py-3">
      <div class="col-md-7">
       <a href="<?php echo base_url("detalles_producto/$productos->id_producto");?>"> <h2 class="text-justify"><?php echo $productos->titulo ;?></a></br></br>
        <span class="text-muted"> <?php echo $productos->descripcion ;?></span>
      </div>
      <div class="col-md-5">
        <img  src="<?php echo base_url('./uploads/').$productos->imagen ;?>" width = "200px" height = "200px" alt="Productos">
      </div>
      <div class="col-md-5"> <h3 class="text-danger text-align-left"> <strong> $ <?php echo $productos->precio;?></strong></h3></div>
    </div>
    
    <hr class="">
    <?php }?>
</section>
<!-- End highlight products -->
