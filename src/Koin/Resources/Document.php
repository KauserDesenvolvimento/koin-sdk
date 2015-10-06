<?php

namespace Koin\Resources;

use Koin\Parser\BuyerParser;

class Document
{
    public $type;
    public $value;

    /**
     * @var stClass
     */
    public $parser;
    public $helper;

    public function __construct(array $data = null)
    {
        $this->parser = new BuyerParser();
        $this->helper = new StringHelper();

        if (isset($data['type']) && isset($data['value'])) {
            $type = strtoupper($data['type']);

            if ($type === 'RG') {
                $this->setRG($data['value']);
            } elseif ($type === 'CPF') {
                $this->setCPF($data['value']);
            }

            return true;
        } else {
            return false;
        }
    }

    public function setRG($rg)
    {
        $this->rg = $rg;
    }

    public function getRG()
    {
        return $this->rg;
    }

    public function setCPF($cpf)
    {
        $cpf = $this->helper->getOnlyNumbers($cpf);

        $cpf_parser = $this->parser->setCpf($cpf);

        if ($cpf_parser) {
            $this->cpf = $cpf;
        } else {
            return false;
        }
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
        }
        if ($this->rg) {
            $documents['RG'] = $this->rg;
        }
        return $documents;
    }
}
