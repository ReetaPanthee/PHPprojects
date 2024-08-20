<?php
interface Flyable {
    public function fly();
}

interface Swimmable {
    public function swim();
}

class Bird implements Flyable {
    public function fly() {
        echo "Bird is flying.<br>";
    }
}

class Fish implements Swimmable {
    public function swim() {
        echo "Fish is swimming.<br>";
    }
}

class Duck implements Flyable, Swimmable {
    public function fly() {
        echo "Duck is flying.<br>";
    }

    public function swim() {
        echo "Duck is swimming.<br>";
    }
}


// Testing the classes
$bird = new Bird();
$bird->fly();  // Outputs: Bird is flying.

$fish = new Fish();
$fish->swim(); // Outputs: Fish is swimming.

$duck = new Duck();
$duck->fly();  // Outputs: Duck is flying.
$duck->swim(); // Outputs: Duck is swimming.


echo " <br> Lab No.: 10i <br>";
echo "Name = Rita Panthi <br>"; 
echo "Roll No.: 22";
?>