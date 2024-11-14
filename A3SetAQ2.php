<?php
include "A3SetAQ2.inc";
$str=$_GET["str"];
$choice=$_GET["choice"];
echo"<h1>String is:".$str."<h1><br>";
switch($choice)
{
case 1:echo"length of string:".len($str);
	break;
case 2:echo"count of vowel:".vowel($str);
	break;
case 3:echo"string in Lowercase:".strtolower($str);
	echo"<br>Title Case:".ucwords($str);
	break;
case 4:echo"after padding string:".str_pad($str,20,'*',STR_PAD_BOTH);
	break;
case 5:echo"after removing whitespace:".trim($str);
	break;
case 6:echo"Reverse String:".strrev($str);
	break;
}





?>
