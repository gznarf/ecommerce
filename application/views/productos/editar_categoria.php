<h1 class="text-center my-3">Editar categorias</h1>

<div class="form-group w-50 mx-auto my-5">
<?php echo form_open("verificar_editar/$id_categoria"); ?>
    <div class="form-group">
        <label for="categoria_prod">Categoria</label>
        <input type="text" name="categoria_prod" class="form-control" placeholder="Ingrese la categoria"  autofocus="autofocus" value="<?php echo $categoria_prod ;?>">
    </div>
        <span class="text-danger"><?php echo form_error('categoria_prod');?></span>

    <div class="form-group my-3">
        <button type='submit' class='btn btn-success'>Modificar</button>
        <button type='Reset' class='btn btn-danger'>Cancelar</button>
        <?php form_close();?>
    </div>
</div>
