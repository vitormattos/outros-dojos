<?php

/* 

For documentation see http://phpunit.de
 
Running Test:

vendor/bin/phpunit --colors ProblemTest.php

*/
use PHPUnit\Framework\TestCase;

require dirname(__FILE__) . '/../Problem.php';

class ProblemTest extends TestCase
{
    function testVerificarSeExisteValor(){
        $valor = 50;
        $this->assertEmpty($valor);
    }
}
