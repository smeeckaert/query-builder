<?php

namespace FW\QB\Escaper;

use FW\DI\DI;

class Simple implements \FW\QB\Escaper
{
    use DI;

    public function escape($string)
    {
        return $string;
    }
}