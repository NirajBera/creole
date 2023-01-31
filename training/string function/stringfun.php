<html>
<body>    
<form action="" method="post">
    <br>
    <center>
    <lable for="">enter string here:-</lable>
    <input type="text" id="sub" name="input">


    <br><br>
    <lable for="">select function:-</lable>
    <select name="your_function">
            <option value="select function">[select function]</option>
            <option value="strlen">string leng</option>
            <option value="md5">md5</option>
            <option value="sha1">sha1</option>
            <option value="strtolower">strtolower</option>
            <option value="strtoupper">strtoupper</option>
            <option value="is_string">is_string</option>
            <option value="ucfirst">ucfirst</option>
            <option value="ucwords">ucwords</option>
            <option value="lcfirs">lcfirs</option>
            <option value="str_word_count">string word count</option>
    </select>
    <br><br>
    <button name="submit" type="submit">Click for Result</button>
</center>
</form>
</body>
</html>

<?php

if(isset($_POST['submit'])){

    $your_fun=$_POST['your_function'];


    echo "you are select ".$your_fun." and your answer is:- ".$your_fun($_POST['input']);








    // echo "length functoin:-  ". strlen($_POST['input'])."<br>";
    // echo "substr function:-  ".substr($_POST['input'],3)."<br>";
    // echo "str_replace function:- ".str_replace("word",$_POST['input'],"hello word")."<br>";
    // echo "ms5 function:- ". md5($_POST['input'])."<br>";
    // echo "sha1 function:- ". sha1($_POST['input'])."<br>";
    // echo "trim function:- ".trim($_POST['input'],"hu!")."<br>";
    // echo "strtolowre function:- ". strtolower($_POST['input'])."<br>";
    // echo "strtoupper function:- ". strtoupper($_POST['input'])."<br>";
    // echo "is_string function:- ". is_string($_POST['input'])."<br>";
    // echo "ucfrist function:- ". ucfirst($_POST['input'])."<br>";
    // echo "ucword function:- ". ucwords($_POST['input'])."<br>";
    // echo "lcfrist function:- ". lcfirst($_POST['input'])."<br>";

}

?>
