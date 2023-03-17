<?php 
require 'constructor.php';
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

                    <br><br>
        <div class="show">
            <?php 
            if(isset($_POST['enter']) and !empty($_POST['age']) and !empty($_POST['txt_name']) and !empty($_POST['txt_address'])){
                $student= new Student($_POST['txt_name'],$_POST['age'], $_POST['txt_address']);
                $name=$student->getName();
                $age=$student->getAge();
                $address =$student->getAddress();
                ?>
            <p><?php echo "My name is :".$name;?></p>
            <p><?php echo "My age is :".$age;?></p>
            <p><?php echo "My address is :".$address;?></p>
                <?php
            }
            ?>
        </div>
    </body>
</html>