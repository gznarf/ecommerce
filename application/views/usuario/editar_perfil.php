<h1 class="text-center">Modificar perfil</h1>
<div class="container">
	<div class="w-50 mx-auto">
			<?php echo form_open("verificar_perfil/$id_usuario");?>
	
		<div class="form-group">
			<label for="apellido" class="text-primary font-weight-bold">Apellido</label>
			<input type="text" name="apellido" class="form-control" placeholder="Ingrese su apellido" autofocus="autofocus"  value="<?php echo $apellido ;?>">
		</div>
				<span class="text-danger"><?php echo form_error('apellido');?></span>
				
		<div class="form-group">
			<label for="nombre" class="text-primary font-weight-bold">Nombre</label>
			<input type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre" autofocus="autofocus"  value="<?php echo $nombre ;?>">
		</div>

			<span class="text-danger"><?php echo form_error('nombre');?></span>

		<div class="form-group">
			<label for="telefono" class="text-primary font-weight-bold">Teléfono</label>
			<input type="tel" name="telefono" class="form-control" placeholder="Ingrese su telefono" autofocus="autofocus"  value="<?php echo $telefono ;?>">
		</div>

			<span class="text-danger"><?php echo form_error('telefono');?></span>

		<div class="form-group">
			<?php echo form_submit('modificar', 'Modificar', "class='btn btn-success'");?>
		</div>
			<?php echo form_close(); ?>
	</div>

</div>