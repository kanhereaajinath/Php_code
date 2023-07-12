<?php
if(isset($_POST["intrest"]))
{
$a=$_POST["principal"];
$b=$_POST["rate"];
$c=$_POST["year"];
$i=$a*$b*$c/100;
echo "simple intrest is ".$i;
}
?>
<html>
    <form action="" method="post">
        Principla ammount <input type="text" name="principal" id=""><br>
        rate of Intrest <input type="text" name="rate" id=""><br>
        number of year <input type="text" name="year" id="">
        <input type="submit" name="intrest" id="" value="Simple Intrest">

    </form>
</html>