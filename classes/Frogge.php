<?php

use Animal;

class Frogge extends Animal
{
    public int $tongue;
    public function __construct(string $name, bool $legs, int $tongue)
    {
        $this->name = $name;
        $this->legs = $legs;
        $this->tongue = $tongue;
    }
    public function getTongue()
    {
        return $this->tongue;
    }
}
