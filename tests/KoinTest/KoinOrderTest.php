<?php

require_once dirname(__FILE__) . '../../../vendor/autoload.php';

use Koin\Koin;

class KoinOrderTest extends PHPUnit_Framework_TestCase
{
    private $koin;

    public function __construct()
    {
        $this->koin = new Koin();
    }

    public function testOrderMount()
    {
        $buyer = $this->koin->instanceBuyer();
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
        $this->koin->setBuyer($buyer->getBuyer());

        $shipping = $this->koin->instanceShipping();
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
        $this->koin->setShipping($shipping->getShipping());

        $items    = $this->koin->instanceItems();
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
        $this->koin->setItems($items->getItems());

        $this->koin->setFraudId('82376kjsdgh');
        $this->koin->setReference('001');
        $this->koin->setRequestDate(date("Y-m-d H:i:s"));
        $this->koin->setPrice(475.60);
        $this->koin->setIsGift(false);

        $config = $this->koin->instanceConfig();
        $config->setCurrency("BRL");
        $config->setDiscountPercent(0);
        $config->setDiscountValue(0);
        $config->setIncreasePercent(0);
        $config->setIncreaseValue(0);
        $this->koin->setConfig($config->getConfig());
    }
}
