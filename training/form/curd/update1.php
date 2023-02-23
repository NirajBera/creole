<?php
     include 'connect.php';
     $id=$_GET['id'];
     $sql =" select * from crud where id = '$id'";
     $res=mysqli_query($conn,$sql);
     $row=mysqli_fetch_assoc($res);
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
    <script src='update1.js'></script>


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
    <center>
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <a class="navbar-brand"><b>CRUD</b></a>
                <form class="d-flex">
                    <button id="btn1" class="btn btn-primary rounded-3 "><a href="../login_signup/logout.php" id="a1">Sign Out</a></button>
                </form>
            </div>
        </nav>
       
        <div class="mb-3">
            <h3>Create User Form</h3>
        </div>

        <form method="POST" class="container border border-secondary border-3 rounded-3 w-50 text-center d-flex flex-column justify-content-center cmxform" id="vForm" action="">
       
        <input type="hidden" id="id" name="id" class="txtField" value="<?php echo $row['id']; ?>">
           
        <div class="mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <input id="name" class="form-control" name="name"  value="<?php echo $row['name']; ?>" required class="error">
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
                                <input type="radio" id="gender" name="gender" value="Female" <?php if($row['gender']=='Female'){echo "checked";}?>>Female
                            </label>
                        </div>
                        <div class="form-check form-check-inline  ">
                            <label class="radio-inline">
                                <input type="radio" id="gender" name="gender" value="Male" <?php if($row['gender']=='Male'){echo "checked";}?>>Male
                            </label>
                        </div>
                    </div>
                </div>
                <label id="gender-error" class="error" for="gender"></label>
            </div> 
          <br>
          <div class="mb-3">
                <label for="number" class="col-sm-2 col-form-label">Number</label>
                <input id="number" class="form-control" name="number" type="number"maxlength="10" minlength="10" value="<?php echo $row['number']; ?>" class="error" required>

            </div>

            <div class="mb-3">
                <p> <img width="50px" height="50px" src="../image/<?php echo $row['img']; ?>"></p> 
                <label for="image" class="form-label">Image</label>
                <div class="col-sm-10 mx-auto">
                    <input class="form-control" type="file" id="image" name="image" value="<?php echo $row['img'];?> " class="error" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <div class="col-sm-10 mx-auto">
                    <textarea name="address" class="form-control error" id="address" rows="5" cols="2" class="error" required><?php echo $row['address']; ?></textarea>
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