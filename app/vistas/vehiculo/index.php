<?php require_once RUTA_APP . '/vistas/inc/header.php'; ?>
<a href="<?php echo RUTA_URL; ?>/paginas"><i class="fas fa-arrow-alt-circle-left"></i></a>

<main>
    <div class="container mt-2">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h3>REGISTRO VEHICULO<button class="btn btn-primary" onclick="AgreVehiculo()">REGISTRAR</button></h3>
                    </div>
                    <br><br>
                    <div class="table-responsive">
                        <table id="myTable" class="display" style="width:100%">
                        <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">MARCA</th>
                                    <th scope="col">MODELO</th>
                                    <th scope="col">TIPO DE VEHICULO</th>
                                    <th scope="col"># DE PUERTAS</th>
                                    <th scope="col">PLACA</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>

                    <!-- Modal -->

                        <div class="modal fade" id="ModalPersona" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div id="modal-dialog" class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="tituloModal"></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body EditModal">

                                        <form action="" method="post" id="form1">
                                        <div class="row">
                                            <div class="col-12">
                                                <b>MARCA:</b>
                                                <input class="form-control" type="text" name="marca" id="marcaE">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <b>MODELO:</b>
                                                <input class="form-control" type="text" name="modelo" id="modeloE">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <b>TIPO DE VEHICULO:</b>
                                                <input class="form-control" type="text" name="tiVehiculo" id="tiVehiculoE">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <b>NUMERO DE PUERTAS:</b>
                                            <div class="col-12">
                                                <input class="form-control" type="number" name="numPuertas" id="numPuertasE">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <b>PLACA</b>
                                            <div class="col-12">
                                                <input class="form-control" type="text" name="placa" id="placaE">
                                            </div>
                                        </div>
                                    </div>

                                    
                                    </form>
                                    <div class="modal-body BorrarModal">
                                        <h1 class="text-danger"><i class="bi bi-slash-circle"></i></h1>
                                        <p><b>¿Deseas eliminar este vehiculo?</b></p>
                                    </div>
                                    <form action="" method="post" id="form">
                                    <div class="modal-body AgreModald">

                                        <div class="row">
                                            <div class="col-12">
                                                <b>MARCA:</b>
                                                <input class="form-control" type="text" name="marca" id="marcaE">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <b>MODELO:</b>
                                                <input class="form-control" type="text" name="modelo" id="modeloE">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <b>TIPO DE VEHICULO:</b>
                                                <input class="form-control" type="text" name="tiVehiculo" id="tiVehiculoE">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <b>NUMERO DE PUERTAS:</b>
                                            <div class="col-12">
                                                <input class="form-control" type="number" name="numPuertas" id="numPuertasE">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <b>PLACA</b>
                                            <div class="col-12">
                                                <input class="form-control" type="text" name="placa" id="placaE">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR </button>
                                        <button type="button" id="registroPersona" class="btn btn-primary btnGuardarAg">GUARDAR REGISTRO</button>
                                        <button type="button" id="editPersona" class="btn btn-primary btnGuardar">GUARDAR CAMBIO</button>
                                        <button type="button" id="ElimPersona" class="btn btn-outline-danger btnEliminar">ELIMINAR </button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<script type="text/javascript">
    
    $(document).ready( function () { 
        var cont = 0 ;
        var activoModal = "";
        let tablaPersona = $("#tablaPersona").DataTable({ retrieve: true, paging: false });
        tablaPersona.destroy();
        tablaPersona = $('#myTable').DataTable({
            data: <?php echo $datos['listaVehiculo']?>,
            columns: [
                { 
                    data: null, 
                    render : (data, row, type) => {
                        cont = cont + 1;
                        return "<b>" + cont + "</b>";
                    }
                },
                { data: 'marca' },
                { data: 'modelo' },
                { data: 'tipo_vehiculo' },
                { data: 'numero_puertas' },
                { data: 'placa' },
                {
                    data: null,
                    render : (data, row, type) => {
                        return ' <div class="padreButtom" ><button onclick="EditarPersona(' + data.id + ')">Editar</button> <button onclick="EliminarVehiculo(' + data.id + ')">Borrar</button> </div>'
                    }
                }

            ]
        });

    }); 

    function AgreVehiculo() {
        $('#tituloModal').text('Agregar Vehiculo')
        $('.EditModal').hide();
        $('.AgreModald').show();
        $('.btnGuardar').hide();
        $('.btnGuardarAg').show();
        $('.BorrarModal').hide();
        $('.btnEliminar').hide();
        $("#ModalPersona").modal("show");

        $('.btnGuardarAg').on('click', function(e) {
            e.preventDefault();
            var datos = $('#form').serialize();
            console.log(datos);
            $.ajax({
                url: '<?php echo RUTA_URL?>/Vehiculo/AgreVehiculo',
                type: 'POST',
                data: datos
            }).done((res) => {
                if(res == 1){
                    $("#ModalPersona").modal("hide");
                    $('#form')[0].reset();
                    tablaPersona.ajax.reload(null, false);
                }else{
                    $("#ModalPersona").modal("hide");
                    alert('incoveniente en el proceso');
                }
            });
        });   
    }

    function EditarPersona(id_vehiculo) {
        var datos;
        $('#tituloModal').text('Editar Vehiculo')
        $('.EditModal').show();
        $('.AgreModald').hide();
        $('.btnGuardarAg').hide();
        $('.btnGuardar').show();
        $('.BorrarModal').hide();
        $('.btnEliminar').hide();
        $("#ModalPersona").modal("show");

        $.ajax({
            url: '<?php echo RUTA_URL?>/Vehiculo/ObtnVehiculo',
            type: 'POST',
            data: {
                    id_vehiculo
                }
        }).done((res) => {
            datos = JSON.parse(res);
            $("#marcaE").val(datos[0].marca);
            $("#modeloE").val(datos[0].modelo);
            $("#tiVehiculoE").val(datos[0].tipo_vehiculo);
            $("#numPuertasE").val(datos[0].numero_puertas);
            $("#placaE").val(datos[0].placa);
        });


        $('.btnGuardar').on('click', function(e) {
            e.preventDefault();


            // var datosForm = $('#form1').serialize();
            // console.log(datosForm);
            // datosForm = datosForm + '&id=' + datos[0].id;
            // console.log(datosForm);

            marcaE = $("#marcaE").val();
            modeloE = $("#modeloE").val();
            tiVehiculoE = $("#tiVehiculoE").val();
            numPuertasE = $("#numPuertasE").val();
            placaE = $("#placaE").val();




            $.ajax({
                url: '<?php echo RUTA_URL?>/Vehiculo/EditVehiculo',
                type: 'POST',
                data: {id:datos[0].id, marcaE:marcaE, modeloE:modeloE, tiVehiculoE:tiVehiculoE, numPuertasE:numPuertasE, placaE:placaE}
            }).done((res) => {
                if(res == 1){
                    $("#ModalPersona").modal("hide");
                    alert("exito");
                    $('#form1')[0].reset();
                    tablaPersona.ajax.reload(null, false);
                }else{
                    $("#ModalPersona").modal("hide");
                    alert('incoveniente en el proceso');
                }
            });

        
        }); 
    }

    function EliminarVehiculo(id_vehiculo){
        $('#tituloModal').text('Eliminar Vehiculo');
        $('.EditModal').hide();
        $('.AgreModald').hide();
        $('.btnGuardar').hide();
        $('.btnGuardarAg').hide();
        $('.btnEliminar').show();
        $('.BorrarModal').show();
        $("#ModalPersona").modal("show");

        $('.btnEliminar').on('click', function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?php echo RUTA_URL?>/Vehiculo/ElimVehiculo',
                type: 'POST',
                data: {
                    id_vehiculo
                }
            }).done((res) => {
                console.log(res);
                if(res == 1){
                    $("#ModalPersona").modal("hide");
                    tablaPersona.ajax.reload(null, false);
                }else{
                    $("#ModalPersona").modal("hide");
                    alert('incoveniente en el proceso');
                }

            });
        });
    }


</script>
