<?php

// Base class Animal
class Animal {
    public function makeSound() {
        echo "Animal makes a sound" . PHP_EOL;
    }
}
// Subclass Dog
class Dog extends Animal {
    public function makeSound() {
        echo "Dog barks". PHP_EOL;
    }
}
// Subclass Cat
class Cat extends Animal {
    public function makeSound() {
        echo "Cat meows". PHP_EOL;
    }
}
// Subclass Cow
class Cow extends Animal {
    public function makeSound() {
        echo "Cow moos". PHP_EOL;
    }
}

$animals = [
    new Dog(),
    new Cat(),
    new Cow()
];

foreach ($animals as $animal) {
    $animal->makeSound(); 
}
