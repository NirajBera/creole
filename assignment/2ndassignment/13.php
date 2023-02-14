<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>

    <center>
        
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <table border="1" style="border: ridge 5px;">
                
                <tr>
                    <td> <label for="email">E-Mail :- </label></td>
                    <td> <input id="email" type="text" name="email">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <center><input class="submit" type="submit" value="Submit"></center>
                    </td>
                </tr>

            </table>

        </form>
    </center>


    <?php



    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       function Verify($input){
            if (!filter_var($input, FILTER_VALIDATE_EMAIL)) {
                echo  "false";
            } else {
                echo "true";
            }
       }

       $input=$_POST["email"];
       Verify($input);

    }

   

    ?>
   
</body>

</html>