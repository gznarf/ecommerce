
<!--Header- NabVar-->
  <div class="container-fluid py-3 text-center logo-header">
    <img src="<?php echo base_url();?>assets/img/logo.png">
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
  <div class="navbar mr-auto ml-auto text-left">
    <a class="text-left nav-link" <?php if($this->uri->segment(1)=="carrito"){echo "active";}?> href="<?php echo base_url('carrito');?>">Carrito</a>
    <a class="text-left nav-link" <?php if($this->uri->segment(1)=="cuenta"){echo "active";}?> href="<?php echo base_url('cuenta');?>">Cuenta</a>
    <ul class="navbar-nav nav-flex-icons ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle"
            style="height: 34px;" alt="avatar image">
        </a>
        <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="navbarDropdownMenuLink-55">
          <a class="dropdown-item" href="#!">Logout</a>
          <a class="dropdown-item" href="#!">Settings</a>
          <a class="dropdown-item" href="#!">Profile</a>
        </div>
      </li>
    </ul>
  </div>
  </div>
</nav>
 <!--End Header- NabVar-->