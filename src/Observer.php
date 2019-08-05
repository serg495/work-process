<?php namespace App;
interface Observer
{
    public function onNotify(State $state);
}