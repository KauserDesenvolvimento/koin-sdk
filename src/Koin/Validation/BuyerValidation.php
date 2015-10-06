<?php

namespace Koin\Validation;

use stdClass;

class BuyerValidation
{

    /**
     * Initialize a new instance.
     */
    public function initialize()
    {
        $this->data = new stdClass();
    }

    public function setName($name)
    {
        $name = substr(preg_replace('/\s{2,}/', ' ', $name), 0, 100);
        return $name;
    }
}
