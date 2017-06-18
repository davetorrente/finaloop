<?php

abstract class Animal 
{
	public $name;
	public $color;
	public function describe()
	{
		
		return $this->name . ' color ' . $this->color;

	}
	abstract public function makeSound();
}


class Dog extends Animal
{
	public function describe()
	{
		return parent::describe();
	}

	public function makeSound()
	{
		return 'bark';
	}
}

$animal = new Dog();
$animal->name = "Sven";
$animal->color = "Black and White";

echo $animal->describe(); 