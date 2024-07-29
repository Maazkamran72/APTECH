<?php

//"Local Global variables"
//make variable outside called global variable.
//make variable in function called  local variable.


$a = 99;//global variable
echo $a;
echo "</br>";


/*
function myfun()
{
    $a = 100;//local variable
    echo $a;
}
myfun();
*/


//call global variable in function
function myfun()
{  
    global $a;
    echo $a;
}

myfun();

//call local variable in outside
function lofun()
{
 $GLOBALS ["x"]=100;
 echo $GLOBALS["x"];
}
lofun();

echo $GLOBALS ["x"];
?>     