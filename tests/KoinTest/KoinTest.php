<?php

require_once dirname(__FILE__) . '../../../vendor/autoload.php';

use Koin\Koin;

class KoinTest extends PHPUnit_Framework_TestCase
{
    private $koin;

    public function __construct()
    {
        $this->koin = new Koin();
    }

    public function testBuyer()
    {
        $this->koin->instanceBuyer();
    }

    public function testCurl()
    {
        $this->koin->instanceCurl(
            '84C2CBDB8A094706A0DF28A7CE0ED367',
            'D2361E4D906641A0B9A8E31465C07F7A',
            'sandbox'
        );
    }

    public function testConfig()
    {
        $this->koin->instanceConfig();
    }

    public function testShipping()
    {
        $this->koin->instanceShipping();
    }

    public function testItems()
    {
        $this->koin->instanceItems();
    }

}
