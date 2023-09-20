<?php

class Animal {
    public function makeSound() {
        echo "The animal makes a sound.";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow!";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Woof!";
    }
}

$animal = new Animal();
$cat = new Cat();
$dog = new Dog();

$animal->makeSound(); // The animal makes a sound.
$cat->makeSound(); // Meow!
$dog->makeSound(); // Woof!
