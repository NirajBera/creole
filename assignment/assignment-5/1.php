<?php
                $color = array('white', 'green', 'red');

                foreach($color as $value){
                    echo $value;
                    echo ",";
                    
                }

                sort($color);
                
                echo "<ul>";
                foreach ($color as $value1)
                {
                echo "<li>$value1</li>";
                }
                echo "</ul>";


?>