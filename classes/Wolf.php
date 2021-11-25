<?php

use Animal;

class Wolf extends Animal

{
 public string $fur;
 public function __construct(string $name, int $legs, string $fur) {

     $this->name = $name;
     $this->legs = $legs;
     $this->armor = $fur;
 }

public function getFur(){
    
    return $this->fur;
}

}

?>