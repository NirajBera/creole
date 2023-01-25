<html>
<?php
    //array() is use to create array
    // $num=array(1,2,3,4,5,6);
    // $arrlenngth=count($num);
    // for($i=0;$i<$arrlenngth;$i++){
    //     echo $num[$i];
    //     echo "<br>";
    // }


    //array_change_key_case() function changes all keys in an array to lowercase or uppercase
    // $name=array("Meet"=>123,"Amit"=>234,"charu"=>544,"bhavin"=>522);
    // print_r(array_change_key_case($name,CASE_LOWER));
    // echo "<br>";
    // print_r(array_change_key_case($name,CASE_UPPER));

    //array_chunk() function splits an array into chunks of new arrays
    // $name=array("Meet","Amit","charu","bhavin");
    // print_r(array_chunk($name,2));


    //array_column() it will return the values from a single column in the input array
    // $arr = array(
    //     array(
    //         'id' => 123,
    //         'name'=> 'raj',
    //     ),
    //     array(
    //         'id'=> 234,
    //         'name'=>'meet',
    //     )
    //     );
    // $name=array_column($arr,'name');
    // print_r($name);

    //array_combine() it will combine two array key and value
    // $name=array("Meet","Amit","charu","bhavin");
    // $id=array(12,22,23,24);
    // $res=array_combine($name,$id);
    // print_r($res);
    

    //array_count_values() function counts all the values of an array
    // $arr=array('a','one','a','two','one','one');
    // print_r(array_count_values($arr));


    //array_diff() is will return diffrence between two array
    // $arr1 = array('a'=>1,'b'=>2,'c'=>3);
    // $arr2 = array('d'=>1,'f'=>2,'i'=>3,'z'=>4);
    // $res = array_diff($arr2,$arr1);
    // print_r($res);

    // array_diff_assoc() function compares the keys and values of two or more array
    // $arr1 = array('a'=>1,'b'=>2,'c'=>3);
    // $arr2 = array('a'=>1,'b'=>2,'i'=>3,'z'=>4);
    // $res=array_diff_assoc($arr1,$arr2);
    // print_r($res);

    //array_diff_key() function compare the key 0f two or more array
    // $arr1 = array('a'=>1,'b'=>2,'c'=>3,'r'=>7);
    // $arr2 = array('a'=>1,'b'=>5,'i'=>3,'z'=>4);
    // $res=array_diff_key($arr1,$arr2);
    // print_r($res);


    //array_diff_uassoc() function compare the key and value of two or more array in user defiend function
    // function myfunction($a,$b)
    //     {
    //     if ($a===$b)
    //     {
    //     return 0;
    //     }
    //     return ($a>$b)?1:-1;
    //     }

    //     $arr1=array("a"=>"red","b"=>"green","c"=>"blue");
    //     $arr2=array("d"=>"red","b"=>"green","e"=>"blue");

    //     $res=array_diff_uassoc($arr1,$arr2,"myfun");
    //     print_r($res);

    //array_diff_ukey() function compare the key of two or more array by using user defiend function
    //  function myfun($a,$b)
    //     {
    //     if ($a===$b)
    //     {
    //     return 0;
    //     }
    //     return ($a>$b)?1:-1;
    //     }

    //     $arr1=array("a"=>"red","b"=>"green","c"=>"blue");
    //     $arr2=array("d"=>"red","b"=>"green","e"=>"blue");

    //     $res=array_diff_ukey($arr1,$arr2,"myfun");
    //     print_r($res);

    //array_fill() it function is fill the value
    // $arr1=array(1,2,3,4,5);
    // print_r($arr1);
    // echo "<br>";
    // $res=array_fill(2,1,6);
    // print_r($res);
    // echo "<br>";
    // print_r($arr1);

    //array_fill_Keys() function fill value of spicify
    // $arr=array("Meet","Amit","charu","bhavin");
    // $res=array_fill_keys($arr,2);
    // print_r($res);
    
    //array_flip() is swap the key and value 
    // $arr1=array("a"=>"red","b"=>"green","c"=>"blue");
    // $res=array_flip($arr1);
    // print_r($res);

    //array_intersect() it will return the same value in two array
    // $arr1 = array('a'=>1,'b'=>2,'c'=>3);
    // $arr2 = array('a'=>1,'b'=>2,'i'=>3,'z'=>4);
    // $res=array_intersect($arr2,$arr1);
    // print_r($res);


    //array_intersect_assoc()it will return the same value chaeck key and valu both
    // $arr1 = array('a'=>1,'b'=>2,'c'=>3);
    // $arr2 = array('a'=>1,'b'=>2,'i'=>3,'z'=>4);
    // $res=array_intersect_assoc($arr2,$arr1);
    // print_r($res);

    //array_intersect_key() it will return same key 
    // $arr1 = array('a'=>1,'b'=>2,'c'=>3);
    // $arr2 = array('a'=>1,'b'=>2,'i'=>3,'z'=>4);
    // $res=array_intersect_key($arr2,$arr1);
    // print_r($res);

    //array_key_exists() it will return key is exists in array or not
    // $arr1 = array('a'=>1,'b'=>2,'c'=>3);
    // if(array_key_exists('b',$arr1)){
    //     echo "yes";
    // }else{
    //     echo "no";
    // }
    // //array_keys() it return key in array
    // $res=array_keys($arr1);
    // print_r($res);

    
    //array_merge() it combin two arrayor more array
    // $arr1 = array('a'=>1,'b'=>2,'c'=>3);
    // $arr2 = array('a'=>1,'b'=>2,'i'=>3,'z'=>4);
    // print_r(array_merge($arr1,$arr2));

    //array_merge_reverse() it will combine two or more array
    // $arr1 = array('a'=>1,'b'=>2,'c'=>3);
    // $arr2 = array('a'=>1,'b'=>2,'i'=>3,'z'=>4);
    // print_r(array_merge_recursive($arr1,$arr2));

    
    //array_multisort() it sort in array element
    // $name=array("meet","amit","charu","bhavin");
    // array_multisort($name);
    // print_r($name);


    //array_pad() function is add the value by given number
    // $arr=array(1,2);
    // print_r(array_pad($arr,6,"abc"));
    // print_r(array_pad($arr,-6,"abc"));

    //array_pop()it will remove last element
    // $name=array("meet","amit","charu","bhavin");
    // array_pop($name);
    // print_r($name);

    // //array_product() it return product of array element
    // $arr=array(2,3,3);
    // echo array_product($arr);

    // // array_push() it push element in array
    // array_push($arr,3,5,6);
    // print_r($arr);


    //array_rand() it will give rendom key
    // $arr2 = array('a'=>1,'b'=>2,'i'=>3,'z'=>4);
    // print_r(array_rand($arr2,3));

    //array_replace() it will replace the arrary1 to array 
    // $arr1 = array('a'=>1,'b'=>2,'c'=>3);
    // $arr2 = array('a'=>1,'b'=>2,'c'=>3,'z'=>4);
    // print_r(array_replace($arr1,$arr2));

    //array_reverse() it will reverse the arrayelement
    // $arr2 = array('a'=>1,'b'=>2,'c'=>3,'z'=>4);
    // print_r(array_reverse($arr2));

    //array_search() function search an array for a value and returns the key.
    // $arr2 = array('a'=>1,'b'=>2,'c'=>3,'z'=>4);
    // print_r(array_search(3,$arr2));
    
    //array_shift() it will remove frist value from array and return remaining values
    // $arr2 = array('a'=>1,'b'=>2,'c'=>3,'z'=>4);
    // print_r(array_shift($arr2));
    // print_r($arr2);

    //array_slice() function returns selected parts of an array
    // $arr2 = array('a'=>1,'b'=>2,'c'=>3,'z'=>4);
    // print_r(array_slice($arr2,1,3));

    //array_sum() it will return sum of the array element
    // $arr=array(2,3,3);
    // print_r(array_sum($arr));

    // //array_unique() function removes duplicate values from an array
    // $arr2 = array('a'=>1,'b'=>2,'c'=>3,'z'=>2);
    // print_r(array_unique($arr2)); 

    // //array_unshift() function inserts new elements to an array
    // $arr2 = array('a'=>1,'b'=>2,'c'=>3,'z'=>2);
    // // print_r(array_unshift($arr2,6));
    // // print_r($arr2);

    // print_r(array_values($arr2));

    //arsort() function sorts an associative array in descending order, according to the value
    // $arr2 = array('a'=>1,'b'=>7,'c'=>9,'z'=>8);
    // arsort($arr2);
    // print_r($arr2);
    // asort($arr2);
    // print_r($arr2)

    //compact() function creates an array from variables and their values
    // $fname="raj";
    // $id=123;
    // $age=23;
    // $res=compact("fname","id","age");
    // print_r($res);

    //count()is count the array element
    // $arr2 = array('a'=>1,'b'=>7,'c'=>9,'z'=>8);
    // print_r(count($arr2));
    // echo "<br>";
    // echo current($arr2);
    // echo end($arr2);

    //in_array() itreturn match value or not
    // $name = array("Peter", "Joe", "Glenn", "Cleveland");

    //     if (in_array("Glenn", $name))
    //     {
    //     echo "Match found";
    //     }
    //     else
    //     {
    //     echo "Match not found";
    //     }
    //echo key($name);
    //echo krsort($name);
    //echo ksort($name);


    //list() it list element

        // $arr = array("Dog","Cat","Horse");

        // list($a, $b, $c) = $arr;
        // echo "I have several animals, a $a, a $b and a $c.";

        //range() it geneat array accounding range
        //$num = range(0,7);
        // print_r ($num);   
    //reset() function moves the internal pointer to the first element of the array
    // $name = array("Peter", "Joe", "Glenn", "Cleveland");
    // echo current($name) . "<br>";
    // echo next($name) . "<br>";

    // echo reset($name);   
    // echo rsort($name);
    //shuffle($name);
    // print_r($name);
    //sizeof($name); 




?>    
</html>