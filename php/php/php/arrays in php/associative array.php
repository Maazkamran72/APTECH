<?php

//Associative Array

$name = array("Zain" => "Blue","Hassan" => "Red","Hammad" => "Green");
echo $name["Hammad"];
echo"</br>";



//more example use in for each loop
$favcol =  array("Zain" => "Blue","Hassan" => "Red","Hammad" => "Green");

foreach($favcol as $key => $value)
{
    echo "$key favourite color is $value";
    echo"</br>";
}

?>