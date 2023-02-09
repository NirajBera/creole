<!DOCTYPE html>
<html>

<head>
   
</head>

<body>

    <?php
    $q = intval($_GET['q']);

    $con = mysqli_connect("localhost","root","","mydb");
    if (!$con) {
        die('Could not connect: ' . mysqli_connect_error());
    }

   
    $sql = "SELECT * FROM test WHERE id =  $q ";
    
    $result = mysqli_query($con, $sql);

    echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['FirstName'] . "</td>";
        echo "<td>" . $row['LastName'] . "</td>";
        echo "<td>" . $row['Age'] . "</td>";
        echo "<td>" . $row['Hometown'] . "</td>";
        echo "<td>" . $row['Job'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
    ?>
</body>

</html>