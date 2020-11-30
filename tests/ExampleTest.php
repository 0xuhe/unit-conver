<?php

namespace Hexu\UnitConvert\Tests;

use Hexu\UnitConvert\Weight;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /** @test */
    public function convert_weight_from_kg_to_lbs()
    {
        $this->assertEquals(4.4, Weight::fromKg(2)->toLbs());
    }
}
