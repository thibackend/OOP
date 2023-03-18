<?php
class Class1
{
    function display(){
        echo "thi handsome!";
    }
}
class Class2
{
    function display(){
        echo "Thi no handsome!";
    }
}





class Class1 {
    public function method1() {
      echo "This is method 1 of class 1";
    }
  }
  
  class Class2 {
    public function method2() {
      echo "This is method 2 of class 2";
    }
  }
  
  class Class3 extends Class1, Class2 {
    // This class inherits both Class1 and Class2
  }
  
?>