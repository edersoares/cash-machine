<?php

namespace CashMachine;

class CashMachine
{
    protected $availableValues = [
        100, 50, 20, 10
    ];

    public function cashOut($value)
    {
        $notesToReturn = [];

        foreach ($this->availableValues as $availableValue) {

            $quantityNotes = floor($value / $availableValue);

            if ($quantityNotes >= 1) {
                $notesToReturn[$availableValue] = $quantityNotes;
                $value -= $availableValue * $quantityNotes;
            }
        }

        return $notesToReturn;
    }
}