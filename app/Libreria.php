<?php

namespace App;

class Libreria
{


    function factorial($valor)
    {

        if( $valor == 0 || $valor == 1 ) $result = 1;
        else 
            $result = 1;
            for ($i = 1; $i <= $valor; $i++) {
                $result = $result * $i;
            }
        return $result;
    }
}
