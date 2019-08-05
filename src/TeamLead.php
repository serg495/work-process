<?php namespace App;

class TeamLead extends Observable
{
    /**
     * @var State
     */
    private $state;

    public function __construct(State $state)
    {
        $this->state = $state;
    }

    public function checkingWork(bool $signal)
    {
        if (!$signal) {
            $this->state->decrementState();
        } else {
            $this->state->incrementState();
        }

        $this->notify($this->state);

        echo $this->state->getMessage();
    }
}