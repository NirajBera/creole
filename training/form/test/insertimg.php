<!DOCTYPE html>
<html>
   
<head>
    <title>Image Upload</title>
</head>
   
<body>
    <div id="content">
        <form method="POST" action="#" enctype="multipart/form-data">
            <div class="form-group">
                <input class="form-control" type="number" name="id">
                <input class="form-control" type="file" name="uploadfile" value="" >
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
            </div>
        </form>
    </div>
    
</body>
 
</html>
<?php
error_reporting(0);
 
$msg = "";
 
// If upload button is clicked ...
if (isset($_POST['upload'])) {
   
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../image/".$filename;
 
    $db = mysqli_connect("localhost", "root", "", "mydb");
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO crud (img) VALUES ('$filename')";
 
    // Execute query
    if(mysqli_query($db, $sql)){
        echo "insert";
    }else{
        echo "not insert";
    }
 
   // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
?>