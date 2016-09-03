<html>
    <head>
        <title>Productos</title>
    </head>
    <body>
        <div>
            <?php
           $mysqli= new mysqli("localhost","root","","proyecto1");

    if (mysqli_connect_errno()){
        die("Error al conectar: ".mysqli_connect_error());
    }
     $result=$mysqli->query("select id,titulo,substring(contenido,1,150)as contenido,fecha,imagen from publicaciones order by id desc;");
     while($row = $result->fetch_array(MYSQLI_ASSOC)){
        ?>
            <div>
                <article>
                    <h2><?php echo $row["titulo"]; ?></h2>
                    <div>
                        <div>
                            <?php
                            $cadena='<img src="php/mostrarimagen.php?id='.$row["id"].'"alt="Img" width="200"/>';
                                   echo $cadena;
                                   ?>
                        </div>
                        <p><?php echo $row["contenido"]; ?>...<a href="solo_post.php?id=
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

            

            
    