<?php
if(isset($_POST["cmd"]))
{
    $p=$_POST["p"];
    $r=$_POST["r"];
    $n=$_POST["n"];

    $CI = $p * (pow((1 + $r / 100), $n));
    echo "compund intrest is ".$CI;
  
}
?>
<html>
    <form action="" method="post">
        <input type="text" name="p" id="" placeholder="Enter principl ammount"><br>
        <input type="text" name="r" id=""placeholder="rate of intrest"><br>
        <input type="text" name="n" id=""placeholder="Enter a number of years"><br>
        <input type="submit" name="cmd" id="" value="compound">

    </form>
</html>