<?php
 $mysqli= new mysqli("localhost","root","","proyecto1");
 if (mysqli_connect_errno()){
    die("Error al conectar: ".mysqli_connect_error());
 }
 $result=$mysqli->query("SELECT * FROM usuarios WHERE nombre_usuario like '%".$_POST['bnombre_usuario']."%'");
 $tabla="";
 while($row = $result->fetch_array(MYSQLI_ASSOC)){
     $tabla = $tabla."<tr>"
                            ."<td>".$row["cod_usuario"]."</td>"
                            ."<td>".$row["nombre_usuario"]."</td>"
                            ."</tr>";
 }
 $pregunta = new stdClass();
 $pregunta->mensajes ="Datos encontrados";
 $pregunta->contenido = $tabla;
 $json = json_encode($pregunta);
 echo($json);
?>
