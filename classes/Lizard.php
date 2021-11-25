<?php 
 
class Lizard extends Animal
{
    private bool $colorChange;

    public function __construct(string $name, int $legs, bool $colorChange) {
        $this->name = $name;
        $this->legs = $legs;
        $this->colorChange = $colorChange;
    }

    public function getCham()
    {
        return $this->colorChange;
    }
}
