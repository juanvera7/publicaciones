<?php
$mysqli= new mysqli("localhost","root","","proyecto1");
 if (mysqli_connect_errno()){
    die("Error al conectar: ".mysqli_connect_error());
 }
 $id = $_POST['id'];
                    $sql="select * from productos where id=".$id;
                    $ret=$mysqli->query($sql);
                    $row=$ret->fetch_array(MYSQLI_ASSOC);
                    
 $objeto = new stdClass();
 $objeto->mensaje ="Registros encontrados";
 $objeto->nombre = $row["nombre"];
 $objeto->descripcion = $row["descripcion"];
 $objeto->precio = $row["precio"];
 $objeto->cantidad = $row["cantidad"];
 //$objeto->imagen = $row["imagen"];
 $json = json_encode($objeto);
 echo($json);          

?>
