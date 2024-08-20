<?php
class User {
 public $name;
 private $email;
 public function __construct($name, $email) {
 $this->name = $name;
 $this->email = $email;
 }

 public function getEmail() {
 return $this->email;
 }
}
// Check if User class exists
if (class_exists('User')) {
 echo "User class is defined.<br>";
 $user = new User("Ramba", "ramba123@gmail.com");
//  Get class methods (including inherited methods from base class)
 $userMethods = get_class_methods($user);
 echo "User class methods: ";
 print_r($userMethods); 
// Output: Array ( [0] => __construct [1] => getEmail [2] => toString [3] => 

 // Get class static properties (will be empty in this case)
 $userClassVars = get_class_vars('User');
 echo "<br> User class static properties: ";
 print_r($userClassVars); // Output: Array ( )
 // Get object properties (instance-level)
 $userProperties = get_object_vars($user);
 echo "<br>User object properties: ";
 print_r($userProperties); 
// Output: Array ( [name] => Alice [email] => alice@example.com )
 // Determine parent class (if any)
 $parentClass = get_parent_class('User');
 if ($parentClass) {
 echo "<br>User class inherits from: $parentClass";
 } else {
 echo "<br>User class does not have a parent class.";
 }
 // Access a method of the object
 echo "<br>User's email: " . $user->getEmail();
 echo " <br> Lab No.: 12b <br>";
echo "Name = Rita Panthi <br>"; 
echo "Roll No.: 22";
}
?>