<?php
// Parent class
class Animal {
    public function eat() {
        echo "This animal is eating.\n";
    }
}

// Child class
class Dog extends Animal {
    public function bark() {
        echo "The dog is barking.\n";
    }
}
class Puppy extends Dog {
    public function play() {
        echo "The puppy is playing.\n";
    }
}
class Cat extends Animal {
    public function meow() {
        echo "The cat is meowing.\n";
    }
}

// Demonstrate single inheritance
echo "Single inheritance <br>";
$dog1 = new Dog();
$dog1->eat();  // From Animal class
$dog1->bark(); // From Dog class

echo "<br>Multi-level inheritance <br>";
$puppy = new Puppy();
$puppy->eat();  // From Animal class
$puppy->bark(); // From Dog class
$puppy->play();

echo "<br>Hierarchial inheritance <br>";
$dog2 = new Dog();
$dog2->eat();  // From Animal class
$dog2->bark();
$cat = new Cat();
$cat->eat();  // From Animal class
$cat->meow();

 echo " <br> Lab No.: 10b <br>";
echo "Name = Rita Panthi <br>"; 
echo "Roll No.: 22";

?>