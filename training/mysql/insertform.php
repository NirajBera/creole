<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Insert Form</title>
</head>

<body>
    <center>
        <h3>User Info Form</h3>
        <form action="" method="post">
            <table border="1">

                <tr>
                    <center><th colspan="2">User Form</th></center>
                </tr>

                <tr>
                    <td>User Name :- </td>
                    <td><input type="text" name="uname"></td>
                </tr>

                <tr>
                    <td>User Phone Number :- </td>
                    <td><input type="number" name="unumber"></td>
                </tr>
                <tr>
                    <td>User email :- </td>
                    <td><input type="email" name="uemail"></td>
                </tr>
                <tr>
                    <td>User Gender :- </td>
                    <td>
                        <input type="radio" id="Male" name="gender" value="Male">
                        <label for="Male">Male</label>
                        <input type="radio" id="Female" name="gender" value="Female">
                        <label for="Female">Female</label>
                    </td>
                </tr>
                <tr>
                    <td>enter your address :- </td>
                    <td>
                        <textarea name="address" rows="10" cols="30"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <br>
                        <center><input type="submit" value="submit" name = "submit"></center>
                        <br>
                    </td>
                </tr>


            </table>
        </form>
    </center>
</body>

</html>

<?php
    
    if(isset($_POST['submit'])){
        
        $uname = $_POST['uname'];
        $unumber=$_POST['unumber'];
        $uemail = $_POST['uemail'];
        $ugender=$_POST['gender'];
        $uaddr=$_POST['address'];

        require 'connect.php';

        $sql = "INSERT INTO user_form ( uname, unumber, uemail, ugender, uaddr) VALUES ('$uname','$unumber','$uemail','$ugender','$uaddr')";

        if(mysqli_query($conn,$sql)){
            header('Location:display.php');

        }else{
            echo "error: ". mysqli_error($conn);
        }
        
        
    }
?>