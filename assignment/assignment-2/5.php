<?php
        $number = 5; 
        
        $count = 1;
        for ($loop = $number; $loop > 0; $loop--) 
        {
            for ($innerLoop = $loop; $innerLoop < $number + 1; $innerLoop++) 
            {
                printf("%4s", $count);
                $count++;
            } 
            echo "<br>";
        }
?>
