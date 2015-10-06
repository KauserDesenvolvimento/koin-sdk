<?php

namespace Koin\Resources;

use Koin\Validation\BuyerValidation;

class Document
{
    public $type;
    public $value;

    /**
     * @var stClass
     */
    public $validator;

    public function __construct(array $data = null)
    {
        if (isset($data['type']) && isset($data['value'])) {
            $type = strtoupper($data['type']);
            if ($type === 'RG') {
                $this->setRG($data['value']);
            } elseif ($type === 'CPF') {
                $this->setCPF($data['value']);
            }
        } else {
            return false;
        }
    }

    public function setRG ($rg)
    {
        $this->rg = $rg;
    }

    public function getRG ()
    {
        return $this->rg;
    }

    public function setCPF ($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getCPF ()
    {
        return $this->cpf;
    }
}
