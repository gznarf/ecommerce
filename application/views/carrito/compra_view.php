<div class="jumbotron jumbotron-fluid">
  <div class="container">
  <h4 class="text-center">Compras realizadas</h4>
  </div>
</div>
<div class="d-flex justify-content-center" style="background-image: url('assets/img/fondo1.jpg')">
<table class="table table-borded table-striped table-hover table-responsive">
  <thead>
    <tr>
      <th scope="col">Codigo Compra</th>
      <th scope="col">Nombre Cliente</th>
      <th scope="col">Apellido Cliente</th>
	   <th scope="col">Fecha</th>
	   <th scope="col">Detalles</th>
	   
    </tr>
  </thead>
  <tbody>
  <?php foreach ($dato as $productos){;?> 
    <tr>
      <th scope="row"><?php echo $productos->id_compra;?></th>
	  <td><?php echo $productos->nombreCliente;?></td>
      <td><?php echo $productos->apellidoCliente;?></td>
      <td><?php echo $productos->fecha;?></td>
	  
	  <td>
    
			
			
			 <?php
		      
			  if($this->session->userdata('perfil')==1) {?>
			    <a type="button"  name="estado" id="estado" href=<?php echo base_url('listarDetalle')."/".$productos->id_compra?> class="btn btn-primary" value=<?php echo $productos->id_compra?> >
					VER DETALLE
		        </a>
           <?php } else{ ?>
		         <a type="button"  name="estado" id="estado" href=<?php echo base_url('listarDetalleUsuario')."/".$productos->id_compra?> class="btn btn-primary" value=<?php echo $productos->id_compra?> >
					VER DETALLE
		        </a>
           <?php } ?>

	  </td>
    </tr>
 <?php };?>
	</tbody>
</table>
</div><br>