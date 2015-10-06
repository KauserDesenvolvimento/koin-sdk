<?php

namespace Koin\Exception;

class Collector
{

    /**
     * @var array
     */
    public $errors;

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
