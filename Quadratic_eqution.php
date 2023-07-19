<?php
// root of qudratic eqution 
if(isset($_POST['root']))
{
    $a=$_POST["a"];
    $b=$_POST["b"];
    $c=$_POST["c"];
    $d=$b*$b-4*$a*$c;
    if ($d >= 0){
        $x1 = (-$b + sqrt($d))/(2*$a);
        $x2 = (-$b - sqrt($d))/(2*$a);
        echo "Roots are: $x1, $x2 \n";   
      } else {
        $x1 = -$b/(2*$a);
        $x2 = sqrt(-$d)/(2*$a);
        echo "Roots are: $x1 ± $x2 i \n"; 
      }
}

 ?>
 
 <html>
 <form action="" method="post">\
    <input type="text" name="a" id="" placeholder="Enter cofficent a"><br>
    <input type="text" name="b" id="" placeholder="enter cofficent b" ><br>
    <input type="text" name="c" id="" placeholder="enter a constat"><br>
    <input type="submit" name="root" id="" value="Root">
 </form>
 </html>
