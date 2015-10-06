<?php

namespace Koin\Parser;

use Koin\Helpers\StringHelper;

class DocumentParser
{

    /**
     * Initialize a new instance.
     */
    public function __construct()
    {
        $this->helper = new StringHelper();
    }

    public function setCpf($cpf)
    {
        if (is_string($cpf) && $this->isValidCpf($cpf)) {
            return $this->helper->getOnlyNumbers($cpf);
        }

        return false;
    }

    public function isValidCpf($cpf)
    {
        $cpf_numbers = $this->helper->getOnlyNumbers();

        // Canonicalize input
        $cpf_numbers = sprintf('%011s', preg_replace('{\D}', '', $cpf_numbers));

        // For all digits equals
        for ($counter = 0; $counter <= 9; $counter++) {
            $repeated = str_pad("", 11, $counter);
            // return true if the provided CPN is equal
            if ($cpf_numbers === $repeated) {
                return false;
            }
        }

        // Validate length and invalid numbers
        if ((strlen($cpf_numbers) != 11)
                || ($cpf_numbers == '00000000000')
                || ($cpf_numbers == '99999999999')) {
            return false;
        }
        // Validate check digits using a modulus 11 algorithm
        for ($t = 8; $t < 10;) {
            for ($d = 0, $p = 2, $c = $t; $c >= 0; $c--, $p++) {
                $d += $cpf_numbers[$c] * $p;
            }
            if ($cpf_numbers[++$t] != ($d = ((10 * $d) % 11) % 10)) {
                return false;
            }
        }
        return true;
    }

    public function setRg($rg)
    {
        if (is_string($rg) && strlen($rg) < 20) {
            return true;
        }

        return false;
    }
}
