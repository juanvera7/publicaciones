<?php
 $mysqli= new mysqli("localhost","root","","proyecto1");
 if (mysqli_connect_errno()){
    die("Error al conectar: ".mysqli_connect_error());
 }
 $result=$mysqli->query("SELECT * FROM publicaciones WHERE titulo like '%".$_POST['btitulo']."%'");
 $tabla="";
 while($row = $result->fetch_array(MYSQLI_ASSOC)){
     $tabla = $tabla."<tr>"
                            ."<td>".$row["id"]."</td>"
                            ."<td>".$row["titulo"]."</td>"
                            ."</tr>";
 }
 $pregunta = new stdClass();
 $pregunta->mensajes ="Datos encontrados";
 $pregunta->contenido = $tabla;
 $json = json_encode($pregunta);
 echo($json);
?>
