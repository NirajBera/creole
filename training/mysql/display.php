<?php
    require 'connect.php';
    $sql = "select * from user_form";
    $res=mysqli_query($conn,$sql);

    echo "<center><table border =1>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Number</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Delete</th>
            <tr>";

    if(mysqli_num_rows($res) > 0){

        while($row = mysqli_fetch_assoc($res)){
?>            
            <tr>
                    <td><?php echo  $row['id']; ?> </td>
                    <td><?php echo  $row['uname']; ?> </td>
                    <td><?php echo  $row['unumber']; ?> </td>
                    <td><?php echo  $row['uemail']; ?> </td>
                    <td><?php echo  $row['ugender']; ?> </td>
                    <td><?php echo  $row['uaddr']; ?> </td>
                    <td><a href="delete1.php?id=<?php echo $row['id']; ?>">Delete</a></td>


                </tr>
<?php                
        }

        echo "</table></center>";
    }else{
        echo "no record";
    }
   
?>