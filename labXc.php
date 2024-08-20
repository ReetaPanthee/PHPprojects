<?php
class ParentClass {
 protected $name;
 public function __construct($name) {
 $this->name = $name;
 echo "Parent constructor called. Name: " . $this->name . "<br>";
 }
}
class ChildClass extends ParentClass {
 public function __construct($name) {
 parent::__construct($name);
 echo "Child constructor called. Name: " . $this->name . "<br>";
 }
}
// Creating an object of the child class
$child = new ChildClass("Walter");
echo " <br> Lab No.: 10c <br>";
echo "Name = Rita Panthi <br>"; 
echo "Roll No.: 22";
?>