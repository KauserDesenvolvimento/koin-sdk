<?php

require_once dirname(__FILE__) . '../../src/Koin/Koin.php';

use Koin\Koin;

$koin = new Koin(true);

$buyer = $koin->instanceBuyer();

$buyer->setName("Victor Henrique Ramos");
$buyer->setIp("127.0.0.1");
$buyer->setIsFirstPurchase(true);
$buyer->setIsReliable(true);
$buyer->setBuyerType(1);
$buyer->setEmail("victor@wbuzz.com.br");

$buyer->setDocument(array(
    array(
        "key"   => "CPF",
        "Value" => "111.223.058-04",
    ),
));
$buyer->setAdditionalInfo(array(
    array(
        "key"   => "Birthday",
        "Value" => "18/10/1929",
    ),
));
$buyer->setPhones(array(
    array(
        "AreaCode"  => "41",
        "Number"    => "9267-1619",
        "PhoneType" => 2,
    ),
));
$buyer->setAddress(array(
    "City"        => "São Paulo",
    "State"       => "SP",
    "Country"     => "Brasil",
    "District"    => "Bela Vista",
    "Street"      => "Av. Paulista",
    "Number"      => 1728,
    "Complement"  => "7 andar",
    "ZipCode"     => "01310-200",
    "AddressType" => 1,
));
$koin->setBuyer($buyer->getBuyer());

$shipping = $koin->instanceShipping();
$shipping->setCity("Maringá");
$shipping->setState("PR");
$shipping->setCountry("BRA");
$shipping->setDistrict("Jardim Paulista");
$shipping->setStreet("Rua dos Testes");
$shipping->setNumber("510");
$shipping->setComplement("Casa A");
$shipping->setZipCode("87041-000");
$shipping->setAddressType(1);
$shipping->setPrice(30.00);
$shipping->setDeliveryDate("2015-12-15 00:00:00");
$shipping->setShippingType(1);
$koin->setShipping($shipping->getShipping());

$items    = $koin->instanceItems();
$produtos = array(
    array(
        "Reference"   => "Prod1",
        "Description" => "Iphone",
        "Category"    => "Celulares",
        "Quantity"    => 2,
        "Price"       => 108.90,
        "Attributes"  => array(),
    ),
);
foreach ($produtos as $produto) {
    $items->addItem(
        $produto["Reference"],
        $produto["Description"],
        $produto["Category"],
        $produto["Quantity"],
        $produto["Price"],
        $produto["Attributes"]
    );
}
$koin->setItems($items->getItems());

$koin->setFraudId('dkf348lcu20ecvf8013gfckdksmd');
$koin->setReference('001');
$koin->setRequestDate(date("Y-m-d H:i:s"));
$koin->setPrice(475.60);
$koin->setIsGift(false);

$config = $koin->instanceConfig();
$config->setCurrency("BRL");
$config->setDiscountPercent(0);
$config->setDiscountValue(0);
$config->setIncreasePercent(0);
$config->setIncreaseValue(0);
$koin->setConfig($config->getConfig());

$curl = $koin->instanceCurl(
    '84C2CBDB8A094706A0DF28A7CE0ED367',
    'D2361E4D906641A0B9A8E31465C07F7A',
    'production'
);

header('Content-type: application/json; chartset=utf-8');
echo $curl->sendPost($koin->getOrder());
