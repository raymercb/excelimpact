<?php

namespace excelimpact\src;

/**
 * @author Raymer Concepcion
 */
class Sample1
{
    function fibonacci($number)
    {
        if ($number <= 2) {
            return 1;
        }

        return $this->fibonacci($number - 1) + $this->fibonacci($number - 2);
    }
}