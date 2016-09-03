<?php
 $mysqli= new mysqli("localhost","root","","proyecto1");
 if (mysqli_connect_errno()){
    die("Error al conectar: ".mysqli_connect_error());
 }
   $id = $_REQUEST['id'];
   $nombre = $_REQUEST['nombre'];
   $descripcion = $_REQUEST['descripcion'];
   $precio = $_REQUEST['precio'];
   $cantidad = $_REQUEST['cantidad'];
   $imagenEscapes = $mysqli->real_escape_string(file_get_contents($_FILES["imagen"]["tmp_name"])); 
    
    
        $sql = "update productos set nombre='".$nombre."',descripcion='".$descripcion."',precio='".$precio."',cantidad='".$cantidad."',imagen='".$imagenEscapes."'
            where id=".$id."";
        $ret=$mysqli->query($sql);
        $res="Producto No Modificado";
        if($ret==1){
            $res="Producto Modificado";
        }
        $mysqli->close();
        echo($res);
?>
