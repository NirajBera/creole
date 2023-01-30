<?php
$str="hi how are you's";
//addcslashes
echo addcslashes($str,'w');
echo "<br>";
//addslashes
echo addslashes($str);
echo "<br>";
//bin2hex
echo bin2hex($str);
echo "<br>";
// hex2bin
echo hex2bin('686920686f772061726520796f752773');
echo "<br>";
//chop
echo chop($str);
echo "<br>";
//chr
echo chr(56);
echo "<br>";
echo ord("g");
echo "<br>";
echo chunk_split($str,2,"/");
echo "<br>";
//convert_cry_string
//echo convert_cyr_string($str,'w','u');
echo "<br>";
$str1=convert_uuencode($str);
echo "<br>";
echo $str1;
echo convert_uudecode($str1);
echo "<br>";
echo crypt($str);
echo "<br>";
?>