<html>
    <body>
        <form action="" method="post">
            
            Enter Your Name : <input type = "text" name = "input">
            <br>
            <button type = "submit" name = "submit"> button </button>
        </form>
    </body>
</html>

<?php

    
    if(isset($_POST['submit'])){
        $name = $_POST['input'];
        

        echo "Welcome, $name";

    }

?>