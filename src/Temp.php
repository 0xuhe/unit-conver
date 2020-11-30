<?php


namespace Hexu\UnitConvert;

class Temp
{
    private float $c;

    public function __construct(float $c)
    {
        $this->c = $c;
    }

    public static function fromC(float $c)
    {
        return new static($c);
    }

    public function toF()
    {
        return $this->c * 1.8 + 32;
    }
}
