<?php 
require 'constructor.php';
$student= new Student('thi',15,"kontum");
?>
<html>
    <body>
        <form action="#" method="post">
            <label for="name">
                <input type="text" name="txt_name" id="name" value="<?php if(!empty($_POST['txt_name'])){ echo $_POST['txt_name'];}?>">Name<br>
                <?php if(isset($_POST['enter']) and empty($_POST["txt_name"])){?>
                <small style="color:red;"> You need enter the Name!</small>
                <?php }?>
            </label><br>
            <label for="age">
                <input type="number" name="age" id="age" value="<?php if(!empty($_POST['age'])){  echo $_POST['age'];}?>">Age <br>
                <?php if(isset($_POST['enter']) and empty($_POST["age"])){?>
                <small style="color:red;"> You need enter age!</small>
                <?php }?>
            </label><br>
            <label for="address">
                <input type="text" name="txt_address" id="address" value="<?php if(!empty($_POST['txt_address'])){echo $_POST['txt_address'];}?>"> Address <br>
                <?php if(isset($_POST['enter']) and empty($_POST["txt_address"])){?>
                <small style="color:red;"> You need enter address!</small>
                <?php }?>
            </label> <br>
            <input type="submit" value="Enter" name="enter">
        </form>
    </body>
</html>