<?php

namespace Koin\Validation;

use Koin\Helpers\StringHelper;

class BuyerValidation
{

    /**
     * Initialize a new instance.
     */
    public function __construct()
    {
        $this->helper = new StringHelper();
    }

    public function setName($name)
    {
        if (is_string($name)) {
            $name = $this->helper->cutString($this->helper->removeExtraWhiteSpaces($name), 100);
        } else {
            $name = false;
        }

        return $name;
    }

    public function setEmail($email)
    {
        if (is_string($email)) {
            $email = $this->helper->cutString($this->helper->removeExtraWhiteSpaces($email), 300);
        } else {
            $email = false;
        }

        return $email;
    }

    public function setIp($ip)
    {
        if (is_string($ip)) {
            $ip = $this->helper->cutString($this->helper->removeExtraWhiteSpaces($ip), 15);
        } else {
            $ip = false;
        }

        return $ip;
    }

    public function setIsFirstPurchase($isfirstpurchase)
    {
        if ($isfirstpurchase) {
            $isfirstpurchase = true;
        } else {
            $isfirstpurchase = false;
        }

        return $isfirstpurchase;
    }

    public function setIsReliable($isreliable)
    {
        if (is_string($isreliable)) {
            $isreliable = $this->helper->cutString($this->helper->removeExtraWhiteSpaces($isreliable), 300);
        } else {
            $isreliable = false;
        }

        return $isreliable;
    }

    public function setBuyerType($buyertype)
    {
        if (is_string($buyertype)) {
            $buyertype = $this->helper->cutString($this->helper->removeExtraWhiteSpaces($buyertype), 300);
        } else {
            $buyertype = false;
        }

        return $buyertype;
    }

    public function setDocument($document)
    {
        $document = new \Koin\Resources\Document($document);
        if (!$document) {
            $document = false;
        }

        return $document;
    }

    public function setAdditionalInfo($additionalinfo)
    {
        if (is_string($additionalinfo)) {
            $additionalinfo = $this->helper->cutString($this->helper->removeExtraWhiteSpaces($additionalinfo), 300);
        } else {
            $additionalinfo = false;
        }

        return $additionalinfo;
    }

    public function setBirthday($birthday)
    {
        if (is_string($birthday)) {
            $birthday = $this->helper->cutString($this->helper->removeExtraWhiteSpaces($birthday), 300);
        } else {
            $birthday = false;
        }

        return $birthday;
    }

    public function setPhones($phones)
    {
        if (is_string($phones)) {
            $phones = $this->helper->cutString($this->helper->removeExtraWhiteSpaces($phones), 300);
        } else {
            $phones = false;
        }

        return $phones;
    }

    public function setAddress($address)
    {
        if (is_string($address)) {
            $address = $this->helper->cutString($this->helper->removeExtraWhiteSpaces($address), 300);
        } else {
            $address = false;
        }

        return $address;
    }
}
