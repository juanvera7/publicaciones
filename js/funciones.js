function validarAcceso(){
    $("#mensajes").html("Mensajes del Sistema");
    if($("#login_usuario").val()===""){
        $("#mensajes").html("Usuario no debe estar vacio");
         }
     else if($("#password_usuario").val()===""){
        $("#mensajes").html("Clave no debe estar vacio");
         }
      else{
          validarAccesoAjax();
      }
      }
  function validarAccesoAjax(){
      var datosFormulario= $("#formAcceso").serialize();
        $.ajax({
                url:"php/validarAcceso.php",
                type:"post",
                dataType:'json',
                data:datosFormulario,
                
                beforeSend: function(objeto){
               $("#mensajes").html("Enviando Datos al servidor...")
                 },
                 success:function(json){
                 if(json.acceso==="true"){
                     location.href="menu.html"
                 }
                 else{
                     $("#mensajes").html("Credencial Invalida");
                 }
               },
               
               error:function(e){
                    $("#mensajes").html("No se pudo conectar con el servidor Error:"+e.status);
                  },
                complete:function(objete,exito,error){
                    if(exito==="succes"){
                        
                    }
                }
  });        
}        