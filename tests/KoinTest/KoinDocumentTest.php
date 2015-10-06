<?php

require_once dirname(__FILE__) . '../../../vendor/autoload.php';

use Koin\Koin;

class KoinDocumentTest extends PHPUnit_Framework_TestCase
{
    private $koin;

    public function __construct()
    {
        $this->koin = new Koin();
    }

    public function testConstruction()
    {
        $test = array(
            array('type' => 'CPF', 'value' => '665.597.111-02'),
            array('type' => 'RG',  'value' =>  '48.587.658-9'),
        );

        $documents = $this->koin->instanceDocument($test);

        $this->assertEquals(array(
            'CPF' => '66559711102',
            'RG' => '48.587.658-9',
        ), $documents->getDocuments());
    }
}
