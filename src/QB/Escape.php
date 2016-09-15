<?php

namespace FW\QB;

use FW\DI\DI;

class Escape
{
    use DI;
    /**
     * @var Escaper
     */
    protected $escaper = Escaper::class;

    public function __construct($escaper)
    {
    }

    public function sanitize($data)
    {
        return $this->escaper->escape($data);
    }
}