<?php
class Animal {
 public function makeSound() {
 echo "Animal is making a sound.";
 }
}
class Cat extends Animal {
 public function makeSound() {
 echo "Cat is meowing.";
 }
}
// Creating objects
$animal = new Animal();
$cat = new Cat();
// Calling the makeSound() method on objects
$animal->makeSound(); // Output: Animal is making a sound.
$cat->makeSound();
echo " <br> Lab No.: 10e <br>";
echo "Name = Rita Panthi <br>"; 
echo "Roll No.: 22";
?>