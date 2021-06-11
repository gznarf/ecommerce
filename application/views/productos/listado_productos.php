<table class="table table-striped">
  <thead class="thead">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cod Producto</th>
      <th scope="col">Nombre</th>
      <th scope="col">Categoria</th>
      <th scope="col">Descripción</th>
      <th scope="col">Marca</th>
      <th scope="col">Precio</th>
      <th scope="col">Estado del producto</th>
      <th scope="col">Editar</th>
      <th scope="col">Activar - Eliminar</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($productos->result() as $row){?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $row->cod_producto; ?></td>
      <td><?php echo $row->titulo; ?></td>
      <td><?php echo $row->id_categoria; ?></td>
      <td><?php echo $row->descripcion; ?></td>
      <td><?php echo $row->marca; ?></td>
      <td><?php echo $row->precio; ?></td>
      <td><?php echo $row->estado_producto; ?></td>
      <td><a class="btn btn-success" href="<?php echo base_url("editar_producto/$row->id_producto");?>">Editar</a></td>
      <?php if(($row->estado_producto) == 1){ ?>
      <td><a class="btn btn-danger" href="<?php echo base_url("eliminar_producto/$row->id_producto") ;?>">Eliminar</a></td>
      <?php }else{?>
      <td><a class="btn btn-success" href="<?php echo base_url("activar_producto/$row->id_producto")?>">Activar</a></td>
      <?php }?>
    </tr>
    <?php }?>
  </tbody>
</table>

<td>