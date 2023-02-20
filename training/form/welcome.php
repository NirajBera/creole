<?php
   include('session.php');
   //session_start();
   $name=$_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>welcome</title>
     <style>
        #a1{
            text-decoration: none;
            color: white;
        }
        #a1:hover{
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>

    <center>
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <a class="navbar-brand"><b>CRUD</b></a>
                <form class="d-flex">
                    
                    <button id="btn1" class="btn btn-primary rounded-3"><a href="logout.php" id ="a1">Sign Out</a></button>
                    
                </form>
            </div>
        </nav>
        <br>
        <h1>Welcome <?php echo $name; ?></h1> 
      
    </center>

</body>

</html>