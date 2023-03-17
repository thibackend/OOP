<?php 
class Student{
    public $name,$age,$address;
    public function __construct($name,$age,$address){
        $this->name =$name;
        $this ->age = $age;
        $this->address= $address;
    }

    public function getdatastudent(){
        return $this->name . $this ->age .$this ->address;
    }
    public function getName(){
        return $this ->name;
    }
    public function getAge(){
        return $this->age;
    }
    public function getAddress(){
        return $this->address;
    }
}
?>