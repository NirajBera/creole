<html>
<body>    
<form action="" method="post">
    <br>
    <center>
    <label for="">Enter Array Element (add comma(,) after each array element) : </label>
    <input type="text" name="input" id="subject">
    <br><br>
    <lable for="">select array function:-</lable>
    <select name="your_function">
            <option value="select function">[select function]</option>
            <option value="array_rand">random</option>
            <option value="array_sum">sum</option>
            <option value="count">count</option>
            <option value="array_reverse">Reverse</option>
            <option value="array_product">Product</option>
            <option value="sizeof">size of</option>
            <option value="array_unique">unique</option>
            <option value="array_values">values</option>
            <option value="asort">asort</option>
            <option value="arsort">arsort</option>
            <option value="shuffle">shuffle</option>

    </select>
    <br><br>
    <button name="submit" type="submit">Click for Result</button>
</center>
</form>
</body>
</html>
    

<?php




// $arr=['one','two','three'];
// $arr_k=array_rand($arr);
// echo $arr[$arr_k];


if(isset($_POST['submit'])){

    $your_fun=$_POST['your_function'];

    $arr1 = explode(",",$_POST['input']);




    if($your_fun=='array_rand'){


       $arr= $your_fun($arr1);
       echo "you are select ".$your_fun." and your answer is:- ".$arr1[$arr];


    }elseif($your_fun=='asort' or $your_fun=='arsort' or $your_fun=='shuffle' ){


        echo "you are select ".$your_fun." and your answer is:- ";
        $your_fun($arr1);
        foreach($arr1 as $x){
            echo "<br>";
            echo $x;
           
        }


    
    }else{

        echo "you are select ".$your_fun." and your answer is:- ";
        print_r($your_fun($arr1));
    }


    // echo "you are select ".$your_fun." and your answer is:- ";
    // print_r($your_fun($arr1));



}

?>