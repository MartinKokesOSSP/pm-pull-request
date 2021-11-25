<?php

class Mouse extends Animal
{


public function __construct(string $name,int $legs)
{
    $this->name = $name;
    $this->legs = $legs;
}
}