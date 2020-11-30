<?php

namespace Hexu\UnitConvert\Tests;

use Hexu\UnitConvert\Temp;
use Hexu\UnitConvert\Weight;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /** @test */
    public function convert_weight_from_kg_to_lbs()
    {
        $this->assertEquals(4.4, Weight::fromKg(2)->toLbs());
    }

    /** @test */
    public function convert_temp_from_c_to_f()
    {
        $this->assertEquals(35.6, Temp::fromC(2)->toF());
    }
}
