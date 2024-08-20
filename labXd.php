<?php
class Test {
  public $a = 0;
  public static $b = 0;

  public function __construct() {
    $this->a++;
    self::$b++;
  }

  public function display() {
    echo "a=" . $this->a . "  b=" . self::$b . "<br>";
  }

  public static function staticDisplay() {
    echo "Static b=" . self::$b . "<br>";
  }
}

$obj1 = new Test();
$obj1->display();
Test::staticDisplay();

$obj2 = new Test();
$obj1->display();
Test::staticDisplay();

$obj3 = new Test();
$obj1->display();
Test::staticDisplay();
echo " <br> Lab No.: 10d <br>";
echo "Name = Rita Panthi <br>"; 
echo "Roll No.: 22";
?>
