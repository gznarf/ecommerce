<div class="container">
  <div class="row">
    <div class="col-12 mb-4 my-3">
      <h1 class="page-header">Proceder a la compra</h1>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
        <?php echo form_open('verificar_compra');?>
      <div class="col-12"> <h2 class="text-secondary col-md-12 col-sm-12 col-xs-12">Detalles de Contacto</h2></div>
  </div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-8 mb-4">
      <div class="field text-field col-md-12 col-sm-12 col-xs-12 form-group">
        <label for="email" class="control-label">E-mail <em>*</em></label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Ingrese su correo" autofocus="autofocus" value="<?php echo set_value('email') ;?>">
        <span class="text-danger"><?php echo form_error('email');?></span>
      </div>

      <div class="field text-field col-md-12 col-sm-12 col-xs-12 form-group">
        <label for="telefono" class="control-label">Teléfono</label>
        <input type="tel" name="telefono" id="telefono" class="form-control" placeholder="Ingrese su teléfono" autofocus="autofocus" value="<?php echo set_value('telefono') ;?>">
        <span class="text-danger"><?php echo form_error('telefono');?></span>
      </div>

      <div class="field text-field col-md-12 col-sm-12 col-xs-12 form-group">
          <label for="nombre" class="control-label">Nombre<em>*</em></label>
          <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese su nombre" autofocus="autofocus" value="<?php echo set_value('nombre') ;?>">
          <span class="text-danger"><?php echo form_error('nombre');?></span>
      </div>

      <div class="field text-field col-md-12 col-sm-12 col-xs-12 form-group">
          <label for="apellido" class="control-label">Apellido <em>*</em></label>
          <input type="text" name="apellido"  id="apellido" class="form-control" placeholder="Ingrese su apellido" autofocus="autofocus" value="<?php echo set_value('apellido') ;?>">
          <span class="text-danger"><?php echo form_error('apellido');?></span>
      </div>

      <div class="field text-field col-md-12 col-sm-12 col-xs-12 form-group">
          <label for="direccion" class="control-label">Dirección <em>*</em></label>
          <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Ingrese su direccion" autofocus="autofocus" value="<?php echo set_value('direccion') ;?>">
          <span class="text-danger"><?php echo form_error('direccion');?></span>
      </div>

      <div class="field text-field col-md-12 col-sm-12 col-xs-12 form-group">
          <label for="ciudad" class="control-label">Ciudad <em>*</em></label>
          <input type="text" name="ciudad" id="ciudad" class="form-control" placeholder="Ingrese su ciudad" autofocus="autofocus" value="<?php echo set_value('ciudad') ;?>">
          <span class="text-danger"><?php echo form_error('ciudad');?></span>
      </div>

      <div class="field text-field col-md-12 col-sm-12 col-xs-12 form-group" style="">
          <label for="cod_postal" class="control-label">Código postal </label>
          <input type="text" name="cod_postal" id="cod_postal" class="form-control" placeholder="Ingrese su código postal" autofocus="autofocus" value="<?php echo set_value('cod_postal') ;?>">
          <span class="text-danger"><?php echo form_error('cod_postal');?></span>
      </div>
      </div>

      <div class="col-lg-4 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Carrito</span>
                <span class="badge badge-secondary badge-pill"><?php echo $this->cart->total_items(); ?></span>
            </h4>
            <ul class="list-group mb-3">
                <?php if($this->cart->total_items() > 0){ foreach ($this->cart->contents() as $items){  ?>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                    <img  heigth="90" width="90" src="<?php echo base_url('./uploads/');?><?php echo $items['imagen'] ?>" /></td>
                    <td><h6 class="font-weight-bold"><?php echo $items['name']; ?></h6></td>
                        <small class="text-muted"> <td class="mob-hide"><?php echo number_format($items['price'],2,',','.'); ?></td></small>
                    </div>
                    <td><span><?php echo number_format($items['subtotal'],2,',','.'); ?></span></td>
                </li>
				            <?php } }else{ ?>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <p>No hay productos en su carrito...</p>
                </li>
                <?php } ?>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total</span>
                    <strong>$ <?php echo number_format($this->cart->total(),2,',','.'); ?></strong>
                </li>
              </ul>
              <div class="">
              <?php echo form_submit('Comprar', 'Comprar', "class='btn btn-primary btn-block'");?>
              <?php echo form_close() ;?>
    </div>
        </div>
  </div>   
</div>
</div>