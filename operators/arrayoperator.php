<?php
$arr1= array('a'=>12,'b'=>32);
$arr2= array('c'=>23,'d'=>21);
echo "array 1 :- ";
print_r($arr1);
echo "<br>";
echo "array 2 :- ";
print_r($arr2);
echo "<br>";

echo "<br>";
echo "Union :- ";

print_r($arr1+$arr2);
echo "<br>";
echo "Equality :- ";
var_dump($arr1 == $arr2);
echo "<br>";
echo "Identity :- ";
var_dump($arr1 === $arr2);
echo "<br>";
echo "Inequality :-";
var_dump($arr1 != $arr2);
echo "<br>";
echo "Inequality(<>) :- ";
var_dump($arr1 <> $arr2);
echo "<br>";
echo "Non-identity :- ";
var_dump($arr1 !== $arr2);


?>