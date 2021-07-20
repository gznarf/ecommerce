<div class="col-lg-10 mb-4">
<h1 class="text-center py-3">Listado de categorias</h1>
  <table class="table table-striped">
    <thead class="thead">
      <tr>
       
        <th class="text-center">Id Categorias</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Estado de la categoria</th>
        <th class="text-center">Editar</th>
        <th class="text-center">Activar - Eliminar</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($categorias->result() as $row){?>
      <tr>
        <td class="text-center"><?php echo $row->id_categoria; ?></td>
        <td class="text-center"><?php echo $row->categoria_prod; ?></td>
        <td class="text-center"><?php echo $row->estado_categoria; ?></td>
        <td class="text-center"><a class="btn btn-success" href="<?php echo base_url("editar_categoria/$row->id_categoria");?>">Editar</a></td>
        <?php if(($row->estado_categoria) == 1){ ?>
        <td class="text-center"><a class="btn btn-danger" href="<?php echo base_url("eliminar_categoria/$row->id_categoria") ;?>">Eliminar</a></td>
        <?php }else{?>
        <td class="text-center"><a class="btn btn-success" href="<?php echo base_url("activar_categoria/$row->id_categoria")?>">Activar</a></td>
        <?php }?>
      </tr>
      <?php }?>
    </tbody>
  </table>
</div>
</div>
</div>