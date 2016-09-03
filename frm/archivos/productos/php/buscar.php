<?php
 $mysqli= new mysqli("localhost","root","","proyecto1");
 if (mysqli_connect_errno()){
    die("Error al conectar: ".mysqli_connect_error());
 }
 $result=$mysqli->query("SELECT * FROM productos WHERE nombre like '%".$_POST['bnombre']."%'");
 $tabla="";
 while($row = $result->fetch_array(MYSQLI_ASSOC)){
     $tabla = $tabla."<tr>"
                            ."<td>".$row["id"]."</td>"
                            ."<td>".$row["nombre"]."</td>"
                            ."<td>".$row["cantidad"]."</td>"
                            ."</tr>";
 }
 $pregunta = new stdClass();
 $pregunta->mensajes ="Producto encontrado";
 $pregunta->contenido = $tabla;
 $json = json_encode($pregunta);
 echo($json);
?>
