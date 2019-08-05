<?php namespace App;

class State
{
    private $states = [
        1 => 'Не попадись на глаза',
        2 => 'Плохое настроение',
        3 => 'Нормальное настроение',
        4 => 'Хорошее настроение',
    ];

    private $messages = [
        1 => ['Что опять?!', 'Всмысле до сих пор не сделал?'],
        2 => ['Переделывай', 'Ну я же говорил...'],
        3 => ['Хорошо, но...', 'Ты можешь лучше'],
        4 => ['Отлично!', 'Молодец!', 'Так держать!'],
    ];

    private $stateIndex;

    public function __construct(int $stateIndex)
    {
        $this->stateIndex = $stateIndex;
    }

    public function getMessage(): string
    {
        $messages = $this->messages[$this->stateIndex];

        return $messages[array_rand($messages)];
    }

    public function incrementState()
    {
        var_dump($this->stateIndex);
        if ($this->stateIndex < count($this->states)) {
            $this->stateIndex++;
        }
    }

    public function decrementState()
    {
        var_dump($this->stateIndex);
        if ($this->stateIndex !== 1) {
            $this->stateIndex--;
        }
    }

    public function getState(): int
    {
        return $this->states[$this->stateIndex];
    }

    public function setStateIndex(int $stateIndex)
    {
        if ($stateIndex >= 1 && $stateIndex <= count($this->states)) {
            $this->stateIndex = $stateIndex;
        }
    }

    public function isBest(): bool
    {
        if ($this->stateIndex === count($this->states)) {
            return true;
        }

        return false;
    }

    public function isWorse(): bool
    {
        if ($this->stateIndex === 1) {
            return true;
        }

        return false;
    }
}