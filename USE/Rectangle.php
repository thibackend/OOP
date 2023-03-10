<?php 
 class Rectangle{
    public $width;
    public $length;
    public function getparameter(){
        return ($this->width+$this->length);
    }
 }
$a = new Rectangle();
$a->width=10;
$a->length=100;
echo "this is parameter".$a->getparameter();
?>
<html>
    <body>
        
        <form action="#" method="post">
            <label for="width">
                <input type="number" name="width" id="width" placeholder="enter width"> Width <br>
                <small></small>
            </label><br>
            <label for="length">
                <input type="number" name="length" id="length" placeholder="Enter length">Length <br>
                <small></small>
            </label><br>
            <input type="submit" value="Ok" name="ok">
        </form>

    </body>
</html>
