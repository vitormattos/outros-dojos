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
    function testVerificarSeExisteValor()
    {
        $model = new Problem();
        $this->assertEmpty($model->valor);
    }
    
    function testVerificarSeValorEUmNumero()
    {
        $model = new Problem();
        $model->valor = 50;
        $this->assertInternalType('integer', $model->valor);
    }
    
    function testVerificarSeValorNaoEUmNumero()
    {
        $model = new Problem();
        $model->valor = 'abacate';
        $this->assertEmpty($model->valorInformado());
    }
    function testVerificarSeValorEhMenorQueDez()
    {    
        $model = new Problem();
        $model->valor = 9;
        $this->assertEmpty($model->valorInformado());
        
    }
    
    function testVerificarSeValorNaoEhDivisivelPorDez()
    {
        $model = new Problem();
        $model->valor = 12;
        $this->assertEmpty($model->valorInformado());
        
    }
    
    function testVerificarSeValorEhDivisivelPorDez()
    {
        $model = new Problem();
        $model->valor = 20;
        $this->assertEquals(20, $model->valorInformado());
    }
    
    function testVerificarSeValorEhMaiorOuIgualADez()
    {
        $model = new Problem();
        $model->valor = 10;
        $this->assertEquals(10, $model->valorInformado(), "vc errou");
    }
    
    function testRetornaUmaNota()
    {
        $model = new Problem();
        $model->valor = 10;
        $this->assertCount(1, $model->troco());
    }
    
}
