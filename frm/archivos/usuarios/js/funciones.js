function limpiarCampos (){
  
    $("#cod_usuario").val("");
    $("#nombre_usuario").val("");
    $("#login_usuario").val("");
    $("#password_usuario").val("");
    $("#rep_pass").val("");
  
}



function agregarUsuario(){
     var formData= new FormData(document.getElementById("formPrograma"));
        $.ajax({
                url:"php/agregar.php",
                type:"post",
                dataType:"html",
                data:formData,
                cache:false,
                contentType:false,
                processData:false,
                success:function(res){
                    $("#mensajes").html(res);
                    
                },
                error:function(e){
                    $("#mensajes").html("No se puede agregar los datos,Error:"+e.status);
                    
                } 
        });
}    

function buscarNombreUsuario(){
    var datosFormulario = $("#formBuscar").serialize();
    $.ajax({
        url:'php/buscarNombre.php',
        type:'POST',
        data:datosFormulario,
        dataType:'json',
        beforeSend: function(objeto){
            $("#mensajes").html("Enviando datos al servidor..");
            $("#contenidoBusqueda").css("display","none");
        },
        success:function(json){
            $("#mensajes").html(json.mensaje);
            $("#contenidoBusqueda").html(json.contenido);        
            $("#contenidoBusqueda").fadeIn("slow");
            $("tbody tr").on("click",function(){
                var id=$(this).find("td:first").html();
                $("#panelBuscar").html("");
                $("#cod_usuario").val(id);
                $("#nombre_usuario").focus();
                buscarIdUsuario();
                $("#buscar").fadeOut("slow");
                $("#panelPrograma").fadeIn("slow");
            });
        },
        error:function(e){
            $("#mensajes").html("No se pudo buscar registros Error:"+e.status);
        },
        complete:function(objeto,exito,error){
            if(exito==="success"){
                
            }
        }
        
    });
    
}

function buscarIdUsuario(){
    $("#cod_usuario").prop('disabled',false)
    var datosFormulario = $("#formPrograma").serialize();
    $.ajax({
        type:'POST',
        url:'php/buscarId.php',
        data:datosFormulario,
        dataType:'json',
        beforeSend: function(objeto){
            $("#mensajes").html("Enviando Datos al servidor...")
        },
         success:function(json){
            $("#mensajes").html(json.mensaje);
            $("#nombre_usuario").val(json.nombre_usuario);        
            $("#login_usuario").val(json.login_usuario); 
            $("#password_usuario").val(json.pass_usuario); 
            $("#rep_pass").val(json.pass_usuario); 
      },
         error:function(e){
            $("#mensajes").html("No se pudo buscar registros Error:"+e.status);
        },
        complete:function(objeto,exito,error){
            if(exito==="success"){
                
                }
        }
        
    });
    
}

function modificarUsuario(){
     var formData= new FormData(document.getElementById("formPrograma"));
        $.ajax({
                url:"php/modificar.php",
                type:"post",
                dataType:"html",
                data:formData,
                cache:false,
                contentType:false,
                processData:false,
                success:function(res){
                    $("#mensajes").html(res);
                    
                },
                
                beforeSend: function(objeto){
               $("#mensajes").html("Enviando Datos al servidor...")
                 },
                 success:function(ret){
                 $("#mensajes").html(ret);
             limpiarCampos();
                 },
                
                error:function(e){
                    $("#mensajes").html("No se puede agregar los datos,Error:"+e.status);
                    
                }, 
                
                complete:function(objeto,exito,error){
           $("#cod_usuarios").focus();
           $("#cod_usuarios").select();
           if(exito==="success"){
                }
                }
               });
}  


        
        function eliminarUsuario(){
    $('#cod_usuario').prop('disabled',false);
     var formData= new FormData(document.getElementById("formPrograma"));
    $('#cod_usuario').prop('disabled',true);
        $.ajax({
                url:"php/eliminar.php",
                    type:"post",
                    dataType:"html",
                    data:formData,
                    cache:false,
                contentType:false,
                processData:false,
       
        beforeSend: function(objeto){
            $("#mensajes").html("Enviando Datos al servidor...")
        },
         success:function(res){
            $("#mensajes").html(res);
          limpiarCampos();
         },
            error:function(e){
            $("#mensajes").html("No se pudo buscar registros Error:"+e.status);
        },
        
         complete:function(objeto,exito,error){
           $("#cod_usuarios").focus();
           $("#cod_usuarios").select();
           if(exito==="success"){
                
                }
        }
        
    });
    
}
        
       
        
        
                
   