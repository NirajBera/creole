<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>


    <?php



    $name = $email = $phone = $url = $password = $gender = "";
    $nameErr = $emailErr = $phoneErr = $urlErr = $passwordErr = $genderErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["name"])) {
            $nameErr = "this field is required please enter name";
        } else {

            if (!preg_match("/^[a-zA-Z-']*$/", $name = $_POST["name"])) {
                $nameErr = "Only letters allowed";
                $name = "";
            } else {
                $name = test_input($_POST["name"]);
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "this field is required please enter email";
        } else {
            if (!filter_var($email = $_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $emailErr = "email is not proper format";
                $email = "";
            } else {
                $email = test_input($_POST["email"]);
            }
        }

        if (empty($_POST["phone"])) {
            $phone = "";
        } else {
            $phone = test_input($_POST["phone"]);
        }

        if (empty($_POST["url"])) {
            $url = "";
        } else {
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $url = $_POST["url"])) {
                $urlErr = "enter valid url";
                $url = "";
            } else {
                $url = test_input($_POST["url"]);
            }
        }


        if (empty($_POST["gender"])) {
            $genderErr = "this field is required please enter gender";
        } else {
            $gender = test_input($_POST["gender"]);
        }

        if (empty($_POST["gender"])) {
            $passwordErr = "this field is required please enter gender";
        } else {
            $password = test_input($_POST["password"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    ?>

    <center>
        <p><span class="error">* required field</span></p>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <table border="1" style="border: ridge 5px;">
                <tr>
                    <th colspan="2">
                        <h3>PHP form with validation</h3>
                    </th>
                </tr>
                <tr>
                    <td> <label for="name">Name :- </label></td>
                    <td> <input id="name" name="name" type="text" value="<?php echo $name; ?>">
                        <span class="error">* <?php echo $nameErr; ?></span>
                    </td>
                </tr>

                <tr>
                    <td> <label for="email">E-Mail :- </label></td>
                    <td> <input id="email" type="email" name="email" value="<?php echo $email; ?>">
                        <span class="error">* <?php echo $emailErr; ?></span>
                    </td>
                </tr>

                <tr>
                    <td> <label for="cphone">Phone :- </label></td>
                    <td> <input id="phone" type="number" name="phone" maxlength="10" minlength="10" value="<?php echo $phone; ?>">
                        <span class="error"><?php echo $phoneErr; ?></span>
                    </td>
                </tr>


                <tr>
                    <td> <label for="curl">URL :- </label></td>
                    <td> <input id="curl" type="url" name="url" value="<?php echo $url; ?>">
                        <span class="error"><?php echo $urlErr; ?></span>
                    </td>
                </tr>

                <tr>
                    <td>Gender :-</td>
                    <td>
                        <input type="radio" id="gender" name="gender" <?php if (isset($gender) && $gender == "Male") echo "checked"; ?> value="Male">
                        <label for="Male">Male</label>
                        <input type="radio" id="gender" name="gender" <?php if (isset($gender) && $gender == "Female") echo "checked"; ?> value="Female">
                        <label for="Female">Female</label>
                        <span class="error">* <?php echo $genderErr; ?></span>

                    </td>
                </tr>

                <tr>
                    <td> <label for="password">password :-</label></td>
                    <td> <input id="password" type="password" name="password">
                        <span class="error">* <?php echo $passwordErr; ?></span>
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
    echo "<h3>your data</h3><br>";
    echo "Name :- ".$name;
    echo "<br>";
    echo "E-amil :- ".$email;
    echo "<br>";
    echo "Phone Number :- ". $phone;
    echo "<br>";
    echo "URL :- ".$url;
    echo "<br>";
    echo "Gender :- ".$gender;
    echo "<br>";
    echo "Password :- ".$password;
    ?>
</body>

</html>