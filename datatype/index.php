<html>
<?php
//string 
echo "String";
echo "<br>";
echo "<br>";
echo 'i am start to lurn \n php';
echo "<br>";
echo 'i am start to lurn \\nphp';
echo "<br>";
echo "i am start to lurn \n php";
echo "<br>";
echo "<br>";
echo "<br>";



//Integer
echo "Integer";
echo "<br>";
echo "<br>";
$num=25369489;
echo $num;
echo "<br>";
var_dump ($num);
echo "<br>";
$oct=016;
echo $oct;
$bin = 01101;
echo "<br>";
echo $bin;
echo "<br>";
echo "<br>";
echo "<br>";

//float
echo "float";
echo "<br>";
echo "<br>";
$f=10.23;
var_dump($f);
echo "<br>";
$f1=10.22222222200000222222222200000111;
echo $f1;
echo "<br>";
echo "<br>";
echo "<br>";

//boolean
echo "boolean";
echo "<br>";
echo "<br>";
$a=true;
$b=false;
var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";




//if var is empty then is empty string
$e="";
var_dump($e);
echo "<br>";
//type conversion with bool then empty string is false.
var_dump((bool) $e);
echo "<br>";
echo "<br>";
echo "<br>";



// object 
echo "object";
echo "<br>";
echo "<br>";

class personName {
  public $name1;
 
  public function __construct($name1) {
    $this->name1 = $name1;
    
  }
  public function message() {
    return "person name is :- " . $this->name1 ;
  }
}
//object create with new 
$p1 = new personName("niraj");
echo $p1 -> message();
echo "<br>";


?>
</html>
