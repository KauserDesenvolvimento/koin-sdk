<?php

namespace Koin\Resources;

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
        if (isset($data['type'])) {
            $this->setDocumentType($data['type']);
        }

        if (isset($data['value'])) {
            $this->setDocumentValue($data['value']);
        }
    }

    public function setDocumentType($type)
    {
        $this->type = $type;
    }

    public function setDocumentValue($value)
    {
        $this->value = $value;
    }
}
