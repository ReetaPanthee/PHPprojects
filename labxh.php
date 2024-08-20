<?php
class Animal {
    public function makeSound() {
        echo "Animal makes a sound.\n";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Dog barks.\n";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Cat meows.\n";
    }
}

// Using dynamic polymorphism
$animal1 = new Dog();
$animal1->makeSound(); // Outputs: Dog barks.

$animal2 = new Cat();
$animal2->makeSound(); // Outputs: Cat meows.

echo " <br> Lab No.: 10h <br>";
echo "Name = Rita Panthi <br>"; 
echo "Roll No.: 22";
?>