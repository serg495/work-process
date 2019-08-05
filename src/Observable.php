<?php namespace App;

abstract class Observable
{
    private $observers = [];

    public function subscribe(Observer ...$observers)
    {
        $this->observers = array_merge($this->observers, $observers);
    }

    public function notify(State $state)
    {
        foreach ($this->observers as $observer) {
            $observer->onNotify($state);
        }
    }
}