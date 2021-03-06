<?php

namespace Koin\Resources;

use Koin\Filter\BuyerFilter;

class Buyer
{
    public $name;
    public $ip;
    public $isFirstPurchase;
    public $isReliable;
    public $buyerType;
    public $email;
    public $document;
    public $additionalInfo;
    public $birthday;
    public $phones;
    public $address;

    /**
     * @var stClass
     */
    public $filter;

    public function __construct(array $data = null)
    {
        if (isset($data['name'])) {
            $this->setName($data['name']);
        }

        if (isset($data['ip'])) {
            $this->setIp($data['ip']);
        }

        if (isset($data['isFirstPurchase'])) {
            $this->setIsFirstPurchase($data['isFirstPurchase']);
        }

        if (isset($data['isReliable'])) {
            $this->setIsReliable($data['isReliable']);
        }

        if (isset($data['buyerType'])) {
            $this->setBuyerType($data['buyerType']);
        }

        if (isset($data['email'])) {
            $this->setEmail($data['email']);
        }

        if (isset($data['document'])) {
            $this->setDocument($data['document']);
        }

        if (isset($data['additionalInfo'])) {
            $this->setAdditionalInfo($data['additionalInfo']);
        }

        if (isset($data['birthday'])) {
            $this->setBirthday($data['birthday']);
        }

        if (isset($data['phones'])) {
            $this->setPhones($data['phones']);
        }

        if (isset($data['address'])) {
            $this->setAddress($data['address']);
        }

        $this->filter = new BuyerFilter();
    }

    /**
     * Gets the value of name.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the value of name.
     *
     * @param mixed $name the name
     *
     * @return self
     */
    public function setName($name)
    {
        $name = $this->filter->setName($name);

        if ($name) {
            $this->name = $name;
            return $this;
        }

        $this->name = "";
        return $this;
    }

    /**
     * Gets the value of ip.
     *
     * @return mixed
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Sets the value of ip.
     *
     * @param mixed $ip the ip
     *
     * @return self
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Gets the value of isFirstPurchase.
     *
     * @return mixed
     */
    public function getIsFirstPurchase()
    {
        return $this->isFirstPurchase;
    }

    /**
     * Sets the value of isFirstPurchase.
     *
     * @param mixed $isFirstPurchase the is first purchase
     *
     * @return self
     */
    public function setIsFirstPurchase($isFirstPurchase)
    {
        $this->isFirstPurchase = $isFirstPurchase;

        return $this;
    }

    /**
     * Gets the value of isReliable.
     *
     * @return mixed
     */
    public function getIsReliable()
    {
        return $this->isReliable;
    }

    /**
     * Sets the value of isReliable.
     *
     * @param mixed $isReliable the is reliable
     *
     * @return self
     */
    public function setIsReliable($isReliable)
    {
        $this->isReliable = $isReliable;

        return $this;
    }

    /**
     * Gets the value of buyerType.
     *
     * @return mixed
     */
    public function getBuyerType()
    {
        return $this->buyerType;
    }

    /**
     * Sets the value of buyerType.
     *
     * @param mixed $buyerType the buyer type
     *
     * @return self
     */
    public function setBuyerType($buyerType)
    {
        $this->buyerType = $buyerType;

        return $this;
    }

    /**
     * Gets the value of email.
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the value of email.
     *
     * @param mixed $email the email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Gets the value of document.
     *
     * @return mixed
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Sets the value of document.
     *
     * @param mixed $document the document
     *
     * @return self
     */
    public function setDocument($document)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Gets the value of additionalInfo.
     *
     * @return mixed
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * Sets the value of additionalInfo.
     *
     * @param mixed $additionalInfo the additional info
     *
     * @return self
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }

    /**
     * Gets the value of birthday.
     *
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Sets the value of birthday.
     *
     * @param mixed $birthday the birthday
     *
     * @return self
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Gets the value of phones.
     *
     * @return mixed
     */
    public function getPhones()
    {
        return $this->phones;
    }

    /**
     * Sets the value of phones.
     *
     * @param mixed $phones the phones
     *
     * @return self
     */
    public function setPhones($phones)
    {
        $this->phones = $phones;

        return $this;
    }

    /**
     * Gets the value of address.
     *
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the value of address.
     *
     * @param mixed $address the address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    public function getBuyer()
    {
        return array(
            "Name"            => $this->getName(),
            "Ip"              => $this->getIp(),
            "IsFirstPurchase" => $this->getIsFirstPurchase(),
            "IsReliable"      => $this->getIsReliable(),
            "BuyerType"       => $this->getBuyerType(),
            "Email"           => $this->getEmail(),
            "Document"        => $this->getDocument(),
            "AdditionalInfo"  => $this->getAdditionalInfo(),
            "Phones"          => $this->getPhones(),
            "Address"         => $this->getAddress(),
        );
    }
}
