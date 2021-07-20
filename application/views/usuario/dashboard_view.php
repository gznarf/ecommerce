<?php $data = $this->session->userdata('logged_in');?>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-2 py-3">
                    <div class="border bg-light">
                        <h6 class="text-center py-3"><strong>Panel administrador</strong></h6>
                            <ul><a href="<?php echo base_url('categorias')?>">Categorias</a></ul>
                            <ul><a href="<?php echo base_url('cargar_productos')?>">Productos</a></ul>
                            <ul><a href="<?php echo base_url('listado_productos')?>">Listar Productos</a></ul>
                            <ul><a href="<?php echo base_url('listado_categorias')?>">Listar Categorias</a></ul>
                            <ul><a href="<?php echo base_url('listado_usuarios')?>">Listar Usuarios</a></ul>
                            <ul><a href="<?php echo base_url('listado_consultas')?>">Listar Consultas (Usuarios)</a></ul>
                            <ul><a href="<?php echo base_url('listado_consulta')?>">Listar Consultas (No usuarios)</a></ul>
                            <ul><a href="<?php echo base_url('compra_detalles')?>">Detalle de ventas</a></ul>
                    </div>
            </div>
   
