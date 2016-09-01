<?php
  $mysqli= new mysqli("localhost","root","","proyecto1");

    if (mysqli_connect_errno()){
        die("Error al conectar: ".mysqli_connect_error());
    }
    
    $titulo = $_REQUEST['titulo'];
    $contenido = $_REQUEST['contenido'];
    $fecha = date("d/m/y");
    
    $imagenEscapes = $mysqli->real_escape_string(file_get_contents($_FILES["imagen"]["tmp_name"]));
    //los posibles valores que puedes obtener de la imagen son:
    //echo "<BR>".$_FILES["userfile"]["name];       //  nombre del archivo
    //echo "<BR>".$_FILES["userfile"]["type"];      // tipo
    //echo "<BR>".$_FILES["userfile"]["tmp_name"];  //nombre del archivo de la imagen temporal
    //echo "<BR>".$_FILES["userfile"]["size"];      //tamaño
    //Agregamos la imagena  la base de datos
    
    
        $sql = "INSERT INTO publicaciones (titulo,contenido,fecha,imagen) VALUES 
            ('".$titulo."','".$contenido."','".$fecha."','".$imagenEscapes."')";
        $ret=$mysqli->query($sql);
        $res="Imagen No enviado";
        if($ret==1){
            $res="Imagen agregado satisfactoriamente";
        }
        $mysqli->close();
        echo($res);
?>
