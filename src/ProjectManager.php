<?php namespace App;

class ProjectManager implements Observer
{
    private $amountOfPraise = 0;

    public function onNotify(State $state)
    {
        if ($state->isBest()) {
            $this->amountOfPraise++;
        }
    }

    public function getAmountOfPraise(): int
    {
        return $this->amountOfPraise;
    }
}