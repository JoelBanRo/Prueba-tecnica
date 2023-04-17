<?php require_once RUTA_APP . '/vistas/inc/header.php'; ?>
<a href="<?php echo RUTA_URL; ?>/paginas"><i class="fas fa-arrow-alt-circle-left"></i></a>
<main>

    <div class="container mt-2">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h3>REGISTRO PERSONA <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#ModalPersona">REGISTRAR</button></h3>
                    </div>
                    <br><br>
                    <div class="table-responsive">
                       <table class="table" id="tablaPersona" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">NOMBRE</th>
                                    <th scope="col">IDENTIFICACION</th>
                                    <th scope="col">FECHA NACIMIENTO</th>
                                    <th scope="col">PROFECION O OFICIO</th>
                                    <th scope="col">ES CASADO</th>
                                    <th scope="col">INGRESOS M</th>
                                    <th scope="col">VEHICULO AC</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>



                    <!-- Modal -->
                    <form action="" method="post">
                        <div class="modal fade" id="ModalPersona" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">REGISTRO</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="row">
                                            <div class="col-12">
                                                 <b>NOMBRE:</b>
                                                <input class="form-control" type="text" name="nombre" id="nombre">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                            <b>APELLIDO:</b>
                                                <input class="form-control" type="text" name="apellido" id="apellido">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                            <b>IDENTIFICACION:</b>
                                                <input class="form-control" type="text" name="identificacion" id="identificacion">
                                            </div>
                                        </div>
                                        <div class="row">
                                        <b>FECHA NACIMIENTO:</b>
                                            <div class="col-12">
                                                <input class="form-control" type="date" name="fecha_nacimiento" id="fecha_nacimiento">
                                            </div>
                                        </div>
                                        <div class="row">
                                        <b>PROFECION O OFICIO:</b>
                                            <div class="col-12">
                                                <input class="form-control" type="text" name="profecion" id="profecion">
                                            </div>
                                        </div>
                                        <div class="row">
                                        <b>¿ES CASADO?:</b>
                                            <div class="col-12">
                                                <input class="form-control" type="text" name="casado" id="casado">
                                            </div>
                                        </div>
                                        <div class="row">
                                        <b>INGRESOS MENSUALES</b>
                                            <div class="col-12">
                                                <input class="form-control" type="text" name="ingreso" id="ingreso">
                                            </div>
                                        </div>
                                        <div class="row">
                                        <b>VEHICULO ACTUAL</b>
                                            <div class="col-12">
                                                <input class="form-control" type="text" name="vehiculo" id="vehiculo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR </button>
                                        <button type="button"  id="registroPersona" class="btn btn-primary">GUARDAR</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
</main>

<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>