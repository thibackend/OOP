<?php
class Student{
    public $name="thi"; 
    public $age;
    public function GetName(){
        return $this->name;
    }
    public function SetName($name){
        return $this->name = $name;
    }
}
?>
<html>
    <body>
        <form action="declar.php" method="post">
            <label for="name">
                <input type="text" name="name" id="name" placeholder="Enter name"> Name
            </label><br>
            <input type="submit" value="ok" name="ok">
        </form>
        <div class="show">
            
        </div>
    </body>
</html>

<?php 
$thi =new Student();
echo $thi->GetName();
?>