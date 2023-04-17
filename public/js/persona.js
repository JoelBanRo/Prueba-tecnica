$(document).ready(function(){
  var contador = 0;

$("#registroPersona").click(function(e){
       e.preventDefault();
       nombre = $("#nombre").val();
       apellido= $("#apellido").val();
       identificacion= $("#identificacion").val();
       fecha_nacimiento= $("#fecha_nacimiento").val();
       profecion= $("#profecion").val();
       casado= $("#casado").val();
       ingreso= $("#ingreso").val();
       vehiculo= $("#vehiculo").val();

       if(nombre == "" || apellido  == "" || identificacion == "" || fecha_nacimiento == "dd/mm/aaaa" ||  profecion  == "" || casado  == ""|| ingreso  == "" || vehiculo  == ""){
         alert("faltan datos");
       }else{
         $.ajax({
            url : "app/controller/controladorPersona.php",
            type : "POST",
            data : {opcion: "registroPersona", nombre, apellido, identificacion, fecha_nacimiento, profecion, casado, ingreso, vehiculo}
         }).done(function(data){
            if(data == 1){
                alert("Datos Guardados");
                contador = 0;
                tablaPersona.ajax.reload(null, false);
                  $("#ModalPersona").modal("hide");
                 $("#nombre").val("");
                 $("#apellido").val("");
                 $("#identificacion").val("");
                 $("#fecha_nacimiento").val("dd/mm/aaaa");
                 $("#profecion").val("");
                 $("#casado").val("");
                 $("#ingreso").val("");
                 $("#vehiculo").val("");
            }else{
                alert("Error al guardar");
            }
         });
       }
})
    var tablaPersona = $("#tablaPersona").DataTable({ retrieve: true, paging: false });
    tablaPersona.destroy();
    tablaPersona = $("#tablaPersona").DataTable({
        "ajax":{
          "url" : "app/controller/controladorPersona.php",
          "method" : "POST",
          "data" : {opcion : "listarPersona"},
          "dataSrc" : ""
        },
        "columns" : [
          {
            data: null, render : function(data, row, type){
                contador = contador + 1;
                return "<b>"+ contador + "</b>";
            }
          },
          {
            data: null, render : function(data, row, type){
                return data.nombres+" "+ data.apellidos;
            }
          },
          {"data" : "identificacion"},
          {"data" : "fecha_nacimiento"},
          {"data" : "profesion_oficio"},
          {"data" : "es_casado"},
          {"data" : "ingresos_mensuales"},
          {"data" : "vehiculo_actual"},
          {
              data: null, render:function(data, row, type){
                return '<button type="button" class="btn btn-success" id="btnEditar" data-id="'+ data.id+'">EDITAR</button>';
              }
          },
          {
            data: null, render:function(data, row, type){
              return '<button type="button" class="btn btn-danger" id="btnEliminar" data-id="'+ data.id+'">ELIMINAR</button>';
            }
        }
        ]

    });


    $(document).on("click", "#btnEditar", function(){
       id_persona = $(this).data("id");
       $("#id_persona").val(id_persona);
       $("#modalEditar").modal("show");

       $.ajax({
        url : "",
        type : "",
        data: {}
       }).done(function(data){
          datos = JSON.parse(data);
           
       })
    });

    $("#EditarPersona").click(function(){
       
    })

   $(document).on("click", "#btnEliminar", function(){
    id_persona = $(this).data("id");
   })


});