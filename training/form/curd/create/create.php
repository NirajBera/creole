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
    <script src='create.js'></script>


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
    </style>
</head>

<body>

    <?php



    // $name = $email = $phone = $url = $image = $gender = "";
    // $nameErr = $emailErr = $phoneErr = $urlErr = $imageErr = $genderErr = "";

    // if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //     if (empty($_POST["name"])) {
    //         $nameErr = "this field is required please enter name";
    //     } else {

    //         if (!preg_match("/^[a-zA-Z-']*$/", $name = $_POST["name"])) {
    //             $nameErr = "Only letters allowed";
    //             $name = "";
    //         } else {
    //             $name = test_input($_POST["name"]);
    //         }
    //     }

    //     if (empty($_POST["email"])) {
    //         $emailErr = "this field is required please enter email";
    //     } else {
    //         if (!filter_var($email = $_POST["email"], FILTER_VALIDATE_EMAIL)) {
    //             $emailErr = "email is not proper format";
    //             $email = "";
    //         } else {
    //             $email = test_input($_POST["email"]);
    //         }
    //     }

    //     if (empty($_POST["phone"])) {
    //         $phone = "";
    //     } else {
    //         $phone = test_input($_POST["phone"]);
    //     }

    //     if (empty($_POST["url"])) {
    //         $url = "";
    //     } else {
    //         if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $url = $_POST["url"])) {
    //             $urlErr = "enter valid url";
    //             $url = "";
    //         } else {
    //             $url = test_input($_POST["url"]);
    //         }
    //     }


    //     if (empty($_POST["gender"])) {
    //         $genderErr = "this field is required please enter gender";
    //     } else {
    //         $gender = test_input($_POST["gender"]);
    //     }

    //     if (empty($_POST["image"])) {
    //         $passwordErr = "this field is required please enter image";
    //     } else {
    //         $password = test_input($_POST["image"]);
    //     }
    // }

    // function test_input($data)
    // {
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;
    // }


    ?>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"><b>CRUD</b></a>
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../Welcome.php">Welcome</a>
        </li>
      </ul>
      <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
      &nbsp;
      <form class="d-flex">
                <button id="btn1" class="btn btn-primary rounded-3 "><a href="../../login_signup/logout.php" id="a1">Sign Out</a></button>
            </form>
    </div>
  </div>
</nav>
    <center>
        <br>
        <div class="mb-3">
            <h3>Create User Form</h3>
        </div>

        <form method="POST" class="container border border-secondary border-3 rounded-3 w-50 text-center d-flex flex-column justify-content-center cmxform" id="vForm" action="">

            <div class="mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <input id="name" class="form-control" name="name" class="error">
                <!-- <span class="error">* <?php //echo $nameErr; 
                                            ?></span> -->
            </div>

            <div class="mb-3">
                <label for="email" class="col-sm-2 col-form-label">E-Mail</label>
                <input id="email" class="form-control" name="email" type="email" class="error">
                <!-- <span class="error">* <?php //echo $emailErr; 
                                            ?></span> -->

            </div>

            <div class="form-group">
                <label class="control-label col-sm-3">Gender</label>

                <div class="col-sm-12 justify-content-center">
                    <div class="justify-content-center">
                        <div class="form-check form-check-inline  ">
                            <label class="radio-inline">
                                <input type="radio" id="gender" name="gender" value="Female">Female
                            </label>
                        </div>
                        <div class="form-check form-check-inline  ">
                            <label class="radio-inline">
                                <input type="radio" id="gender" name="gender" value="Male">Male
                            </label>
                        </div>
                    </div>
                </div>
                <label id="gender-error" class="error" for="gender"></label>
            </div>
            <br>
            <div class="mb-3">
                <label for="number" class="col-sm-2 col-form-label">Number</label>
                <input id="number" class="form-control" name="number" type="number" maxlength="10" minlength="10" class="error">
                <!-- <span class="error"><?php //echo $phoneErr; 
                                            ?></span> -->
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <div class="col-sm-10 mx-auto">
                    <input class="form-control" type="file" id="image" name="image" class="error">
                </div>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <div class="col-sm-10 mx-auto">
                    <textarea name="address" class="form-control error" id="address" rows="5" cols="2" class="error"></textarea>
                </div>
            </div>


            <div class="mb-3">
                <center><input class="submit,btn btn-primary rounded-3" id="submit" type="submit" name="submit" value="submit"></center>
            </div>

            <p id="p1"></p>

        </form>
    </center>

</body>

</html>