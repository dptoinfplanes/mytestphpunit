<?php

use PHPUnit\Framework\TestCase;
use app\Classes\Libreria;

class LibreriaTest extends TestCase
{
    public function test_factorial()
    {
        $lib = new Libreria();
        $result = $lib->factorial(5);
        $this->assertEquals(120, $result);
    }
}