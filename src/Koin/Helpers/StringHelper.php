<?php

namespace Koin\Helpers;

class StringHelper
{
    public function cutString($string, $len)
    {
        return substr($string, 0, $len);
    }

    public function removeExtraWhiteSpaces($string)
    {
        return preg_replace('/\s{2,}/', ' ', $string);
    }

    public function getOnlyNumbers($string)
    {
        return preg_replace('/\D/', '', $string);
    }
}
