<?php

//"String Functions"

/*
  1. strlen()   ---->  count string length.
  2. str_word_count()   ---->  count string word.
  3. strrev()   ---->  reverse a string.
  4. strpos()   ---->  search string position first.
  5. str_replace()   ---->  replace a string.
  6. str_repeat()   ---->  repeat a string.
  7. ltrim()   ---->  left space remove in string.
  8. rtrim()   ---->  right space remove in string.
*/

//strlen()
$name = "Zain";
echo strlen($name);

echo "</br>";

//str_word_count
$txt1 = "My name is zain";
echo str_word_count($txt1);

echo "</br>";

//strrev()
$Name = "Zain";
echo strrev($Name);

echo "</br>";

//strpos()
$txt2 = "My name is zain";
echo strpos($txt2,"name");

echo "</br>";

//str_repeat()
$txt3 = "My name is zain";
echo str_repeat($txt3,6);

echo "</br>";

//str_replace()
$txt4 = "My name is zain";
echo str_replace("zain","hassan",$txt4);

echo "</br>";

//ltrim
$Txt1 = "hello Php";
echo "<pre>";
echo ltrim("  hello php  ");
echo "</pre>";

echo "</br>";

//rtrim
$Txt2 = "hello Php";
echo "<pre>";
echo rtrim("  hello php  ");
echo "</pre>";

?> 