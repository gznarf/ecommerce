<div class="container my-4">
<div class="row-8"><h1 class="text-left"></h1></div>
  <div class="row">
    <div class="col-md-6">
      <img src="<?php  echo base_url('./uploads/'.$imagen); ?>" class="figure-img img-fluid rounded" name="imagen_view">
    </div>
    
    <div class="col-md-6">
        <div><h1><?php echo $titulo ;?></h1></div>
        <p class="card-text text-left"><small class="text-muted">Cod. Producto: <?php echo $cod_producto;?></small></p>
        <div><h3 class="text-danger font-weight-bold">$ <?php echo $precio;?></h3></div>
        <div class="lead-detalles"><?php echo $descripcion;?></div>
       <?php $perfil = $this->session->userdata('logged_in');
       if($perfil){ ?>
                <input type="submit" name="agregar" class="btn btn-primary" value="Añadir">
              <?php }else{ ?>
                <div class="alert alert-warning" role="alert">
                  <?php echo "Debe iniciar sessión para poder comprar"?>
                </div>
                <?php }?>
    </div>
    </div>
  </div>

</div>
