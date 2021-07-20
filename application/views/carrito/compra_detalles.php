<div class="col-lg-10 mb-4">
<h1 class="text-center py-3">Detalles de ventas</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="text-center">Imagen</th>
                    <th class="text-center">N° compra</th>
                    <th class="text-center">Producto</th>
                    <th class="text-center">Precio</th>
                    <th class="text-center">Cantidad</th>
                    <th class="text-center">Fecha de compra</th>
                    <th class="text-center">SubTotal</th>
                </tr>
            </thead>
            <tbody>
            <?php $total = 0;
            foreach ($detalles as $productos){;?> 
                <tr>
                    
                    <td class="mob-hide text-center"><img  heigth="150" width="150" src="<?php echo base_url('./uploads/');?><?php echo $productos->imagen ?>" /></td>
                    <td class="text-center"><?php echo $productos->id_ventas;?></td>
                    <td class="text-center"><?php echo $productos->titulo;?></td>
                    <td class="text-center"><?php echo '$'.$productos->precio; ?></td>
                    <td class="text-center"><?php echo $productos->cantidad; ?></td>
                    <td class="text-center"><?php echo $productos->fecha; ?></td>
                    <td class="text-center"><?php echo '$'.$productos->precio; ?></td>
                    <?php $total += $productos->precio?>
                </tr>
                <?php } ?>
               
            </tbody>
        </table>
        <div class="col-11 text-bold text-justify-right text-right"><strong>Total $: </strong><?php echo $total;?></div>
    </div>
    </div>
</div>
