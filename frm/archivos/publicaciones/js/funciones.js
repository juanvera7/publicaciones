function limpiarCampos (){
  
    $("#id").val("");
    $("#titulo").val("");
    $("#contenido").val("");
    $("#imagen").val("");
    
}



function agregarPublicacion(){
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
        });}    

function buscarPublicacion(){
    var datosFormulario = $("#formBuscar").serialize();
    $.ajax({
        url:'php/buscar.php',
        type:'POST',
        data:datosFormulario,
        dataType:'json',
        beforeSend: function(objeto){
            $("#mensajes").html("Enviando datos al servidor..");
            $("#contenidoBusqueda").css("display","none");
        },
        success:function(json){
            $("#mensajes").html(json.mensajes);
            $("#contenidoBusqueda").html(json.contenido);        
            $("#contenidoBusqueda").fadeIn("slow");
            $("tbody tr").on("click",function(){
                var id=$(this).find("td:first").html();
                $("#panelBuscar").html("");
                $("#id").val(id);
                $("#titulo").focus();
                buscarIdPublicacion();
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

function buscarIdPublicacion(){
    $("#id").prop('disabled',false)
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
            $("#titulo").val(json.titulo);        
            $("#contenido").val(json.contenido); 
            //$("#imagen").val(json.imagen); 
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

function modificarPublicacion(){
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
           $("#id").focus();
           $("#id").select();
           if(exito==="success"){
                }
                }
               });
}  


        
        function eliminar(){
    $('#id').prop('disabled',false);
     var formData= new FormData(document.getElementById("formPrograma"));
    $('#id').prop('disabled',true);
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
           $("#id").focus();
           $("#id").select();
           if(exito==="success"){
             }
        }
      });
    
}
        
       
        
        
                
   