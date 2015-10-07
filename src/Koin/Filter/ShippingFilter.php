<?php

namespace Koin\Filter;

use Koin\Helpers\StringHelper;

class ShippingFilter
{
    public function __construct()
    {
        $this->helper = new StringHelper();
    }

    public function setCity($city)
    {
        if (is_string($city)) {
            return $this->helper->cutString($this->helper->removeExtraWhiteSpaces($city), 100);
        }
        return false;
    }

    public function setState($state)
    {
        if (is_string($state)) {
            return $this->helper->custString($this->helper->removeExtraWhiteSpaces($state), 2);
        }
        return false;
    }

    public function setCountry($country)
    {
        if (is_string($country)) {
            return $this->helper->custString($this->helper->removeExtraWhiteSpaces($country), 100);
        }
        return false;
    }

    public function setDistrict($district)
    {
        if (is_string($district)) {
            return $this->helper->custString($this->helper->removeExtraWhiteSpaces($district), 100);
        }
        return false;
    }

    public function setStreet($street)
    {
        if (is_string($street)) {
            return $this->helper->custString($this->helper->removeExtraWhiteSpaces($street), 100);
        }
        return false;
    }

    public function setNumber($number)
    {
        if (is_string($number)) {
            return $this->helper->custString($this->helper->removeExtraWhiteSpaces($number), 10);
        }
        return false;
    }

    public function setComplement($complement)
    {
        if (is_string($complement)) {
            return $this->helper->custString($this->helper->removeExtraWhiteSpaces($complement), 300);
        }
        return false;
    }

    public function setZipCode($zipCode)
    {
        if (is_string($zipCode)) {
            return $this->helper->custString($this->helper->removeExtraWhiteSpaces($zipCode), 10);
        }
        return false;
    }

    public function setAddressType($addressType)
    {
        if (is_numeric($addressType)) {
            return $addressType;
        }
        return false;
    }

    public function setPrice($price)
    {
        if (is_numeric($price)) {
            return number_format($price, 2);
        }
        return false;
    }

    public function setDeliveryDate($deliveryDate)
    {
        if (is_string($deliveryDate)) {
            return $this->helper->custString($this->helper->removeExtraWhiteSpaces($deliveryDate), 100);
        }
        return false;
    }

    public function setShippingType($shippingType)
    {
        if (is_string($shippingType)) {
            return $this->helper->custString($this->helper->removeExtraWhiteSpaces($shippingType), 100);
        }
        return false;
    }
}
