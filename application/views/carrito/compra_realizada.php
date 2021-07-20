    <div class="col-md-12 py-2">
            <div class="alert alert-success">Su orden ha sido procesada con éxito.</div>
    </div>
    <!-- Order status & shipping info -->
    <div class="bg-light px-5 py-5">
        <?php foreach ($detalles as $productos);?> 
                
        <div class="py-3"><h2>¡Gracias por su compra!</h2></div>
        <div class="py-3"><h3>Detalles de su orden</h3></div>

        <div><strong>Número de orden:#</strong> <?php echo $productos->id_ventas; ?></div>
        <div><strong>Total:</strong> <?php echo '$'.$productos->total; ?></div>
        <div><strong>Fecha:</strong> <?php echo $productos->fecha; ?></div>
        <div><strong>Nombre y apellido:</strong> <?php echo $productos->nombre.' '.$productos->apellido; ?></div>
        <div><strong>Email:</strong> <?php echo $productos->email; ?></div>
        <div><strong>Teléfono:</strong> <?php echo $productos->telefono; ?></div>
        
    </div>
    <div><a href="<?php echo base_url();?>" class="btn btn-primary btn-block" title="volver">Volver al inicio</a></div>
    <!-- Order items -->
    <div class="row col-lg-12">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th></th>
                    <th>N° compra</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Fecha de compra</th>
                    <th>SubTotal</th>
                </tr>
            </thead>
            <tbody>
            <?php $total = 0;
            foreach ($detalles as $productos){;?> 
                <tr>
                    
                    <td class="mob-hide"><img  heigth="150" width="150" src="<?php echo base_url('./uploads/');?><?php echo $productos->imagen ?>" /></td>
                    <td><?php echo $productos->id_ventas;?></td>
                    <td><?php echo $productos->titulo;?></td>
                    <td><?php echo '$'.$productos->precio; ?></td>
                    <td><?php echo $productos->cantidad; ?></td>
                    <td><?php echo $productos->fecha; ?></td>
                    <td><?php echo '$'.$productos->precio; ?></td>
                    <?php $total += $productos->precio?>
                </tr>
                <?php } ?>
               
            </tbody>
        </table>
        <div class="col-11 text-bold text-justify-right text-right"><strong>Total $: </strong><?php echo $total;?></div>
    </div>
</div>