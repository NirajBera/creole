<html>
    <body>
        <form action="" method="post">
            <lable>Enter a number :- </lable>
            <input type="number" name="input">
            <br><br>
            <button type ="submit" name="submit"> submit</button>
        </form>  
    </body>  
</html>

<?php

    if(isset($_POST['submit'])){
        $input=$_POST['input'];
        $sum=0;

        for($loop=1;$loop<= $input;$loop++){
            if($loop % 2 == 0){
                $sum = $sum+$loop;
            }
        }

        echo "sum of even number = $sum";
    }


?>