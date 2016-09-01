<?php
 $mysqli= new mysqli("localhost","root","","proyecto1");
 if (mysqli_connect_errno()){
    die("Error al conectar: ".mysqli_connect_error());
 }
 
 $id = $_POST['cod_usuario'];
                    $sql="delete from usuarios where cod_usuario=".$id;
                    $ret=$mysqli->query($sql);
                    $res="Registro No eliminado";
                        if($ret==1){
                    $res="Registro Eliminado";
        }
        $mysqli->close();
        echo($res);
?>
