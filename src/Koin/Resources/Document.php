<?php

namespace Koin\Resources;

use Koin\Filter\DocumentFilter;

class Document
{
    public $cpf;
    public $rg;

    /**
     * @var stClass
     */
    public $filter;
    public $helper;

    public function __construct(array $data = array())
    {
        $this->filter = new DocumentFilter();
        $this->helper = new \Koin\Helpers\StringHelper();

        foreach ($data as $document) {
            if (isset($document['type']) && isset($document['value'])) {
                $type = strtoupper($document['type']);

                if ($type === 'RG') {
                    $this->setRG($document['value']);
                } elseif ($type === 'CPF') {
                    $this->setCPF($document['value']);
                }
            }
        }
    }

    public function setRG($rg)
    {
        $rg = $this->filter->setRg($rg);

        $this->rg = $rg;
    }

    public function getRG()
    {
        if ($rg) {
            $this->rg = $rg;
            return true;
        }

        return false;
    }

    public function setCPF($cpf)
    {

        $cpf = $this->filter->setCpf($cpf);

        if ($cpf) {
            $this->cpf = $cpf;
            return true;
        }

        return false;
    }

    public function getCPF()
    {
        return $this->cpf;
    }

    public function getDocuments()
    {
        $documents = array();

        if ($this->cpf) {
            $documents['CPF'] = $this->cpf;
        } else {
            $documents['CPF'] = false;
        }

        if ($this->rg) {
            $documents['RG'] = $this->rg;
        } else {
            $documents['RG'] = false;
        }
        return $documents;
    }
}
