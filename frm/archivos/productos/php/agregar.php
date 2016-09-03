<?php
  $mysqli= new mysqli("localhost","root","","proyecto1");

    if (mysqli_connect_errno()){
        die("Error al conectar: ".mysqli_connect_error());
    }
    
    $nombre = $_REQUEST['nombre'];
    $descripcion = $_REQUEST['descripcion'];
    $precio = $_REQUEST['precio'];
    $cantidad = $_REQUEST['cantidad'];
    
    $imagenEscapes = $mysqli->real_escape_string(file_get_contents($_FILES["imagen"]["tmp_name"]));
    //los posibles valores que puedes obtener de la imagen son:
    //echo "<BR>".$_FILES["userfile"]["name];       //  nombre del archivo
    //echo "<BR>".$_FILES["userfile"]["type"];      // tipo
    //echo "<BR>".$_FILES["userfile"]["tmp_name"];  //nombre del archivo de la imagen temporal
    //echo "<BR>".$_FILES["userfile"]["size"];      //tamaño
    //Agregamos la imagena  la base de datos
    
    
        $sql = "INSERT INTO productos (nombre,descripcion,precio,cantidad,imagen) VALUES 
            ('".$nombre."','".$descripcion."','".$precio."','".$cantidad."','".$imagenEscapes."')";
        $ret=$mysqli->query($sql);
        $res="Producto No enviado";
        if($ret==1){
            $res="Producto agregado satisfactoriamente";
        }
        $mysqli->close();
        echo($res);
?>
