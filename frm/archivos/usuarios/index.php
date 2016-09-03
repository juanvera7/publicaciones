<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <title>Carga de Usuarios</title>
        <link rel="icon" type="image/png" href="../../../img/logo.png"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="../../../css/bootstrap-theme.min.css"
              rel="stylesheet" type="text/css"/>
        <link href="../../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../../css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="confirmar"></div>
        <div id="buscar"></div>
        <div id="panelPrograma" class="panel panel-primary">
        <div class="panel-body">
            <form id="formPrograma" enctype="multipart/form-data" method="POST">
                  <div class="row">
                       <div class="col-md-2 derecha">
                           <span>Codigo</span>
                      </div>
                       <div class="col-md-1 derecha">
                         <input id="cod_usuario" name="cod_usuario"
                                type="text"
                                class="form-control input-sm"
                                placeholder="Codigo">
                      </div>
                       <div class="col-md-1 derecha">
                           <button id="botonBuscarIdUsuario"
                                   type="button"
                                   class="btn btn-primary btn-sm">
                               <span class="glyphicon glyphicon-search"></span>
                           </button>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-2 derecha">
                          <span>Nombre</span>
                      </div>
                      <div class="col-md-2">
                           <input id="nombre_usuario" name="nombre_usuario"
                             type="text" class="form-control input-sm"
                             placeholder="Nombre">
                      </div>
                </div>
                  <div class="row">
                      <div class="col-md-2 derecha">
                           <span>Login</span>
                      </div>
                      <div class="col-md-2">
                          <input id="login_usuario" name="login_usuario"
                                 type="text" class="form-control input-sm" 
                                 placeholder="Nombre"
                      </div>
                </div>
                 </div>
                  <div class="row">
                      <div class="col-md-2 derecha">
                          <span>Password<span>
                      </div>
                      <div class="col-md-2">
                          <input id="password_usuario" name="password_usuario"
                                 type="password" class="form-control
                                 input-sm" placeholder="Password">
                      </div>
                  </div>
             <div class="row">
                      <div class="col-md-2 derecha">
                          <span>Repetir Password<span>
                      </div>
                      <div class="col-md-2">
                          <input id="rep_pass" name="rep_pass"
                                 type="password" class="form-control
                                 input-sm" placeholder="Repetir Password">
                      </div>
                  </div>
</form>
            <div class="panel-footer centrado">
                <button id="botonAgregarUsuario" type="button"
                        class="btn btn-primary btn-sm">Agregar</button>
            <button id="botonModificarUsuario" type="button"
                    class="btn btn-primary btn-sm">Modificar</button>
                             <button id="bottonCancelar" type="button"
                            class="btn btn-primary btn-sm">Cancelar</button>
                              <button id="botonSalir" type="button"
                            class="btn btn-primary btn-sm">Salir</button>
                              <button id="bottonEliminar" type="button"
                            class="btn btn-primary btn-sm">Eliminar</button>
                            
            <div id="mensajes" class="well well-sm centrado">
                Mensajes del Sistema.</div>
            <div class="modal fade" id="confirmarEliminar" tabindex="-1"
                 role="dialog"
                 aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm"
                     <div class="modal-content">
                         <div class="modal-header centrado">
                             <button type="button" class="close"
                                     data-dismiss="modal">
                                 <span aria-hidden="true">&times;</span>
                                 <span class="sr-only">Close</span><button>
                                     <h4 class="modal-title" id="myModalLabel">
                                         Mensaje del Sistema</h4>
                                     </div>
                         <div class="modal-body">
                                Está seguro de eliminar estos datos
                         </div>
                         <div class="modal-footer centrado">
                             <button id="confirmarEliminar" type="button"
                                     class="btn btn-primary btn-sm">
                                 Eliminar
                                     </button>
                         </button>
                                 <button type="button" class="btn btn-default 
                                         btn-sm" data-dismiss="modal">
                                 Cancelar
                                 </button>
                         </div>
                         </div>
                                     </h4>
                                 
                             
                         </div>
                    </div>
            </div>
        <script src="../../../js/jquery.min.js" type="text/javascript">
        </script>
        <script src="../../../js/bootstrap.min.js"
                type="text/javascript"></script>
                <script src="../../../js/funciones.js"
                        type="text/javascript"></script>
                        <script src="js/funciones.js" type="text/javascript"></script>
                        <script>
                      //verificarSesion(true);
                      $("buscar").css("display","none");
                      $("#botonBuscarIdUsuario").on("click",function(){
                          $("#buscar").load("buscar.html");
                          $("#buscar").fadeIn("slow");
                          $("#panelPrograma").fadeOut("slow");
<<<<<<< HEAD
                          
                          $("#botonAgregarUsuario").prop("disabled",true);
                          $("#botonModificarUsuario").prop("disabled",false);
                          $("#bottonEliminar").prop("disabled",false);
                          $("#bottonCancelar").prop("disabled",true);
                      });
                      
                     $("#botonAgregarUsuario").on("click",function(){
                         agregarUsuario();
                           });
                     
                     $("#botonModificarUsuario").on("click",function(){
                         modificarUsuario();
                           });
                       $("#bottonEliminar").on("click",function(){
                         eliminarUsuario();
                           });
                      
                        $("#confirmarEliminar").modal("hide");
                        
                        $("#botonSalir").on("click",function(){
                      location.href="../../../menu.html";
                  });
                         
                         
                        
                        
                      
                     $("#bottonCancelar").on("click",function(){
                          $("#botonAgregarUsuario").prop("disabled",false);
                          $("#botonModificarUsuario").prop("disabled",true);
                          $("#bottonEliminar").prop("disabled",true);
                          $("#bottonCancelar").prop("disabled",true);
                          $("#id").prop("disabled",true);
                          limpiarCampos();
=======
                      });
                      
                     $("#botonAgregarUsuario").on("click",function(){
                         agregarUsuario();
                           });
                     
                     $("#botonModificarUsuario").on("click",function(){
                         modificarUsuario();
                           });
                       $("#bottonEliminar").on("click",function(){
                         eliminarUsuario();
                           });
                      
                        $("#confirmarEliminar").modal("hide");
                        
                        $("#botonSalir").on("click",function(){
                      location.href="../../../menu.html";
                  });
                         
                         
                        
                        
                      
                          $("#botonBuscarUsuario").on("click",function(){
                          $("#botonAgregarUsuario").prop("click",false);
                          $("#botonModificarUsuario").prop("click",true);
                          $("#bottonEliminar").prop("click",true);
                          $("#botonBuscarUsuario").prop("click",true);
                          $("#id").prop("disabled",true);limpiarCampos();
>>>>>>> branch 'master' of https://github.com/juanvera7/publicaciones.git
                        });
                      </script>
    </body>
</html>
                               
                        
                       
                        
                      
                      
                      
    


                            
                            
            
            
            
                                 
                      
 
