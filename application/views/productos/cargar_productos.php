<h1 class="text-center py-3">Registro de productos</h1>
<div class="container">
	<div class="w-50 mx-auto">
			<?php echo form_open_multipart('registrar_producto');?>
	
		<div class="form-group">
			<label for="cod_producto" class="text-primary font-weight-bold">Código del producto</label>
			<input type="text" name="cod_producto" id="cod_producto" class="form-control" placeholder="Ingrese el código del producto" autofocus="autofocus"  value="<?php echo set_value('cod_producto') ;?>">
		</div>
				<span class="text-danger"><?php echo form_error('cod_producto');?></span>
				
		<div class="form-group">
			<label for="titulo" class="text-primary font-weight-bold">Titulo del producto</label>
			<input type="text" name="titulo" id="titulo" class="form-control" placeholder="Ingrese el titulo del producto" autofocus="autofocus"  value="<?php echo set_value('titulo') ;?>">
		</div>

			<span class="text-danger"><?php echo form_error('titulo');?></span>

            <div class="form-group">
                <label for="categoria" class="text-primary font-weight-bold">Seleccione la categoria del producto</label>
                <select class="form-control" name="categoria" id="categoria" value="<?php echo set_value('categoria');?>" aria-label="Default select">
					<option value="0" selected>Selecciones una categoria</option>
					<?php foreach($categorias as $categoria){;?>
						<option value=<?php echo $categoria->id_categoria;?>><?php echo $categoria->categoria_prod;?></option>
						<?php };?>
                </select>
				<span class="text-danger"><?php echo form_error('categoria');?></span>
            </div>
			

		<div class="form-group">
			<label for="copete" class="text-primary font-weight-bold">Breve Descripción del producto</label>
			<input type="text" name="copete" id="copete" class="form-control" placeholder="Ingrese un breve descripción" autofocus="autofocus"  value="<?php echo set_value('copete') ;?>">
		</div>

			<span class="text-danger"><?php echo form_error('copete');?></span>

		<div class="form-group">
			<label for="marca" class="text-primary font-weight-bold">Descripción del producto</label>
			<textarea type="textarea" name="descripcion" id="descripcion" class="form-control" placeholder="Ingrese la descripción del producto" autofocus="autofocus"  value="<?php echo set_value('descripcion') ;?>"></textarea>
		</div>

			<span class="text-danger"><?php echo form_error('descripcion');?></span>

        <div class="form-group">
			<label for="marca" class="text-primary font-weight-bold">Marca del producto</label>
			<input type="text" name="marca" id="marca" class="form-control" placeholder="Ingrese la marca del producto" autofocus="autofocus"  value="<?php echo set_value('marca') ;?>">
		</div>

			<span class="text-danger"><?php echo form_error('marca');?></span>

		<div class="form-group">
			<label for="precio" class="text-primary font-weight-bold">Precio del producto</label>
			<input type="number" name="precio" id="precio" class="form-control" placeholder="Ingrese el precio del producto" autofocus="autofocus"  value="<?php echo set_value('precio') ;?>">
		</div>
			<span class="text-danger"><?php echo form_error('precio');?></span>

		<div class="form-group">
			<label for="stock" class="text-primary font-weight-bold">Stock del producto</label>
			<input type="number" name="stock" id="stock" class="form-control" placeholder="Ingrese el stock disponible" autofocus="autofocus"  value="<?php echo set_value('stock') ;?>">
		</div>
		<span class="text-danger"><?php echo form_error('stock');?></span>

        <div class="form-group">
            <label for="imagen" class="text-primary font-weight-bold">Subir una imagen (No mayor a 2 Mb)</label>
            <div class="input-group mb-3">
				<input type="file" name="filename" class="form-control">
				<label class="input-group-text" >Seleccionar Archivo</label>
			</div>
        </div>
        <span class="text-danger"><?php echo form_error('filename');?></span>

		<div class="form-group py-2">
        <button type='submit' class='btn btn-success'>Agregar</button>
        <button type='reset' class='btn btn-danger'>Cancelar</button>
		</div>
			<?php echo form_close(); ?>
	</div>

</div>