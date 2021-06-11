<section>
<div class="conatainer w-75 mx-auto">
    <div class="row">
        <div class="col-12 my-3">
          <h1>Productos</h1>
        </div>
    </div>
    <div class="row">
        <?php foreach($productos->result() as $producto){?>
        <div class="col-4 py-3">
          <div class="card" style="width: 20rem;">
          <img src="<?php echo base_url('./uploads/').$producto->imagen ;?>" class="card-img-top" width = "300px" height = "300px"  alt="">
            <div class="card-body">
              <h5 class="card-title"><?php echo $producto->titulo;?></h5>
              <p class="card-text"><?php echo $producto->copete;?>.</p>
              <p class="card-text">$: <?php echo $producto->precio;?>.</p>
              <a href="#" class="btn btn-primary">Añadir</a>
            </div>
          </div>
        </div>
        <?php };?>
    </div>
    <div class="row justify-content-center">
          <?php echo $pagination;?>
    </div>

</div>
</section>