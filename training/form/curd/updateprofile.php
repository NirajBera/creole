<?php

include('../login_signup/session.php');
include('../login_signup/connect.php');
//session_start();
$email = $_SESSION['email'];

$sql = "select * from crud where email ='$email'";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
//echo $email;

?>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>
    <script src='updateprofile.js'></script>


    <style>
        #a1 {
            text-decoration: none;
            color: white;
        }

        #a1:hover {
            text-decoration: none;
            color: white;
        }

        label.error {

            color: red;
        }

        body {
            /* margin-top: 20px; */
            background-color: #f2f6fc;
            color: #69707a;
        }

        .img-account-profile {
            height: 10rem;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        .card {
            box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
        }

        .card .card-header {
            font-weight: 500;
        }

        .card-header:first-child {
            border-radius: 0.35rem 0.35rem 0 0;
        }

        .card-header {
            padding: 1rem 1.30rem;
            margin-bottom: 0;
            background-color: rgba(33, 40, 50, 0.03);
            border-bottom: 1px solid rgba(33, 40, 50, 0.125);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand"><b>CRUD</b></a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Welcome.php">Welcome</a>
                    </li>
                </ul>
                <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
                &nbsp;
                <form class="d-flex">
                    <button id="btn1" class="btn btn-primary rounded-3 "><a href="../login_signup/logout.php" id="a1">Sign Out</a></button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container-xl px-4 mt-4">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->

                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <form method="POST" id="iForm" action="">
                            <!-- Profile picture image-->
                            <input type="hidden" id="id" name="id" class="txtField" value="<?php echo $row['id']; ?>">

                            <img class="img-account-profile rounded-circle mb-2" src="../image/<?php echo $row['id']."/".$row['img']; ?>" alt="">

                            <div class="col-sm-10 mx-auto">
                                <input class="form-control" type="file" id="image" name="image" value="<?php echo $row['img']; ?> " class="error" >
                            </div>
                            <br>
                            <!-- Profile picture upload button-->
                            <center><input class="submit,btn btn-primary rounded-3" id="submit" type="submit" name="submit" value="Update Image"></center>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                        <center>
                            <form method="POST" class="container w-30 text-center d-flex flex-column justify-content-center cmxform" id="vForm" action="">

                                <input type="hidden" id="id" name="id" class="txtField" value="<?php echo $row['id']; ?>">

                                <div class="mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <input id="name" class="form-control" name="name" value="<?php echo $row['name']; ?>" required class="error">
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">E-Mail</label>
                                    <input id="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" type="email" class="error" required>

                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3">Gender</label>

                                    <div class="col-sm-12 justify-content-center">
                                        <div class="justify-content-center">
                                            <div class="form-check form-check-inline  ">
                                                <label class="radio-inline">
                                                    <input type="radio" id="gender" name="gender" value="Female" <?php if ($row['gender'] == 'Female') {
                                                                                                                        echo "checked";
                                                                                                                    } ?>>Female
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline  ">
                                                <label class="radio-inline">
                                                    <input type="radio" id="gender" name="gender" value="Male" <?php if ($row['gender'] == 'Male') {
                                                                                                                    echo "checked";
                                                                                                                } ?>>Male
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <label id="gender-error" class="error" for="gender"></label>
                                </div>
                                <div class="mb-3">
                                    <label for="number" class="col-sm-2 col-form-label">Number</label>
                                    <input id="number" class="form-control" name="number" type="number" maxlength="10" minlength="10" value="<?php echo $row['number']; ?>" class="error" required>

                                </div>

                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <div class="col-sm-10 mx-auto">
                                        <textarea name="address" class="form-control error" id="address" rows="2" cols="2" class="error" required><?php echo $row['address']; ?></textarea>
                                    </div>
                                </div>
                                <!-- <div class="mb-3"> -->
                                    <center><input class="submit,btn btn-primary rounded-3" id="submit" type="submit" name="submit" value="Update Details"></center>
                                <!-- </div> -->

                                <p id="p1"></p>

                            </form>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>