<?php
$str="hi how are \you's";
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
// echo crypt($str);
// echo "<br>";
// number_format()
echo "<br>";
$num=123456;
echo number_format($num,2,".",",");
echo "<br>";
$st1="name=nb&age=20";
echo parse_str($st1,$myarr);
echo "<br>";
print_r($myarr);
echo "<br>";
printf("%f",$num);
echo "<br>";
echo quotemeta($str);
echo "<br>";
echo sha1($str);
echo "<br>";
$st2="hi hello";
echo similar_text($str,$st2);
echo "<br>";
echo soundex($st2);
echo "<br>";
echo sprintf("%f",$num);
echo "<br>";
echo str_ireplace("Hi","hiii",$st2);
echo "<br>";
echo str_replace("Hi","hiiii",$st2);
echo "<br>";
echo str_pad($st2,15,",");
echo "<br>";
echo str_repeat("hi",6);

echo "<br>";
echo str_rot13($st2);
echo "<br>";
echo str_rot13("uv uryyb");
echo "<br>";
echo str_shuffle($st2);
echo "<br>";
print_r (str_split($st2,2));
echo "<br>";
echo str_word_count($st2);
echo "<br>";
echo strcasecmp($st1,$st2);
echo "<br>";
echo strnatcasecmp($st1,$st2);
echo "<br>";
echo strcmp($st1,$str);
echo "<br>";
echo strip_tags("hello <b>how are you</b>");
echo "<br>";
echo stripslashes($str);
echo "<br>";
echo stripos($st2,"h");
echo "<br>";
echo stristr($st2,"hello",true);
echo strpbrk($st2,"i");
echo "<br>";
echo strpos($st2,"h");
echo "<br>";
echo stripos($st2,"H");
echo "<br>";
echo strrpos($st2,"h");
echo "<br>";
echo strripos($st2,"H");
echo "<br>";
echo strrev($st2);
echo "<br>";
echo strspn($st2,"hi");
echo "<br>";
echo strtr($st2,"i","e");
echo "<br>";
echo substr($st2,2);
echo "<br>";
echo substr_compare($st2,"hello",3);
echo "<br>";
echo substr_replace($st2,"hi",3);
echo "<br>";
$str4="hi ghh hhhh jjjjjjjjjjjjjjjj";
echo wordwrap($str4,10,"<br>",true);



?>