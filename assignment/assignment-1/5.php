<?php

        $arr_num = array(5, 10, 15, 20, 25);
        $arr_len=count($arr_num);

        for($loop=0;$loop<$arr_len;$loop++){
            if($loop == 3 ){
                break;
            }
            echo $arr_num[$loop];
           
            echo "<br>";
            }
?>