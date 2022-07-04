<?php
    $usuario = $_POST["usuario"];
    $contrasenia = $_POST["contra"];

    session_start();
    $_SESSION['usuario']=$usuario;

    include('db.php');

    $consulta = "SELECT * FROM persona where correo='$usuario' and contrasena='$contrasenia'";

    $resultado = mysqli_query($conexion,$consulta);
    
    $filas = mysqli_num_rows($resultado);

    if($filas)
    {
        ?>
         <script>
           window.location="index.php?opcion=principal";
         </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert("Los datos son incorrectos");
            window.location="index.php?opcion=login";
        </script>
        <?php

    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);

?>