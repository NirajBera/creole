<?php
include('../login_signup/session.php');
include('../login_signup/connect.php');
//session_start();
$name = $_SESSION['name'];
$email = $_SESSION['email'];

$sql = "select crud.* from crud,user where role !='admin' and crud.email=user.email";
$res = mysqli_query($conn, $sql);
$sql1="select role from user where email = '$email'";
$res1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($res1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='jquery-3.6.3.js'></script>
    <script src='jquery.validate.min.js'></script>
    <!-- <script>
        window.history.forward();
    </script> -->
    <title>welcome</title>
    <style>
        #a1 {
            text-decoration: none;
            color: white;
        }

        #a1:hover {
            text-decoration: none;
            color: white;
        }

        #msg {
            color: red;
        }
    </style>
    <?php
        if($row1['role']=="user"){

    ?>
        <script>
            $(document).ready(function(){
                $(".role").hide();
            })
        </script>
    <?php
        }
    ?>
    <script>
        $(document).ready(function() {
            $("#surch").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#mtable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });



    </script>
</head>

<body>

    <center>
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <a class="navbar-brand"><b>CRUD</b></a>


                <form class="d-flex">
                    <input class=" me-2" id="surch" type="search" placeholder="Search" aria-label="Search" style="border-radius: 5px; ;">
                    
                    <div class="dropdown">
                    <button id="btn1" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Profile</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="updateprofile.php">Profile</a></li>
                            <li><a class="dropdown-item" href="../login_signup/logout.php">Log Out</a></li>
                        </ul>
                    </div>
                    &nbsp;
                    <button id="btn1" class="btn btn-primary rounded-3 role "><a href="create/create.php" id="a1">create user</a></button>
                </form>
            </div>
        </nav>
        <p id="msg"><?php
                    if (isset($_SESSION["msg"])) {
                        echo $_SESSION["msg"];
                        unset($_SESSION["msg"]);
                    }

                    ?></p>
        <br>
        <h1>User List</h1>

        <table class="table table-striped table-hover container table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Number</th>
                    <th scope="col">Image</th>
                    <th scope="col">Address</th>
                    <th scope="col" colspan="2" class="role">
                        <center>Action</center>
                    </th>

                </tr>
            </thead>
            <tbody id="mtable">
                <?php
                if (mysqli_num_rows($res) > 0) {

                    while ($row = mysqli_fetch_assoc($res)) {

                        echo '<tr>
                            <td style ="padding-top:27px;">' . $row["id"] . '</td>
                            <td style ="padding-top:27px;">' . $row["name"] . '</td>
                            <td style ="padding-top:27px;">' . $row["email"] . '</td>
                            <td style ="padding-top:27px;">' . $row["gender"] . '</td>
                            <td style ="padding-top:27px;">' . $row["number"] . '</td>' ?>
                        <td> <img width="50px" height="50px" src="../image/<?php echo $row['id']."/".$row['img']; ?>"> </td>
                        <?php
                        echo '<td style ="padding-top:27px;">' . $row["address"] . '</td> ' ?>


                        <td class="role">
                            <center><a href="update1.php?id=<?php echo $row["id"]; ?>" id="a1"><button class="btn btn-primary" id="dbtn">Update</button> </a>&nbsp;
                                &nbsp;<a href="delete1.php?id=<?php echo $row["id"]; ?>" id="a1"><button class="btn btn-danger">Delete</button></a></center>
                        </td>
                        <?php
                        echo " </tr>";
                        ?>
                <?php
                    }
                } else {
                    echo "no record";
                }

                ?>
            </tbody>
        </table>
        </table>

    </center>

</body>

</html>