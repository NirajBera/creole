<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title></title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>


    <?php
    $name = $email = $phone = $url = $password = "";
    $nameErr = $emailErr = $phoneErr = $urlErr = $passwordErr = "";

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
       

        if (empty($_POST["password"])) {
            $passwordErr = "this field is required please enter password";
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
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <a class="navbar-brand"><b>CRUD</b></a>
                <form class="d-flex">
                    <button class="btn btn-primary rounded-3" type="submit"><a href="singup.php" style="color: white;">Log in</a></button>
                </form>
            </div>
        </nav>
        <br>
        <div class="mb-3">
            <h3>Sing-up Form</h3>
        </div>
        <br><br>

        <form method="POST" class="container border border-secondary border-3 rounded-3 w-50 text-center d-flex flex-column justify-content-center cmxform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

             <div class="mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <input id="name" class="form-control" name="name" value="<?php echo $name; ?>">
                <span class="error"> <?php echo "*" . $nameErr; ?></span>
            </div>

            <div class="mb-3">
                <label for="email" class="col-sm-2 col-form-label">E-Mail</label>
                <input id="email" class="form-control" name="email" value="<?php echo $email; ?>">
                <span class="error"> <?php echo "*" . $emailErr; ?></span>
            </div>

            <div class=" mb-3">
                <label for="password" class="col-sm-2 col-form-label">password</label>
                <input id="password" class="form-control" type="password" name="password">
                <span class="error"> <?php echo "*" . $passwordErr; ?></span>
            </div>

            <div class="mb-3">
                <center><input class="submit,btn btn-primary rounded-3" type="submit" name="submit" value="submit"></center>
            </div>
        </form>
    </center>

    <?php
    include('connect.php');
    session_start();

    if (isset($_POST['submit']) && !empty($email) && !empty($_POST['password']) && !empty($name)) {

        $password=md5($password);

        $sql = "INSERT INTO user( name, email, password) VALUES('$name','$email','$password')";
        if(mysqli_query($conn,$sql)){
            echo "Insert record successfully";
        }else{
            echo "error : ". mysqli_error($conn);
        }
      
    }
    ?>

</body>

</html>