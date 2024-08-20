<?php
// Example 1: Anonymous class implementing an interface
interface Greeting {
    public function greet();
}

$greeting = new class implements Greeting {
    public function greet() {
        echo "Hello, Anonymous Class!\n";
    }
};

$greeting->greet(); // Outputs: Hello, Anonymous Class!

// Example 2: Anonymous class extending an existing class
class ParentClass {
    public function sayHello() {
        echo "Hello from ParentClass!\n";
    }
}

$object = new ParentClass();

$childObject = new class($object) extends ParentClass {
    private $parent;

    public function __construct($parent) {
        $this->parent = $parent;
    }

    public function sayHello() {
        $this->parent->sayHello();
        echo "Hello from ChildClass!\n";
    }
};

$childObject->sayHello(); // Outputs: Hello from ParentClass! Hello from ChildClass!
echo " <br> Lab No.: 12a <br>";
echo "Name = Rita Panthi <br>"; 
echo "Roll No.: 22";

?>
