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
$user = new User("Bikash", "bikash2334@gmail.com");

// Examining Object Properties
echo "Object Properties: <br>";
$userProperties = get_object_vars($user);
print_r($userProperties); 

// Checking for Property Existence
echo "<br>Checking for Property Existence: <br>";
if (property_exists($user, 'name')) {
 echo "'name' property exists.<br>";
} else {
 echo "'name' property does not exist.<br>"; 
}

// Accessing Object Method
echo "<br> Accessing Object Method: <br>";
$userEmail = $user->getEmail();
echo "User's email: $userEmail";

// Using var_dump for Debugging (uncomment for detailed output)
echo "<br> var_dump Output: <br>";
var_dump($user);
echo " <br> Lab No.: 12c <br>";
echo "Name = Rita Panthi <br>"; 
echo "Roll No.: 22";
?>