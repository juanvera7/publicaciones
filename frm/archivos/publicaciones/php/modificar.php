<?php
 $mysqli= new mysqli("localhost","root","","proyecto1");
 if (mysqli_connect_errno()){
    die("Error al conectar: ".mysqli_connect_error());
 }
<<<<<<< HEAD
   $id = $_REQUEST['id'];
   $titulo = $_REQUEST['titulo'];
   $contenido = $_REQUEST['contenido'];
   $fecha = date("d/m/y");
   $imagenEscapes = $mysqli->real_escape_string(file_get_contents($_FILES["imagen"]["tmp_name"])); 
    
    
        $sql = "update publicaciones set titulo='".$titulo."',contenido='".$contenido."',fecha='".$fecha."',imagen='".$imagenEscapes."'
            where id=".$id."";
=======
    $cod_usuario = $_POST['cod_usuario']; 
    $nombre_usuario = $_POST['nombre_usuario'];
    $login_usuario = $_POST['login_usuario'];
    $pass_usuario = $_POST['password_usuario'];
        $sql = "update usuarios set nombre_usuario='".$nombre_usuario."',login_usuario='".$login_usuario."',pass_usuario='".$pass_usuario."'
            where cod_usuario=".$cod_usuario."";
>>>>>>> branch 'master' of https://github.com/juanvera7/publicaciones.git
        $ret=$mysqli->query($sql);
        $res="Registro No Modificado";
        if($ret==1){
            $res="Registro Modificado";
        }
        $mysqli->close();
        echo($res);
?>
