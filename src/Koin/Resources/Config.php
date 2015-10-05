<?php

namespace Koin\Resources;

use stdClass;

class Config
{
    public $currency;
    public $discountPercent;
    public $discountValue;
    public $increasePercent;
    public $increaseValue;

    /**
     * Initialize a new instance.
     */
    public function initialize()
    {
        $this->data = new stdClass();
    }

    /**
     * Gets the value of currency.
     *
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets the value of currency.
     *
     * @param mixed $currency the currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Gets the value of discountPercent.
     *
     * @return mixed
     */
    public function getDiscountPercent()
    {
        return $this->discountPercent;
    }

    /**
     * Sets the value of discountPercent.
     *
     * @param mixed $discountPercent the discount percent
     *
     * @return self
     */
    public function setDiscountPercent($discountPercent)
    {
        $this->discountPercent = $discountPercent;

        return $this;
    }

    /**
     * Gets the value of discountValue.
     *
     * @return mixed
     */
    public function getDiscountValue()
    {
        return $this->discountValue;
    }

    /**
     * Sets the value of discountValue.
     *
     * @param mixed $discountValue the discount value
     *
     * @return self
     */
    public function setDiscountValue($discountValue)
    {
        $this->discountValue = $discountValue;

        return $this;
    }

    /**
     * Gets the value of increasePercent.
     *
     * @return mixed
     */
    public function getIncreasePercent()
    {
        return $this->increasePercent;
    }

    /**
     * Sets the value of increasePercent.
     *
     * @param mixed $increasePercent the increase percent
     *
     * @return self
     */
    public function setIncreasePercent($increasePercent)
    {
        $this->increasePercent = $increasePercent;

        return $this;
    }

    /**
     * Gets the value of increaseValue.
     *
     * @return mixed
     */
    public function getIncreaseValue()
    {
        return $this->increaseValue;
    }

    /**
     * Sets the value of increaseValue.
     *
     * @param mixed $increaseValue the increase value
     *
     * @return self
     */
    public function setIncreaseValue($increaseValue)
    {
        $this->increaseValue = $increaseValue;

        return $this;
    }

    public function getConfig()
    {
        return array(
            "Currency"        => $this->getCurrency(),
            "DiscountPercent" => $this->getDiscountPercent(),
            "DiscountValue"   => $this->getDiscountValue(),
            "IncreasePercent" => $this->getIncreasePercent(),
            "IncreaseValue"   => $this->getIncreaseValue(),
        );
    }
}
