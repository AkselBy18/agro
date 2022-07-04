<?php

class Paginas
{
    static public function enlacesPaginasModelo($x)
    {
        if($x == "principal")
        {
            $modulo = "vistas/modulos/principal.php";
        }
       
       else if($x == "validar")
        {
            $modulo = "vistas/modulos/validar.php";
        }
        else
        {
            $modulo = "vistas/modulos/login.php";
        }

        return $modulo;
    }
}