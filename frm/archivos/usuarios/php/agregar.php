<?php
  $mysqli= new mysqli("localhost","root","","proyecto1");

    if (mysqli_connect_errno()){
        die("Error al conectar: ".mysqli_connect_error());
    }
    $nombre_usuario = $_REQUEST['nombre_usuario'];
    $login_usuario = $_REQUEST['login_usuario'];
    $pass_usuario = $_REQUEST['password_usuario'];
        $sql = "INSERT INTO usuarios (nombre_usuario,login_usuario,pass_usuario) VALUES ('"
                .$nombre_usuario."','".$login_usuario."','".$pass_usuario."')";
        $ret=$mysqli->query($sql);
        $res="Mensaje No enviado";
        if($ret==1){
            $res="Usuario agregado satisfactoriamente";
        }
        $mysqli->close();
        echo($res);
?>
