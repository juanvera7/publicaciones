<?php
$mysqli= new mysqli("localhost","root","","proyecto1");
 if (mysqli_connect_errno()){
    die("Error al conectar: ".mysqli_connect_error());
 }
 
 $id= $_GET['id'];
    $result=$mysqli->query("SELECT * FROM productos WHERE id=".$id);
    $row=$result->fetch_array(MYSQLI_ASSOC);
    echo $row["imagen"];

?>
