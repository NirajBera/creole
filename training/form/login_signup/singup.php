
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
    <script src='singupinsert.js'></script>

    
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
                    <button class="btn btn-primary rounded-3" type="submit"><a href="login.php" id="a1" >Log in</a></button>
                </form>
            </div>
        </nav>
        <br>
        <div class="mb-3">
            <h3>Sign-up Form</h3>
        </div>
        <br><br>

        <form method="POST" class="container border border-secondary border-3 rounded-3 w-50 text-center d-flex flex-column justify-content-center cmxform" id="vForm" action="">

             <div class="mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <input id="name" class="form-control" name="name" required class="error">
            </div>

            <div class="mb-3">
                <label for="email" class="col-sm-2 col-form-label">E-Mail</label>
                <input id="email" class="form-control" name="email" type="email"  class="error" required>
                
            </div>

            <div class=" mb-3">
                <label for="password" class="col-sm-2 col-form-label">password</label>
                <input id="password" class="form-control" type="password" name="password" required class="error">
                
            </div>



            <div class="mb-3">
                <center><input class="submit,btn btn-primary rounded-3" id="submit" type="submit" name="submit" value="submit"></center>
            </div>

            <p id="p1"></p>

        </form>
    </center>

</body>

</html>