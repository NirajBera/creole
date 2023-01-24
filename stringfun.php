<form name="form" action="" method="post">
    <lable for="">enter string here:-</lable>
    <input type="text" id="sub" name="input">
</form>

<?php

echo "length functoin:-  ". strlen($_POST['input'])."<br>";
echo "substr function:-  ".substr($_POST['input'],3)."<br>";
echo "str_replace function:- ".str_replace("word",$_POST['input'],"hello word")."<br>";
echo "ms5 function:- ". md5($_POST['input'])."<br>";
echo "sha1 function:- ". sha1($_POST['input'])."<br>";
echo "trim function:- ".trim($_POST['input'],"hu!")."<br>";
echo "strtolowre function:- ". strtolower($_POST['input'])."<br>";
echo "strtoupper function:- ". strtoupper($_POST['input'])."<br>";
echo "is_string function:- ". is_string($_POST['input'])."<br>";
echo "ucfrist function:- ". ucfirst($_POST['input'])."<br>";
echo "ucword function:- ". ucwords($_POST['input'])."<br>";
echo "lcfrist function:- ". lcfirst($_POST['input'])."<br>";

?>