<?php

namespace Koin\Resources;

use Koin\Parser\BuyerParser;

class Document
{
    public $cpf;
    public $rg;

    /**
     * @var stClass
     */
    public $parser;
    public $helper;

    public function __construct(array $data = null)
    {
        $this->parser = new BuyerParser();
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
        $this->rg = $rg;
    }

    public function getRG()
    {
        $rg = $this->parser->setRg($rg);

        if ($rg) {
            $this->rg = $rg;
        } else {
            return false;
        }
    }

    public function setCPF($cpf)
    {

        $cpf = $this->parser->setCpf($cpf);

        if ($cpf) {
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
