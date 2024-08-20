<?php
class employee{
  public $eid = 111;
  public $name = "Rita";
  //constructor
  public function __construct($eid,$name){
    $this->eid=$eid;
    $this->name=$name;
  }
  public function setEid($eid){
    $this->eid=$eid;
  }
  public function setName($name){
    $this->name=$name;
  }
  public function displayValues(){
    echo"".$this->eid."=====".$this->name."<br>";
  }
}
$emp1 = new employee(333,"Ramba");
$emp1->displayValues();
$emp1->setEid(222);
$emp1->setName("Reeta");
$emp1->displayValues();