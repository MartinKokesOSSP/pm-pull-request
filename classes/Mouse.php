<?php

class Mouse extends Animal
{
private string $fur;

public function __construct(string $name,int $legs,string $fur)
{
    $this->name = $name;
    $this->legs = $legs;
    $this->fur = $fur;
}
public function getFur()
    {
        return $this->fur;
    }
}