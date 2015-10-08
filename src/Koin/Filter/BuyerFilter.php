<?php

namespace Koin\Filter;

use Koin\Helpers\StringHelper;

class BuyerFilter
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
            return $name;
        }

        return false;
    }

    public function setEmail($email)
    {
        if (is_string($email)) {
            $email = $this->helper->cutString($this->helper->removeExtraWhiteSpaces($email), 300);
            return $email;
        }

        return false;
    }

    public function setIp($ip)
    {
        if (is_string($ip)) {
            $ip = $this->helper->cutString($this->helper->removeExtraWhiteSpaces($ip), 15);
            return $ip;
        }

        return false;
    }

    public function setIsFirstPurchase($isfirstpurchase)
    {
        if ($isfirstpurchase) {
            $isfirstpurchase = true;
            return $isfirstpurchase;
        }

        return false;
    }

    public function setIsReliable($isreliable)
    {
        if (is_string($isreliable)) {
            $isreliable = $this->helper->cutString($this->helper->removeExtraWhiteSpaces($isreliable), 300);
            return $isreliable;
        }

        return false;
    }

    public function setBuyerType($buyertype)
    {
        if (is_string($buyertype)) {
            $buyertype = $this->helper->cutString($this->helper->removeExtraWhiteSpaces($buyertype), 300);
            return $buyertype;
        }

        return false;
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
            return $additionalinfo;
        }

        return false;
    }

    public function setBirthday($birthday)
    {
        if (is_string($birthday)) {
            $birthday = $this->helper->cutString($this->helper->removeExtraWhiteSpaces($birthday), 300);
            return $birthday;
        }

        return false;
    }

    public function setPhones($phones)
    {
        if (is_string($phones)) {
            $phones = $this->helper->cutString($this->helper->removeExtraWhiteSpaces($phones), 300);
            return $phones;
        }

        return false;
    }

    public function setAddress($address)
    {
        if (is_string($address)) {
            $address = $this->helper->cutString($this->helper->removeExtraWhiteSpaces($address), 300);
            return $address;
        }

        return false;
    }
}
