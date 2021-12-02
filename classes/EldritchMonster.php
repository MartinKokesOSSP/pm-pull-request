<?php
class EldritchMonster extends Animal{

	private $tentacles;

	public function __construct(string $name, int $legs, int $tentacles){
		$this->name = $name;
		$this->legs = $legs;
		$this->tentacles = $tentacles;
	}

	public function getTentacles(){
		return $this->tentacles;
	}
}
?>
