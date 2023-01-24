<html>

<?php
// echo"hello word"."<br>";

// //string length count
// echo strlen("hello how are you")."<br>";

// //add backsles in  word
// echo addcslashes("hello how are you hello","h")."<br>";
// echo addcslashes("hello how are you hello","a..z")."<br>";
// //add slash in double cort
// $st="hello's  how are's you hello";

// echo addslashes($st);


//bin to hexa and hexa to bin
// $st="hellos  how ares you hello";
//$st2="1234";
//echo bin2hex($st2)."<br>";
// echo bin2hex($st)."<br>";
// echo pack()


// chop() function it remove righto left "\n,\o,\t"
//$st="hello \n ho\tw! ar\re \n you !";
//echo chop($st)
// note:it will remove only char and it will not remove white space it remaing ex it output:hello ho w! ar e you !


//chr() function return the asic of the value
// $st1= chr(89);
// $st2= chr(55);
// echo("$st1 2 $st2");

//chunk_split() function it give spacifc value give position(index)
// $st="how are you";
// echo chunk_split($st,4,"//")

//convert_cyr_string() 
// $st="hello word";
// echo convert_cyr_string($st,'w','a');

// encode decode
//encode
// $st1="how are you";
// $encode=convert_uuencode($st1);
// echo $encode."<br>";
// //decode
// $decode=convert_uudecode($encode);
// echo $decode;


//count_chars function it check mode wise count
// $str = "Hello World!";
// print_r( count_chars($str,1));

//echo 
// $st="hello how are you";
// $st1="hi, i am good";
// echo($st."".$st1);
// echo("good morning $st");
// echo('good morning $st');

//explode is breck the string into array
// $st= "hello how are you";
// print_r(explode(" ",$st,1));

//get_html_translation_table() function returns the translation table used by the htmlentities() and htmlspecialchars() functions.
//print_r(get_html_translation_table(HTML_ENTITIES));

//hexa to bin
//echo hex2bin("48656c6c6f20576f726c6421");

// //html_entity_decode it convet html element into char
// $str = "Albert Einstein said: &#039;E=MC&sup2;&#039;";
// echo html_entity_decode($str); // Will only convert double quotes


//htmlspecialchars_decode it will use to decode html enties into char
// $st="hello &lt;br&gt; how are you";
// echo htmlspecialchars_decode($st);

//htmlspecialchars() it will use to decode char into html enties 
// $st="hello <br> how are you";
// echo htmlspecialchars($st);

// //implode it return element from array
// $arr= array('hello','how','are','you');
// echo implode(" ",$arr);

// //join it return a string form array
// $arr1= array('hello','how','are','you');
// echo join(" ",$arr);

// //lcfrist it will covet string frist latter into lower latter
// $str="Hi How";
// echo lcfirst($str);

//trim it remove char from both end(it will remove only frist ouccr.in ex only frist 'h' output:-ello how hi are yo)
// $st ="hello how hi are you!";
// echo trim($st,"hu!");

// //ltrim it remove leftside of string
// //rtrim it remove rightside of string
// $str="hello word hello";
// echo ltrim($str,"hello")."<br>";
// echo rtrim($str,"hello");



//md5  function calculte the md5 hash ofa string
// $st="hello how are you";
// echo md5($st,TRUE);


// $fn="test.txt";
// $md=md5_file($fn,TRUE);
// echo $md;

//metaphone it will return mataphone string of string
// $st="progamer";
// echo metaphone($st);

//money_format
// $number = 1234.56;
// setlocale(LC_MONETARY,"en_US");
// echo money_format("The price is %i", $number);

//nl2br() is new line in string
// echo nl2br("hello \nhow are you");

//number formate
// $number=1234.9;
// echo number_format($number,3);


//ord function it give frist char ascii value
//echo ord("hello");


//parse_str() function parses a query string into variables.

// parse_str("peson=raj&age=36");
// echo $person."<br>";
// echo $age;
// parse_str("name=Peter&age=43");
// echo $name."<br>";
// echo $age;

//quoted_printtable_decode
// $str = "Hello=0Aworld.";
// echo quoted_printable_decode($str);
//quoted_printtable_encode
//$str="hello world";
//echo quoted_printtable_decode($str);

//quotemeta() function adds backslashes in front of some predefined characters in a string.
// $st="hello how are you?, hi...";
// echo quotemeta($st);

//setlocal is use to set information
//echo setlocale(LC_ALL,"US");

//sha1 is hash of string
// $str="hello how are you";
// echo sha1($str);
//sha1_file() it hash of file
// $fd="test.txt";
// $sha1file=sha1_file($fd);
// echo $sha1file;

#similar_text()is return same valuein two string
// $st1="hello how are you ";
// $str2="hello sir how you ";
// echo similar_text($st1,$str2);

#soundex() is english 
$str= "progromer";
echo soundex($str);
?>

</html>