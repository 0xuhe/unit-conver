<?php

namespace Hexu\UnitConvert;

class Weight
{
    private $kg;

    public function __construct($kg)
    {
        $this->kg = $kg;
    }

    public static function fromKg($kg)
    {
        return new static($kg);
    }

    public function toLbs()
    {
        return $this->kg * 2.2;
    }
}
