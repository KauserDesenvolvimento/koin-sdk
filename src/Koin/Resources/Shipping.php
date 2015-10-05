<?php

namespace Koin\Resources;

use stdClass;

class Shipping
{
    public $city;
    public $state;
    public $country;
    public $district;
    public $street;
    public $number;
    public $complement;
    public $zipCode;
    public $addressType;
    public $price;
    public $deliveryDate;
    public $shippingType;

    /**
     * Initialize a new instance.
     */
    public function initialize()
    {
        $this->data = new stdClass();
    }

    public function getAddressType()
    {
        return $this->addressType;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getComplement()
    {
        return $this->complement;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    public function getDistrict()
    {
        return $this->district;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getShippingType()
    {
        return $this->shippingType;
    }

    public function getState()
    {
        return $this->state;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function getZipCode()
    {
        return $this->zipCode;
    }

    public function setAddressType($addressType)
    {
        $this->addressType = $addressType;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function setComplement($complement)
    {
        $this->complement = $complement;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;
    }

    public function setDistrict($district)
    {
        $this->district = $district;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setShippingType($shippingType)
    {
        $this->shippingType = $shippingType;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function setStreet($street)
    {
        $this->street = $street;
    }

    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }

    public function getShipping()
    {
        return array(
            "Address"      => array(
                "City"        => $this->getCity(),
                "State"       => $this->getState(),
                "Country"     => $this->getCountry(),
                "District"    => $this->getDistrict(),
                "Street"      => $this->getStreet(),
                "Number"      => $this->getNumber(),
                "Complement"  => $this->getComplement(),
                "ZipCode"     => $this->getZipCode(),
                "AddressType" => $this->getAddressType(),
            ),
            "Price"        => $this->getPrice(),
            "DeliveryDate" => $this->getDeliveryDate(),
            "ShippingType" => $this->getShippingType(),
        );
    }

    public function getShippingJson()
    {
        return json_encode($this->getShipping());
    }
}
