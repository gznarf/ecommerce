<!-- Footer -->
<footer class="container-fluid bg-grey py-5">
    <div class="container">
       <div class="row">
          <div class="col-md-6">
             <div class="row">
                <div class="col-md-6 logo-part">
                   <div class="logo-footer">
                      <img src="<?php echo base_url();?>assets/img/logo.png" class="w-100 logo-footer" alt="Logo ferretex" >
                      <p class="texto text-center">767 Irigoyen, Corrientes, Argentina CP 3400</p>
                   </div>
                </div>
                <div class="col-md-6 px-4">
                   <h6>Nosotros</h6>
                   <p>Una compañia joven para ayudarlos en la construcción de sus proyectos más especiales.</p>
                   <a href="<?php echo base_url('nosotros');?>" class="btn-footer"> Más info </a><br>
                   <a href="<?php echo base_url('contacto');?>" class="btn-footer"> Contactenos</a>
                </div>
             </div>
          </div>
          <div class="col-md-6">
             <div class="row">
                <div class="col-md-6 px-4">
                   <h6>La empresa</h6>
                   <div class="row ">
                      <div class="col-md-6">
                         <ul>
                            <li> <a href="<?php echo base_url('');?>"> Inicio</a> </li>
                            <li> <a href="<?php echo base_url('nosotros');?>"> Nosotros</a> </li>
                            <li> <a href="<?php echo base_url('productos');?>"> Productos</a> </li>
                            <li> <a href="<?php echo base_url('contacto');?>"> Contacto</a> </li>
                         </ul>
                      </div>
                      <div class="col-md-6 px-4">
                         <ul>
                            <li> <a href="<?php echo base_url('contacto');?>"> Consultas</a> </li>
                            <li> <a href="<?php echo base_url('terminos');?>"> Términos</a> </li>
                            <li> <a href="<?php echo base_url('comercializacion');?>"> Modos de envío</a> </li>
                            <li> <a href="<?php echo base_url('comercializacion');?>"> Formas de Pago</a> </li>
                         </ul>
                      </div>
                   </div>
                </div>
                <div class="col-md-6 ">
                   <h6>Redes Sociales</h6>
                   <div class="social">
                      <a href="http://www.facebook.com"><i class="fab fa-facebook"></i></a>
                      <a href="http://www.instagram.com"><i class="fab fa-instagram"></i></a>
                      <a href="http://www.twitter.com"><i class="fab fa-twitter"></i></a>
                   </div>
                   <form class="form-footer my-3">
                      <input type="text"  placeholder="Buscar..." name="search">
                      <input type="button" value="Ir" >
                   </form>
                </div>
             </div>
          </div>
       </div>
    </div>
<!-- End Footer -->

<script src="<?php echo base_url();?>assets/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/dashboard.js"></script>
  </body>
</html>