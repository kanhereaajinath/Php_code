<?php
$a=5;
function fact($a)
{
    
        if ($a>=1)
            return 
            $a*fact($a-1);
        else
        return 1;
        
         
}
 echo fact($a);
?>