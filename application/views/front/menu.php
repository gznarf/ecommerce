
<!--Header- NabVar-->
  <div class="container-fluid py-3 text-center logo-header">
    <img src="assets/img/logo.png">
</div>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
  <a class="navbar-brand">
  </a>
  <a class="navbar-brand text-light" href="<?php echo base_url('');?>">Ferretex</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbatToggler" aria-controls="navbatToggler" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbatToggler">
  <div class="navbar-nav mr-auto ml-auto text-center">
    <a class="nav-link <?php if($this->uri->segment(1)==""){echo "active";}?>" href="<?php echo base_url('');?>">Inicio</a>
    <a class="nav-link <?php if($this->uri->segment(1)=="nosotros"){echo "active";}?>" href="<?php echo base_url('nosotros');?>">Nosotros</a>
    <a class="nav-link <?php if($this->uri->segment(1)=="productos"){echo "active";}?>" href="<?php echo base_url('productos');?>">Productos</a>
    <a class="nav-link <?php if($this->uri->segment(1)=="comercializacion"){echo "active";}?>" href="<?php echo base_url('comercializacion');?>">Comercialización</a>
    <a class="nav-link <?php if($this->uri->segment(1)=="terminos"){echo "active";}?>" href="<?php echo base_url('terminos');?>">Términos y uso</a>
    <a class="nav-link <?php if($this->uri->segment(1)=="contacto"){echo "active";}?>" href="<?php echo base_url('contacto');?>">Contactos</a>
  </div>
  </div>
</nav>
 <!--End Header- NabVar-->