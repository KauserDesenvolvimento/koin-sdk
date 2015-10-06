<?php

namespace Koin;

use Koin\Resources\Buyer;
use Koin\Resources\Config;
use Koin\Resources\Items;
use Koin\Resources\Shipping;
use Koin\Response\Codes;
use Koin\Response\Curl;

class Koin
{

    public $buyer;
    public $config;
    public $shipping;
    public $items;
    public $FraudId;
    public $Reference;
    public $RequestDate;
    public $Price;
    public $IsGift;
    public $order;

    public function __construct()
    {
        /* date timezone used by API */
        date_default_timezone_set("UTC");
    }

    /**
     * Gets the value of buyer.
     *
     * @return mixed
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * Gets the value of config.
     *
     * @return mixed
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Gets the value of FraudId.
     *
     * @return mixed
     */
    public function getFraudId()
    {
        return $this->FraudId;
    }

    /**
     * Gets the value of IsGift.
     *
     * @return mixed
     */
    public function getIsGift()
    {
        return $this->IsGift;
    }

    /**
     * Gets the value of items.
     *
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Gets the value of Price.
     *
     * @return mixed
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * Gets the value of Reference.
     *
     * @return mixed
     */
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * Gets the value of RequestDate.
     *
     * @return mixed
     */
    public function getRequestDate()
    {
        return $this->RequestDate;
    }

    /**
     * Gets the value of shipping.
     *
     * @return mixed
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    public function instanceCodes()
    {
        return new Codes();
    }

    public function instanceBuyer()
    {
        return new Buyer();
    }

    public function instanceConfig()
    {
        return new Config();
    }

    public function instanceCurl($consumerKey, $secretKey, $environment)
    {
        return new Curl($consumerKey, $secretKey, $environment);
    }

    public function instanceItems()
    {
        return new Items();
    }

    public function instanceShipping()
    {
        return new shipping();
    }

    public function mountOrder()
    {
        $this->order = array_merge(
            $this->getConfig(),
            array(
                "FraudId"     => $this->getFraudId(),
                "Reference"   => $this->getReference(),
                "RequestDate" => $this->getRequestDate(),
                "Price"       => $this->getPrice(),
                "IsGift"      => $this->getIsGift(),
            ),
            array(
                "Buyer"    => $this->getBuyer(),
                "Shipping" => $this->getShipping(),
                "Items"    => $this->getItems(),
            )
        );
    }

    public function getOrder()
    {
        $this->mountOrder();

        return $this->order;
    }

    /**
     * Sets the value of buyer.
     *
     * @param mixed $buyer the buyer
     *
     * @return self
     */
    public function setBuyer($buyer)
    {
        $this->buyer = $buyer;

        return $this;
    }

    /**
     * Sets the value of config.
     *
     * @param mixed $config the config
     *
     * @return self
     */
    public function setConfig($config)
    {
        $this->config = $config;

        return $this;
    }

    /**
     * Sets the value of FraudId.
     *
     * @param mixed $FraudId the fraud id
     *
     * @return self
     */
    public function setFraudId($FraudId)
    {
        $this->FraudId = $FraudId;

        return $this;
    }

    /**
     * Sets the value of IsGift.
     *
     * @param mixed $IsGift the is gift
     *
     * @return self
     */
    public function setIsGift($IsGift)
    {
        $this->IsGift = $IsGift;

        return $this;
    }

    /**
     * Sets the value of items.
     *
     * @param mixed $items the items
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * Sets the value of Price.
     *
     * @param mixed $Price the price
     *
     * @return self
     */
    public function setPrice($Price)
    {
        $this->Price = $Price;

        return $this;
    }

    /**
     * Sets the value of Reference.
     *
     * @param mixed $Reference the reference
     *
     * @return self
     */
    public function setReference($Reference)
    {
        $this->Reference = $Reference;

        return $this;
    }

    /**
     * Sets the value of RequestDate.
     *
     * @param mixed $RequestDate the request date
     *
     * @return self
     */
    public function setRequestDate($RequestDate)
    {
        $this->RequestDate = $RequestDate;

        return $this;
    }

    /**
     * Sets the value of shipping.
     *
     * @param mixed $shipping the shipping
     *
     * @return self
     */
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;

        return $this;
    }
}
