<?php
abstract class Shape {
 abstract public function calculateArea();
}
class Circle extends Shape {
 private $radius;
 public function __construct($radius) {
 $this->radius = $radius;
 }
 public function calculateArea() {
 return 3.14 * $this->radius * $this->radius;
 }
}
class Rectangle extends Shape {
 private $length;
 private $width;
 public function __construct($length, $width) {
 $this->length = $length;
 $this->width = $width;
 }
 public function calculateArea() {
 return $this->length * $this->width;
 }
}
// Create an array of shapes
$shapes = [
 new Circle(5),
 new Rectangle(4, 6)
];
// Calculate and display the areas of the shapes
foreach ($shapes as $shape) {
 echo "Area: " . $shape->calculateArea() . "<br>";
}
echo " <br> Lab No.: 10f <br>";
echo "Name = Rita Panthi <br>"; 
echo "Roll No.: 22";
?>