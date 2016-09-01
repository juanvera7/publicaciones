<?php
 $mysqli= new mysqli("localhost","root","","proyecto1");
 if (mysqli_connect_errno()){
    die("Error al conectar: ".mysqli_connect_error());
 }
 
 $id = $_POST['id'];
                    $sql="delete from publicaciones where id=".$id;
                    $ret=$mysqli->query($sql);
                    $res="Registro No eliminado";
                        if($ret==1){
                    $res="Registro Eliminado";
        }
        $mysqli->close();
        echo($res);
?>
