<?php
if(isset($_POST["greatest"]))
{
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=($a>$b)?$a:$b;
    echo "greatest number is ".$c;
}
?>
<html>
    <form action="" method="post">
        <input type="text" name="a" id="" placeholder="enter first number"><br>
        <input type="text" name="b" id="" placeholder="enter secod number"><br>
        <input type="submit" name="greatest" id="">
    </form>
</html>
