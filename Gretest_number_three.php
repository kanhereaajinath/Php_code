<?php
if(isset($_POST["greatest"]))
{
    $a=$_POST["a"];
    $b=$_POST["b"];
    $c=$_POST["c"];
    $d=($a>$b)?(($a>$c)?$a:$c):(($b>$c)?$b:$c);
    echo "greatest number is ".$d;
}

?>
<html>
    <form action="" method="post">
    <input type="text" name="a" id="" placeholder="enter a first number "><br>
    <input type="text" name="b" id="" placeholder="enter a first number "><br>
    <input type="text" name="c" id="" placeholder="enter a first number "><br>
    <input type="submit" name="greatest" id="">
    </form>
</html>