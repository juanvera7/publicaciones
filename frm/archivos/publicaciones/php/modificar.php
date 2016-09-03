<?php
 $mysqli= new mysqli("localhost","root","","proyecto1");
 if (mysqli_connect_errno()){
    die("Error al conectar: ".mysqli_connect_error());
 }
   $id = $_REQUEST['id'];
   $titulo = $_REQUEST['titulo'];
   $contenido = $_REQUEST['contenido'];
   $fecha = date("d/m/y");
   $imagenEscapes = $mysqli->real_escape_string(file_get_contents($_FILES["imagen"]["tmp_name"])); 
    
    
        $sql = "update publicaciones set titulo='".$titulo."',contenido='".$contenido."',fecha='".$fecha."',imagen='".$imagenEscapes."'
            where id=".$id."";
        $ret=$mysqli->query($sql);
        $res="Registro No Modificado";
        if($ret==1){
            $res="Registro Modificado";
        }
        $mysqli->close();
        echo($res);
?>
