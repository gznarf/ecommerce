<h1 class="text-center">Mi perfil</h1>
<div class="container">
	<div class="w-50 mx-auto">
		
	<?php $data = $this->session->userdata('logged_in');?>
	
		<div class="form-group">
			<label for="apellido" class="text-primary font-weight-bold">Apellido</label>
			<input type="text" readonly name="apellido" class="form-control" placeholder="Ingrese su apellido" autofocus="autofocus"  value="<?php echo $data['apellido'] ?>">
		</div>
				
		<div class="form-group">
			<label for="nombre" class="text-primary font-weight-bold">Nombre</label>
			<input type="text" readonly name="nombre"  class="form-control" placeholder="Ingrese su nombre" autofocus="autofocus"  value="<?php echo $data['nombre'] ?>">
		</div>

		<div class="form-group">
			<label for="email" class="text-primary font-weight-bold">Email</label>
			<input type="email" readonly name="email" class="form-control" placeholder="Ingrese su email" autofocus="autofocus"  value="<?php echo $data['email']; ?>">
		</div>

		<a class="btn btn-success" href="<?php echo base_url("editar_perfil/".$data['id_usuario']);?>">Editar</a>
		<a class="btn btn-danger" href="<?php echo base_url("eliminar_perfil/".$data['id_usuario']) ;?>">Eliminar cuenta</a>
			<div class="form-group">
			
		</div>
	</div>

</div>