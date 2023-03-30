<?php
namespace App\Classes;

class Libreria
{

function fibonacci(  $valor )
{
    if( $valor == 0 || $valor == 1  )
    {
        return 1;
    }
    else 
    {

        return fibonacci(  $valor -1  )+fibonacci(  $valor -2  ); 

    }

function factorial(  $valor )
{
    if( $valor == 0 || $valor == 1 )
    {
        return 1;
    }
    else 
    {
        return factorial( $valor -1  ) * $valor; 
    }
}

}