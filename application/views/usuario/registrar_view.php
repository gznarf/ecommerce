<h1 class="text-center">Registro de usuario</h1>
<div class="container">
	<div class="w-50 mx-auto">
			<?php echo form_open('registrar');?>
	
		<div class="form-group">
			<label for="apellido" class="text-primary font-weight-bold">Ingrese su apellido</label>
			<input type="text" name="apellido" id="apelldio" class="form-control" placeholder="Ingrese su apellido" autofocus="autofocus"  value="<?php echo set_value('apellido') ;?>">
		</div>
				<span class="text-danger"><?php echo form_error('apellido');?></span>
				
		<div class="form-group">
			<label for="nombre" class="text-primary font-weight-bold">Ingrese su nombre</label>
			<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese su nombre" autofocus="autofocus"  value="<?php echo set_value('nombre') ;?>">
		</div>

			<span class="text-danger"><?php echo form_error('nombre');?></span>

		<div class="form-group">
			<label for="email" class="text-primary font-weight-bold">Ingrese su email</label>
			<input type="email" name="email" id="email" class="form-control" placeholder="Ingrese su email" autofocus="autofocus"  value="<?php echo set_value('email') ;?>">
		</div>

			<span class="text-danger"><?php echo form_error('email');?></span>

		<div class="form-group">
			<label for="telefono" class="text-primary font-weight-bold">Ingrese su teléfono</label>
			<input type="number" name="telefono" id="telefono" class="form-control" placeholder="Ingrese su telefono" autofocus="autofocus"  value="<?php echo set_value('telefono') ;?>">
		</div>

			<span class="text-danger"><?php echo form_error('telefono');?></span>

		<div class="form-group">
			<label for="password" class="text-primary font-weight-bold">Password</label>
			<input type="password" name="password" id="password" class="form-control" placeholder="Ingrese su contraseña" autofocus="autofocus"  value="<?php echo set_value('password') ;?>">
		</div>
			<span class="text-danger"><?php echo form_error('password');?></span>

		<div class="form-group">
			<label for="passconf" class="text-primary font-weight-bold">Confirmar Password</label>
			<input type="password" name="passconf" id="passconf" class="form-control" placeholder="Repita su contraseña" autofocus="autofocus"  value="<?php echo set_value('passconf') ;?>">
		</div>
		<span class="text-danger"><?php echo form_error('passconf');?></span>

		<div class="form-group">
			<?php echo form_submit('Registrarme', 'Registrarme', "class='btn btn-success'");?>
		</div>
			<?php echo form_close(); ?>
	</div>

</div>