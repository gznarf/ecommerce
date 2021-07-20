<section>
<div class="conatainer w-75 mx-auto">
    <div class="row">
        <div class="col-12 my-3">
          <h1>Productos</h1>
        </div>
        
    </div>
    <div class="row">
        <?php foreach($productos->result() as $producto){
            if($producto->stock > 0){
          ?>
        <div class="col-4 py-3">
        
       
          <div class="card" style="width: 20rem;">
          <a href="<?php echo base_url("detalles_producto/$producto->id_producto");?>"><img src="<?php echo base_url('./uploads/').$producto->imagen ;?>" class="card-img-top" width = "300px" height = "300px"  alt=""></a>
            <div class="card-body">
            <a  href="<?php echo base_url("detalles_producto/$producto->id_producto");?>"><h5 name="titulo" class="card-title"><?php echo $producto->titulo;?></h5></a>
              <p name="descipcion" class="card-text"><?php echo $producto->copete;?>.</p>
              <p name="precio" class="card-text">$ <?php echo $producto->precio;?>.</p>
              <?php echo form_open_multipart('agregar');?>
              <?php $perfil = $this->session->userdata('logged_in');
              if($perfil){ ?>
                <input type="submit" name="agregar" class="btn btn-primary" value="Añadir">
              <?php }else{ ?>
                <td><a class="btn btn-primary" href="<?php echo base_url("detalles_producto/$producto->id_producto");?>">Detalles</a></td>
                <?php }?>
              <?php
                      echo form_hidden('id_producto', $producto->id_producto);
                      echo form_hidden('titulo', $producto->titulo);
		                  echo form_hidden('copete', $producto->copete);
		                  echo form_hidden('precio', $producto->precio);
                      echo form_hidden('imagen', $producto->imagen);
                      ?>
            </div>
          </div>
        </div><?php echo form_close();?>
        <?php }}?>
    </div>
    <div class="row justify-content-center">
          <?php echo $pagination;?>
    </div>

</div>
</section>