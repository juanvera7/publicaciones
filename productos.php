<html>
    <head>
        <title>Producto</title>
    </head>
    <body>
        <div>
            <?php
           $mysqli= new mysqli("localhost","root","","proyecto1");

    if (mysqli_connect_errno()){
        die("Error al conectar: ".mysqli_connect_error());
    }
     $result=$mysqli->query("select id,nombre, descripcion,precio,cantidad,imagen from productos order by id desc;");
     while($row = $result->fetch_array(MYSQLI_ASSOC)){
        ?>
            <div>
                <article>
                    <h2><?php echo $row["nombre"]; ?></h2>
                    <div>
                        <div>
                            <?php
                            $cadena='<img src="php/mostrarproducto.php?id='.$row["id"].'"alt="Img" width="200"/>';
                                   echo $cadena;
                                   ?>
                        </div>
                        <p><?php echo $row["descripcion"]; 
                                 echo   $row["cantidad"]; 
                                 echo   $row["precio"];?>...<a href="solo_post.php?id=
                                                        <?php echo $re['id']; ?>">Leer Mas</a> </p>
                    </div>
                </article>
            </div>
            <?php
           }
           ?>
        </div>
    </body>
</html>

            

            
    
