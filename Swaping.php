<?php
$a=10;
$b=20;
function swap($x,$y)
{
    $t=$x;
    $x=$y;
    $y=$t;
    echo "inside a function"."<br>";
    echo "a=".$x."<br>";
    echo "b=".$y."<br>";

}
echo "outside a function before calling a function "."<br>";
echo "a=".$a."<br>";
echo "b=".$b."<br>";
swap($a,$b);
echo  "outside a function after calling a fnction "."<br>";
echo "a=".$a."<br>";
echo "b=".$b."<br>";
?>