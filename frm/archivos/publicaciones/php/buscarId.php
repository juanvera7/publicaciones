<?php
$mysqli= new mysqli("localhost","root","","proyecto1");
 if (mysqli_connect_errno()){
    die("Error al conectar: ".mysqli_connect_error());
 }
 $id = $_POST['cod_usuario'];
                    $sql="select * from usuarios where cod_usuario=".$id;
                    $ret=$mysqli->query($sql);
                    $row=$ret->fetch_array(MYSQLI_ASSOC);
                    
 $objeto = new stdClass();
 $objeto->mensaje ="Registros encontrados";
 $objeto->nombre_usuario = $row["nombre_usuario"];
 $objeto->pass_usuario = $row["pass_usuario"];
 $objeto->login_usuario = $row["login_usuario"];
 $json = json_encode($objeto);
 echo($json);          

?>
