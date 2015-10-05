<?php

require_once dirname(__FILE__) . '../../../src/Koin/Koin.php';

use Koin\Koin;

class KoinBuyerTest extends PHPUnit_Framework_TestCase
{
    private $koin;

    public function __construct()
    {
        $this->koin = new Koin();
    }

    public function testSetBuyerName()
    {
        $test = 'Victor Henrique Ramos';

        $buyer = $this->koin->instanceBuyer();
        $buyer->setName($test);

        $this->assertEquals($test, $buyer->getName());
    }

    public function testSetBuyerIp()
    {
        $test = "127.0.0.1";

        $buyer = $this->koin->instanceBuyer();
        $buyer->setIp($test);

        $this->assertEquals($test, $buyer->getIp());
    }

    public function testSetBuyerIsFirstPurchase()
    {
        $test = true;

        $buyer = $this->koin->instanceBuyer();
        $buyer->setIsFirstPurchase($test);

        $this->assertEquals($test, $buyer->getIsFirstPurchase());
    }

    public function testSetBuyerIsReliable()
    {
        $test = true;

        $buyer = $this->koin->instanceBuyer();
        $buyer->setIsReliable($test);

        $this->assertEquals($test, $buyer->getIsReliable());
    }

    public function testSetBuyerBuyerType()
    {
        $test = 1;

        $buyer = $this->koin->instanceBuyer();
        $buyer->setBuyerType($test);

        $this->assertEquals($test, $buyer->getBuyerType());
    }

    public function testSetBuyerEmail()
    {
        $test = "victor@wbuzz.com.br";

        $buyer = $this->koin->instanceBuyer();
        $buyer->setEmail($test);

        $this->assertEquals($test, $buyer->getEmail());
    }

    public function testSetBuyerDocument()
    {
        $test = array(
            array(
                "key"   => "CPF",
                "Value" => "368.613.058-04",
            ),
        );

        $buyer = $this->koin->instanceBuyer();
        $buyer->setDocument($test);

        $this->assertEquals($test, $buyer->getDocument());
    }

    public function testSetBuyerAdditionalInfo()
    {
        $test = array(
            array(
                "key"   => "Birthday",
                "Value" => "18/10/1989",
            ),
        );

        $buyer = $this->koin->instanceBuyer();
        $buyer->setAdditionalInfo($test);

        $this->assertEquals($test, $buyer->getAdditionalInfo());
    }

    public function testSetBuyerPhones()
    {
        $test = array(
            array(
                "AreaCode"  => "44",
                "Number"    => "9167-1629",
                "PhoneType" => 2,
            ),
        );

        $buyer = $this->koin->instanceBuyer();
        $buyer->setPhones($test);

        $this->assertEquals($test, $buyer->getPhones());
    }

    public function testSetBuyerAddress()
    {
        $test = array(
            "City"        => "São Paulo",
            "State"       => "SP",
            "Country"     => "Brasil",
            "District"    => "Bela Vista",
            "Street"      => "Av. Paulista",
            "Number"      => 1728,
            "Complement"  => "7 andar",
            "ZipCode"     => "01310-200",
            "AddressType" => 1,
        );

        $buyer = $this->koin->instanceBuyer();
        $buyer->setAddress($test);

        $this->assertEquals($test, $buyer->getAddress());
    }
}
