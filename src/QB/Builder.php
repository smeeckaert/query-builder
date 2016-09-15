<?php
namespace FW\QB;

use FW\DI\DI;

class Builder
{
    use DI;

    public $escape = Escape::class;

    public function __construct($escape)
    {
    }
}