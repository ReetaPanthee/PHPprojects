<?php
interface Animal {
 public function makeSound();
}
class Cat implements Animal {
 public function makeSound() {
 echo "Cat is meowing.";
 }
}
class Dog implements Animal {
 public function makeSound() {
 echo "Dog is barking.";
 }
}

// Function that accepts any object implementing the Animal 
function animalSound(Animal $animal) {
 $animal->makeSound();
}

// Create objects of different classes implementing the Animal 
$cat = new Cat();
$dog = new Dog();

// Call the function with different objects
animalSound($cat); // Output: Cat is meowing.
animalSound($dog); 

echo " <br> Lab No.: 10g <br>";
echo "Name = Rita Panthi <br>"; 
echo "Roll No.: 22";
?>