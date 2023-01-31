<?php

        $arr_num = array(5, 10, 15, 20, 25);
        $arr_len=count($arr_num);

        for($i=0;$i<$arr_len;$i++){
            if($i == 3 ){
                break;
            }
            echo $arr_num[$i];
           
            echo "<br>";
            }
?>