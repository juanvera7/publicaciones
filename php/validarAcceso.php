<?php
  $mysqli= new mysqli("localhost","root","","proyecto1");

    if (mysqli_connect_errno()){
        die("Error al conectar: ".mysqli_connect_error());
    }
       $login_usuario = $_REQUEST['login_usuario'];
          $password_usuario = $_REQUEST['password_usuario'];
        $sql = "select * from usuarios where login_usuario='".$login_usuario."' and pass_usuario='".$password_usuario."'" ;
        $ret=$mysqli->query($sql);
        $acceso="false";
       if($ret->num_rows==1){
            $acceso="true";
        }
        $pregunta = new stdClass();
        $pregunta->acceso=$acceso;
        $json =  json_encode($pregunta);
        $mysqli->close();
        echo($json);
?>
