<?php

namespace CashMachine\Tests;

use CashMachine\CashMachine;
use PHPUnit\Framework\TestCase;

class CashMachineTest extends TestCase
{
    public function testCashOut30()
    {
        $machine = new CashMachine();

        $received = $machine->cashOut(30);

        $expected = [
            20 => 1,
            10 => 1,
        ];

        $this->assertEquals($expected, $received);
    }

    public function testCashOut80()
    {
        $machine = new CashMachine();

        $received = $machine->cashOut(80);

        $expected = [
            50 => 1,
            20 => 1,
            10 => 1,
        ];

        $this->assertEquals($expected, $received);
    }
}
