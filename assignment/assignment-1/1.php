<html>
    <body>
        <form action="" method="post">
            <lable>enter a number :- </lable>
            <input type="number" name="input">
            <br><br>
            <button type ="submit" name="submit"> submit</button>
        </form>  
    </body>  
</html>

<?php

    if(isset($_POST['submit'])){
        $n=$_POST['input'];
        $c=0;

        for($i=1;$i<= $n;$i++){
            if($i % 2 == 0){
                $c = $c+$i;
            }
        }

        echo "sum of even number = $c";
    }


?>