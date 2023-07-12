<?php
if(isset($_POST["root"]))
{
    $a1=$_POST["a1"];
      $a2=$_POST["a2"];
      $b1=$_POST["b1"];
      $b2=$_POST["b2"];
      $c1=$_POST["c1"];
      $c2=$_POST["c2"];
      $d=($a1*$b2)-($a2*$b1);
      $dx=($c1*$b2)-($c2*$b1);
      $dy=($a1*$c2)-($a2*$c1);
      $x=$dx/$d;
      echo "value of x is".$x;
      
      $y=$dy/$d;
      echo "value of x is".$y;


      
}


?>
<html>
    <form action="" method="post"> 
        <input type="text" name="a1" id="" placeholder="a1">
        <input type="text" name="a2" id="" placeholder="a2">
         <input type="text" name="b1" id="" placeholder="b1">
         <input type="text" name="b2" id="" placeholder="b2">
         <input type="text" name="c1" id="" placeholder="c1">
         <input type="text" name="c2" id="" placeholder="c2">
         <input type="submit"  name="root">
    </form>
</html>