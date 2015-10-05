<?php

namespace Koin\Exception;

use stdClass;

class Collector
{

    /**
     * @var array
     */
    public $errors;

    /**
     * Initialize a new instance.
     */
    public function initialize()
    {
        $this->data = new stdClass();
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function setError($code)
    {
        $this->errors[] = $code;
        return $this;
    }
}
