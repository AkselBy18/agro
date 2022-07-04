<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio</title>
    <link rel="stylesheet" href="vistas/css/estilo.css">
</head>

<body>
    <div class="borde">
        <!-- aqui va el menu estatico-->
        <?php
                if(isset($_GET['opcion']))
                {
                    $enlace = $_GET['opcion'];
                    //validamos las opciones para el usuario cientifico
                    if($enlace != 'login' )
                    {
                        //mostramos su menu correspondiente
                        require("modulos/menu.php");        
                    }
                }
        
        ?>
    </div>
    <div class="borde">
        <!-- aqui va la parte dinamica -->
        <?php
            $mvc = new Controlador();
            $mvc -> enlacesPaginasControlador();
        ?>
    </div>
    <div>
        <!-- aqui va el pie de pagina estatico-->
        <?php
           // require("modulos/footer.php");    
        ?>
    </div>
</body>

</html>