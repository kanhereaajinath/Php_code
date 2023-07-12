<?php
if(isset($_POST["add"]))
{
$a=$_POST["first"];
$b=$_POST["second"];
$c=$a+$b;
echo "the addition is ".$c;
}


?>

<html>
    <form action="" method="post" >
    Enter a Fist number <input type="text" name="first"><br>
     Enter a Second number <input type="text" name="second">
     <input type="submit" name="add" value="ADD"> 
     </form>
</html>