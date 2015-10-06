<?php

require_once dirname(__FILE__) . '../../../vendor/autoload.php';

use Koin\Koin;

class KoinCodesTest extends PHPUnit_Framework_TestCase
{
    private $koin;

    public function __construct()
    {
        $this->koin = new Koin();
    }

    public function testGetCode200()
    {
        $test   = 200;
        $code   = $this->koin->instanceCodes();
        $expect = 'Sua compra foi APROVADA! Obrigado por comprar com Koin Pós-Pago.';
        $this->assertEquals($expect, $code->getCode($test));
    }

    public function testGetCode300()
    {
    	$test   = 300;
        $code   = $this->koin->instanceCodes();
        $expect = 'Infelizmente sua compra não foi aprovada. Por favor, utilize outra forma de pagamento.';
        $this->assertEquals($expect, $code->getCode($test));
    }
}
