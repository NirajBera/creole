<?php



    
    $ASCII_SIZE = 256;
            
            function repeat($str)
            {
                global $ASCII_SIZE;
                
                $str1 = str_split($str);
                asort($str1);
                $str1=implode($str1);
                
                
                $count = array_fill(0, $ASCII_SIZE, NULL);
            
                $len = strlen($str1);
                $max = 0;
                for ($inner = 0; $inner < ($len); $inner++)
                {
                    $count[ord($str1[$inner])]++;
                    if ($max < $count[ord($str1[$inner])])
                    {
                        $max = $count[ord($str1[$inner])];
                        $result = $str1[$inner];
                    }
                }
                
                return $result;
            }
 
            
           



echo(repeat("abcddef"));

echo "<br>";

echo(repeat("heggbdeff"));
?>