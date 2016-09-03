<?php
$mysqli= new mysqli("localhost","root","","proyecto1");
 if (mysqli_connect_errno()){
    die("Error al conectar: ".mysqli_connect_error());
 }
<<<<<<< HEAD
 $id = $_POST['id'];
                    $sql="select * from publicaciones where id=".$id;
                    $ret=$mysqli->query($sql);
                    $row=$ret->fetch_array(MYSQLI_ASSOC);
                    
 $objeto = new stdClass();
 $objeto->mensaje ="Registros encontrados";
 $objeto->titulo = $row["titulo"];
 $objeto->contenido = $row["contenido"];
 //$objeto->imagen = $row["imagen"];
=======
 $id = $_POST['cod_usuario'];
                    $sql="select * from usuarios where cod_usuario=".$id;
                    $ret=$mysqli->query($sql);
                    $row=$ret->fetch_array(MYSQLI_ASSOC);
                    
 $objeto = new stdClass();
 $objeto->mensaje ="Registros encontrados";
 $objeto->nombre_usuario = $row["nombre_usuario"];
 $objeto->pass_usuario = $row["pass_usuario"];
 $objeto->login_usuario = $row["login_usuario"];
>>>>>>> branch 'master' of https://github.com/juanvera7/publicaciones.git
 $json = json_encode($objeto);
 echo($json);          

?>
