<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title></title>
    <script src='jquery-3.6.3.js'></script>
    <script src='jquery.validate.min.js'></script>
    <script src='checklogin.js'></script>

    
    <style>
        #a1{
            text-decoration: none;
            color: white;
        }
        #a1:hover{
            text-decoration: none;
            color: white;
        }
        label.error {

            color: red;
        }
    </style>
</head>

<body>

    <center>
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <a class="navbar-brand"><b>CRUD</b></a>
                <form class="d-flex">
                    
                    <button id="btn1" class="btn btn-primary rounded-3"><a href="singup.php" id="a1">sign up</a></button>
                    
                </form>
            </div>
        </nav>
        <br>
        <div class="mb-3">
            <h3>Login Form</h3>
        </div>
        <br><br>

        <form method="POST" class="container border border-secondary border-3 rounded-3 w-50 text-center d-flex flex-column justify-content-center cmxform" action="" id="vForm">

            <div class="mb-3">
                <label for="email" class="col-sm-2 col-form-label">E-Mail</label>
                <input id="email" class="form-control" name="email" type="email" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>" class="error" required>
                
            </div>

            <div class=" mb-3">
                <label for="password" class="col-sm-2 col-form-label">password</label>
                <input id="password" class="form-control" type="password" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" required class="error">
                
            </div>

            <div class="mb-3">
                <center><input class="submit,btn btn-primary rounded-3" id="submit" type="submit" name="submit" value="submit"></center>
            </div>
            <div class=" mb-3">
                <input id="remember" type="checkbox" name="remember">
                <label for="remember" class="col-sm-2 col-form-label">Remember Me</label>   
            </div>

            <p id="p1"></p>

            <a href="forgot.php" >Forgot Password</a>

        </form>
    </center>

</body>

</html>