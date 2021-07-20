<div class="col-lg-10 mb-4">
<h1 class="text-center py-3">Listado de consultas de usuarios registrados</h1>
  <table class="table table-striped">
    <thead class="thead">
      <tr>
        
        <th class="text-center">Id Consulta</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Apellido</th>
        <th class="text-center">email</th>
        <th class="text-center">Teléfono</th>
        <th class="text-center">Consulta</th>
        <th class="text-center">Estado de consulta</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($consultas->result() as $row){
        if($row->registrado == 'SI'){
      ?>
      <tr>
        <td class="text-center"><?php echo $row->id_consultas; ?></td>
        <td class="text-center"><?php echo $row->nombre; ?></td>
        <td class="text-center"><?php echo $row->apellido; ?></td>
        <td class="text-center"><?php echo $row->email; ?></td>
        <td class="text-center"><?php echo $row->telefono; ?></td>
        <td class="text-justify"><?php echo $row->consulta; ?></td>
        <td class="text-center"><?php echo $row->estado_consulta; ?></td>
      <!--<td><a class="btn btn-success" href="<?php echo base_url("editar_categoria/$row->id_consultas");?>">Responder</a></td>
        <?php if(($row->estado_consulta) == 1){ ?>
        <td><a class="btn btn-danger" href="<?php echo base_url("eliminar_categoria/$row->id_consultas") ;?>">Eliminar</a></td>
        <?php }else{?>
        <td><a class="btn btn-success" href="<?php echo base_url("activar_categoria/$row->id_consultas")?>">Activar</a></td>
        <?php }?>-->
      </tr>
      <?php }}?>
    </tbody>
  </table>
</div>
</div>
</div>
