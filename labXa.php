<?php
class student{
  public $sid = 1;
  public $sname = "";
  public $age = 21;

  public function __construct($sid,$sname,$age){
$this->sid=$sid;
$this->sname=$sname;
$this->age=$age;
  }
  public function sidd($sid){
    $this->sid=$sid;
  }
  public function snamee($sname){
    $this->sname=$sname;
  }
  public function agee($age){
$this->age=$age;
  }
public function display(){
  echo"Id = ".$this->sid." Name =  ".$this->sname."  Age = ".$this->age."<br>";
}
}
$st1 =new student(111,"Reeta",21);
$st2 = new student(222,"Ramba",22);
$st1->display();
$st2->display();
$st1->sidd(333);
$st1->snamee("Rohit");
$st1->agee(43);
$st1->display();
  echo " <br> Lab No.: 10a <br>";
echo "Name = Rita Panthi <br>"; 
echo "Roll No.: 22";
?>