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

        $documents = new \Koin\Resources\Document($test);

        $this->assertEquals(array(
            'CPF' => '66559711102',
            'RG' => '48.587.658-9',
        ), $documents->getDocuments());
    }

    public function testIfWrongCpfIsSetAsFalse()
    {
        $test = array(
            array('type' => 'CPF', 'value' => '00000000000'),
            array('type' => 'RG',  'value' =>  '48.587.658-9'),
        );

        $documents = new \Koin\Resources\Document($test);

        $this->assertEquals(array(
            'RG' => '48.587.658-9',
            'CPF' => false
        ), $documents->getDocuments());
    }

    public function testIfWrongRgIsSetAsFalse()
    {
        $test = array(
            array('type' => 'CPF', 'value' => '00000000000'),
            array('type' => 'RG',  'value' =>  '123456789123456789123'),
        );

        $documents = new \Koin\Resources\Document($test);

        $this->assertEquals(array(
            'RG' => false,
            'CPF' => false
        ), $documents->getDocuments());
    }
}
