<?php 

class ClassName extends Animal
{
    private bool $chameleon;

    public function __construct(string $name, int $legs, bool $chameleon) {
        $this->name = $name;
        $this->legs = $legs;
        $this->chameleon = $chameleon;
    }

    public function getCham()
    {
        return $this->chameleon;
    }
}
