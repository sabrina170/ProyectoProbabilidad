$(document).ready(function(){
    tablaPersonas = $("#tablaPersonas").DataTable({
        
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Editar</button><button class='btn btn-danger btnBorrar'>Borrar</button></div></div>"  
       }],
        
        //Para cambiar el lenguaje a español
    "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        }
    });
    
$("#btnNuevo").click(function(){
    $("#formPersonas").trigger("reset");
    $(".modal-header").css("background-color", "#28a745");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nuevvo Usuario");            
    $("#modalCRUD").modal("show");        
    id=null;
    opcion = 1; //alta
});    
    
var fila; //capturar la fila para editar o borrar el registro
    
//botón EDITAR    
$(document).on("click", ".btnEditar", function(){
    fila = $(this).closest("tr");
    id = parseInt(fila.find('td:eq(0)').text());
    username = fila.find('td:eq(1)').text();
    password = fila.find('td:eq(2)').text();
    telefono = parseInt(fila.find('td:eq(3)').text());
    gmail = fila.find('td:eq(4)').text();
    id_rol = parseInt(fila.find('td:eq(5)').text());
    crecion = fila.find('td:eq(6)').text();

    $("#username").val(username);
    $("#password").val(password);
    $("#telefono").val(telefono);
    $("#gmail").val(gmail);
    $("#id_rol").val(id_rol);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Usario");            
    $("#modalCRUD").modal("show");  
    
});

//botón BORRAR
$(document).on("click", ".btnBorrar", function(){    
    fila = $(this);
    id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el registro: "+id+"?");
    if(respuesta){
        $.ajax({
            url: "bd/crud.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaPersonas.row(fila.parents('tr')).remove().draw();
            }
        });
        header("Location: Admin.php");
    }   
});
    
$("#formPersonas").submit(function(e){
    e.preventDefault();    
    username = $.trim($("#username").val());
    password = $.trim($("#password").val());
    telefono = $.trim($("#telefono").val());   
    gmail = $.trim($("#gmail").val());
    id_rol = $.trim($("#id_rol").val());
    $.ajax({
        url: "bd/crud.php",
        type: "POST",
        dataType: "json",
        data: {username:username, password:password, telefono:telefono,
            gmail:gmail, id_rol:id_rol,
             id:id, opcion:opcion},
        success: function(data){  
            console.log(data);
            id = data[0].id;            
            username = data[0].username;
            password = data[0].password;
            telefono = data[0].telefono;
            gmail = data[0].gmail;
            id_rol= data[0].id_rol;
            creacion = data[0].creacion;
            if(opcion == 1){tablaPersonas.row.add([id,username, password,telefono,gmail,id_rol,creacion]).draw();}
            else{tablaPersonas.row(fila).data([id,username, password,telefono,gmail,id_rol,creacion]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    
    
});    
    
});