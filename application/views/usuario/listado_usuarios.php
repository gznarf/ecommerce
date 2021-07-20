<div class="col-lg-10 mb-4">
<h1 class="text-center py-3">Listado de usuarios</h1>
  <table class="table table-striped">
    <thead class="thead">
      <tr>
        
        <th class="text-center">Id usuario</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Apellido</th>
        <th class="text-center">Usuario</th>
        <th class="text-center">Email</th>
        <th class="text-center">Teléfono</th>
        <th class="text-center">Tipo Perfil</th>
        <th class="text-center">Estado</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($usuarios->result() as $row){?>
      <tr>
        <td class="text-center"><?php echo $row->id_usuario; ?></td>
        <td class="text-center"><?php echo $row->nombre; ?></td>
        <td class="text-center"><?php echo $row->apellido; ?></td>
        <td class="text-center"><?php echo $row->usuario; ?></td>
        <td class="text-center"><?php echo $row->email; ?></td>
        <td class="text-center"><?php echo $row->telefono; ?></td>
        <td class="text-center"><?php echo $row->perfil_id; ?></td>
        <td class="text-center"><?php echo $row->estado_usuario; ?></td>
        <!-- <td><a class="btn btn-success" href="<?php echo base_url("editar_categoria/$row->id_categoria");?>">Editar</a></td>
        <?php if(($row->estado_categoria) == 1){ ?>
        <td><a class="btn btn-danger" href="<?php echo base_url("eliminar_categoria/$row->id_categoria") ;?>">Eliminar</a></td>
        <?php }else{?>
        <td><a class="btn btn-success" href="<?php echo base_url("activar_categoria/$row->id_categoria")?>">Activar</a></td>
        <?php }?>
      </tr>
      <?php }?>-->
    </tbody>
  </table>
</div>
</div>
</div>