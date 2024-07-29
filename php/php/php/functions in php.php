<?php

//Functions

function num($base,$power)
{
 $r = 1;
 $b = $base;
 $p = $power;
 for($i=1; $i<=$p; $i++){
    $r *= $b;
 }
 echo  $r;
}

num(6,3);

?>