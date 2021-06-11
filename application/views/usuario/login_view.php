        <!-- The content half -->
        <div class="col-md-12 bg-light py-5 ">
            <div class="login d-flex align-items-center py-5">

                <!-- Demo content-->
                <div class="container display-flex align-items-center justify-center bg-light">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h3 class="display-4 text-center py-3">Logeo</h3>
                            <?php echo validation_errors(); ?>
        
                            <?php echo form_open('ingresar'); ?>
                                <div class="form-group mb-3">
                                    <input name="usuario" id="usuario" type="email" placeholder="Ingrese su corero" required=" " autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>
                                <span class="text-danger"><?php echo form_error('telefono');?></span>
                                <div class="form-group mb-3">
                                    <input name="password" id="password" type="password" placeholder="Ingrese el Password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                </div>
                                <span class="text-danger"><?php echo form_error('telefono');?></span>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                    <label for="customCheck1" class="custom-control-label">Recordar contraseña</label>
                                </div>
                                <div class="form-group mb-3 py-3">
                                    <button type="submit" id="ingresar" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Ingresar</button>
                                    <?php echo form_close(); ?>
                                </div>
                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>

