<?php namespace App;

class HRManager implements Observer
{
    private $amountOfRebuke = 0;

    public function onNotify(State $state)
    {
        if ($state->isWorse()) {
            $this->amountOfRebuke++;
        }
    }

    public function getAmountOfRebuke(): int
    {
        return $this->amountOfRebuke;
    }
}