<?php

class Controlador
{
    #LLAMADA A LA PLANTILLA
    #------------------------------
    static public function pagina()
    {
        include "vistas/plantilla.php";
    }

    #LLAMADA A LOS DIVERSOS MODULOS
    #-------------------------------
    static public function enlacesPaginasControlador()
    {
        if(isset($_GET['opcion']))
        {
            $enlace = $_GET['opcion'];
        }
        else
        {
            $enlace = "login";
        }

        $respuesta = Paginas::enlacesPaginasModelo($enlace);
        include $respuesta;
    }
}