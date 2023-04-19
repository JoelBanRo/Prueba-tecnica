<?php require_once RUTA_APP . '/vistas/inc/header.php'; ?>
<a href="<?php echo RUTA_URL; ?>/paginas"><i class="fas fa-arrow-alt-circle-left"></i></a>
<main>
    <div class="container mt-2">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h3>REGISTRO PERSONA <button class="btn btn-primary" onclick="AgrePersona()">REGISTRAR</button></h3>
                    </div>
                    <br><br>
                    <div class="table-responsive">
                        <table id="myTable" class="display" style="width:100%">
                        <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">NOMBRE</th>
                                    <th scope="col">IDENTIFICACION</th>
                                    <th scope="col">FECHA NACIMIENTO</th>
                                    <th scope="col">IDENTIFICACION</th>
                                    <th scope="col">PROFECION O OFICIO</th>
                                    <th scope="col">ES CASADsO</th>
                                    <th scope="col">INGRESOS M</th>
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
                                    <div class="modal-body BitModal"> 

                                    <div class="table-responsive">
                                        <table id="listHist" class="display" style="width:100%">
                                        <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">MARCA</th>
                                                    <th scope="col">MODELO</th>
                                                    <th scope="col">TIPO DE VEHICULO</th>
                                                    <th scope="col"># DE PUERTAS</th>
                                                    <th scope="col">PLACA</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>

                                    </div>
                                    <div class="modal-body EditModal">
                                        <form action="" method="post" id="form1">
                                        <div class="row">
                                            <div class="col-12">
                                                <b>NOMBRE:</b>
                                                <input class="form-control" type="text" name="nombre" id="nombreE">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <b>APELLIDO:</b>
                                                <input class="form-control" type="text" name="apellido" id="apellidoE">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <b>IDENTIFICACION:</b>
                                                <input class="form-control" type="text" name="identificacion" id="identificacionE">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <b>FECHA NACIMIENTO:</b>
                                            <div class="col-12">
                                                <input class="form-control" type="date" name="fecha_nacimiento" id="fecha_nacimientoE">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <b>PROFECION O OFICIO:</b>
                                            <div class="col-12">
                                                <input class="form-control" type="text" name="profecion" id="profecionE">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <b>¿ES CASADO?:</b>
                                            <div class="col-12">
                                                <input class="form-control" type="text" name="casado" id="casadoE">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <b>INGRESOS MENSUALES</b>
                                            <div class="col-12">
                                                <input class="form-control" type="text" name="ingreso" id="ingresoE">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <b>VEHICULO ACTUAL</b>
                                            <select class="form-select" aria-label="Default select example" name="vehiculo" id="vehiculoE">
                                                <option selected>Selecciona un vehiculo</option>
                                                <?php foreach($datos['listaVehiculo'] as $vehiculo): ?>
                                                    <option value="<?php echo $vehiculo->id?>"><?php echo $vehiculo->modelo?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    </form>
                                    <div class="modal-body BorrarModal">
                                        <h1 class="text-danger"><i class="bi bi-slash-circle"></i></h1>
                                        <p><b>¿Deseas eliminar esta persona?</b></p>
                                    </div>
                                    <form action="" method="post" id="form">
                                    <div class="modal-body AgreModald">

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
                                                <input class="form-control" type="text" name="profesion" id="profecion">
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
                                            <select class="form-select" aria-label="Default select example" name="vehiculo" id="vehiculo">
                                                <option selected>Selecciona un vehiculo</option>
                                                <?php foreach($datos['listaVehiculo'] as $vehiculo): ?>
                                                    <option value="<?php echo $vehiculo->id?>"><?php echo $vehiculo->modelo?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR </button>
                                        <button type="button" id="registroPersona" class="btn btn-primary btnGuardarAg">GUARDAR REGISTRO</button>
                                        <button type="button" id="editPersona" class="btn btn-primary btnGuardar">GUARDAR CAMBIOS</button>
                                        <button type="button" id="" class="btn btn-outline-danger btnEliminar">ELIMINAR </button>
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
        var tablaPersona = $('#myTable').DataTable({
            data: <?php echo $datos['listaPersona']?>,
            columns: [
                { 
                    data: null, 
                    render : (data, row, type) => {
                        cont = cont + 1;
                        return "<b>" + cont + "</b>";
                    }
                },
                { data: 'nombres' },
                { data: 'apellidos' },
                { data: 'fecha_nacimiento' },
                { data: 'identificacion' },
                { data: 'profesion_oficio' },
                { data: 'es_casado' },
                { data: 'ingresos_mensuales' },
                {
                    data: null,
                    render : (data, row, type) => {
                        return ' <div class="padreButtom" >  <button onclick="HistPersVehiculo(' + data.id + ')">Historial</button><button onclick="EditarPersona(' + data.id + ')">Editar</button> <button onclick="EiminarPersona(' + data.id + ')">Borrar</button> </div>'
                    }
                }

            ]
        });

    });

    function AgrePersona() {
        $('.BitModal').hide();
        $('#tituloModal').text('Agregar Persona')
        $('.EditModal').hide();
        $('.AgreModald').show();
        $('.btnGuardar').hide();
        $('.btnEliminar').hide();
        $('.btnGuardarAg').show();
        $('.BorrarModal').hide();
        $("#ModalPersona").modal("show");
        $('#modal-dialog').removeClass('modal-dialog modal-lg');
        $('#modal-dialog').addClass('modal-dialog');

        $('.btnGuardarAg').on('click', function(e) {
            e.preventDefault();
            var datos = $('#form').serialize();
            console.log(datos);
            $.ajax({
                url: '<?php echo RUTA_URL?>/Persona/AgrePersona',
                type: 'POST',
                data: datos
            }).done((res) => {
                console.log(res);
                if(res == 1){
                    $("#ModalPersona").modal("hide");
                    tablaPersona.ajax.reload(null, false);
                }else{
                    $("#ModalPersona").modal("hide");
                    alert('incoveniente en el proceso');
                }
            }).fail((res) => {
                console.log(res);
            })
        });    
    }

    function HistPersVehiculo(id_persona) {
        var cont = 0 ;
        $('.BitModal').show();
        $('#tituloModal').text('Bitacoras')
        $('.EditModal').hide();
        $('.BorrarModal').hide();
        $('.AgreModald').hide();
        $('.btnEliminar').hide();
        $('.btnGuardar').hide();
        $('.btnGuardarAg').hide();
        $("#ModalPersona").modal("show");
        $('#modal-dialog').removeClass('modal-dialog')
        $('#modal-dialog').addClass('modal-dialog modal-lg');

        $.ajax({
            url: '<?php echo RUTA_URL?>/Persona/HistPersVehiculo',
            type: 'POST',
            data: {
                id_persona
            }
        }).done((res) => {
            objHistori = JSON.parse(res)
            var listaHis = $('#listHist').DataTable({ retrieve: true, paging: false });
            listaHis.destroy();
            $('#listHist').DataTable({
            data: objHistori['historial'],
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
                { data: 'numero_puertas' },
                { data: 'tipo_vehiculo' },
                { data: 'placa' },
            ]
        });
        });
    }

    function EditarPersona(id_persona) {
        $('.BitModal').hide();
        $('#tituloModal').text('Editar Persona');
        $('.EditModal').show();
        $('.BorrarModal').hide();
        $('.AgreModald').hide();
        $('.btnEliminar').hide();
        $('.btnGuardar').show();
        $('.btnGuardarAg').hide();
        $("#ModalPersona").modal("show");
        $('#modal-dialog').removeClass('modal-dialog modal-lg');
        $('#modal-dialog').addClass('modal-dialog');
        $.ajax({
            url: '<?php echo RUTA_URL?>/Persona/ObtnPersona',
            type: 'POST',
            data: {
                id_persona
            }
        }).done((res) => {
            datos = JSON.parse(res);
            console.log(datos[0].fecha_nacimiento);
            $('#nombreE').val(datos[0].nombres);
            $('#apellidoE').val(datos[0].apellidos);
            $('#identificacionE').val(datos[0].identificacion);
            $('#fecha_nacimientoE').val(datos[0].fecha_nacimiento);
            $('#profecionE').val(datos[0].profesion_oficio);
            $('#casadoE').val(datos[0].es_casado);
            $('#ingresoE').val(datos[0].ingresos_mensuales);
            $("#vehiculoE option[value="+ datos[0].vehiculo_actual +"]").attr("selected",true);

        });

        $('.btnGuardar').on('click', function(e) {
            e.preventDefault();


            // var datosForm = $('#form1').serialize();
            // datosForm = datosForm + '&id=' + datos[0].id;
            // console.log(datosForm);

            nombres = $('#nombreE').val();
            apellidos = $('#apellidoE').val();
            identificacion = $('#identificacionE').val();
            fecha_nacimiento = $('#fecha_nacimientoE').val();
            profesion_oficio = $('#profecionE').val();
            es_casado = $('#casadoE').val();
            ingresos_mensuales = $('#ingresoE').val();
            vehiculo_actual = $("#vehiculoE").val();

             $.ajax({
                url: '<?php echo RUTA_URL?>/Persona/EditPersona',
                type: 'POST',
                data: { id:datos[0].id, nombre:nombres, apellido:apellidos, identificacion:identificacion,fecha_nacimiento:fecha_nacimiento,profesion:profesion_oficio,casado:es_casado,ingreso:ingresos_mensuales,vehiculo:vehiculo_actual }
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

    function EiminarPersona(id_persona) {
        $('.BitModal').hide();
        $('#tituloModal').text('Borrar Persona')
        $('.EditModal').hide();
        $('.AgreModald').hide();
        $('.btnGuardar').hide();
        $('.btnGuardarAg').hide();
        $('.btnEliminar').show();
        $('.BorrarModal').show();
        $("#ModalPersona").modal("show");
        $('#modal-dialog').removeClass('modal-dialog modal-lg');
        $('#modal-dialog').addClass('modal-dialog');

        $('.btnEliminar').on('click', function(e) {
            e.preventDefault();
        $.ajax({
            url: '<?php echo RUTA_URL?>/Persona/EiminarPersona',
            type: 'POST',
            data: {
                id_persona
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