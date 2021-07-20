<?php  $cart_check = $this->cart->contents();
	if (empty($cart_check)){?>
            <br>
            <div class="container">
        <div class="row">
                <div class="col-12">
                        <h1>Carrito de compras</h1>
                </div>

                <div class="col-12 alert alert-primary" role="alert">
                        <h4>Su carrito se encuentra vacío. Puedes volver y comenzar a añadir productos. </h4>
                        <p class="text-center"><a href="<?php echo base_url('productos');?>" class=" btn btn-info" title="← continuar comprando">← Volver y seguir comprando</a></p>
                       <div class="text-center">
                        <img class="mx-auto " src="<?php echo base_url();?>assets/img/cart.png" alt="Carrito Vacio">
                        </div>
                </div>
               
        </div>
</div>
		<?php };?>
<?php echo form_open('actualizar_carrito'); ?>
<?php if($this->cart->contents()){?>
<div class="container my-5">
        <div class="row">
                <div class="col-12">
                        <h1>Carrito de compras</h1>
                </div>
        </div>
        <div class="row">
        <div class="col-lg-8 mb-4">
                <div class="table-responsive">
                        <table class="table">
                                <thead>
                                        <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Precio Unidad</th>
                                        <th>Subtotal</th>
                                        <th></th>
                                        </tr>
                                </thead>
                                 <?php $i = 1; ?>
                                
                                <?php foreach ($this->cart->contents() as $items){ ?>
                                <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
                                <tbody>
                                        <tr>
                                                <td><?php echo $items['id']; ?></td>
                                                <td><h6 class="font-weight-bold"><?php echo $items['name']; ?></h6></td>
                                                <td class="mob-hide"><img  heigth="150" width="150" src="<?php echo base_url('./uploads/');?><?php echo $items['imagen'] ?>" /></td>
                                                <td class="mob-hide"><?php echo form_input(array('pattern' => '\d+', 'id' => 'cantidad', 'name' => $i.'[qty]', 'value' => $items['qty'] ,'maxlength' => '3', 'size' => '5')); ?></td>
                                                <td class="mob-hide"><?php echo number_format($items['price'],2,',','.'); ?></td>
                                                <td><span><?php echo number_format($items['subtotal'],2,',','.'); ?></span></td>
                                                <td><a class="btn btn-danger" href="<?php echo base_url('quitar_carrito/'.$items['rowid']);?>"><i class="fas fa-trash"></i></td>
                                        </tr>
                                </tbody>
                                        <?php $i++; ?>
                                        <?php };?>
                                        <table class="float-right">
                                                <tr>
                                                        <td><?php echo form_submit('Actualizar Carrito', 'Actualizar Carrito', 'class="btn btn-primary delete"'); ?></td>
                                                        <td><a class="btn btn-danger delete" href="<?php echo base_url('eliminar_carrito');?>">Vaciar carrito</a></td>
                                                 
                                                </tr>

                                        </table>
                                        <?php echo form_close();?>
                        </table>
        
                </div>       
                
        </div>
        <div class="col-lg-4 mb-4">
      <div class="row">
        
        <div class="col-sm-12 col-md-12 cart-estimate">
          <div class="card mb-3">
            <div class="card-header">
              <h2 class="card-title">Finalizar Compra</h2>
            </div>
        
        <div class="col-12 cart-totals">
          <table class="table">

            <tr class="totals key">
              <td colspan="1" class="text-left"><strong>Total</strong></td>
              <td colspan="1" class="text-right"><strong>$ <?php echo number_format($this->cart->total(),2,',','.'); ?></strong></td>
            </tr>

          </tbody></table>

          <div class="text-center cart-actions">
            <a href="<?php echo base_url('finalizar_compra');?>" class="btn btn-primary btn-block" title="comprar">Comprar</a>
            <a href="<?php echo base_url('productos');?>" class="btn btn-link btn-block" title="← continuar comprando">← Continuar comprando</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>
        </div>
        

</div>
<?php }?>
               
<script>
        var input = document.getElementById('cantidad');
        input.oninvalid = function(event) { event.target.setCustomValidity('La cantidad solo acepta números enteros '); }
</script>