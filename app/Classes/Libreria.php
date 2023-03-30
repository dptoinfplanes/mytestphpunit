<?php

namespace App\Classes;

class Libreria
{


    function factorial($valor)
    {
        $result = 1;
        for ($i = 0; $i < $valor; $i++) {
            $result = $result * $i;
        }
        return $result;
    }
}
