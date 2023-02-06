<?php
    require 'connect.php';
    $sql = "select * from user_form";
    $res=mysqli_query($conn,$sql);

    echo "<center><table border =1>
            <tr>
                <th>id</th>
                <th>Uname</th>
                <th>Unumber</th>
                <th>Uemail</th>
                <th>Ugender</th>
                <th>Uaddress</th>
            <tr>";

    if(mysqli_num_rows($res) > 0){

        while($row = mysqli_fetch_assoc($res)){
            echo "<tr>
                    <td>". $row['id'] ."</td>
                    <td>". $row['uname'] ."</td>
                    <td>" . $row['unumber'] ."</td>
                    <td>" . $row['uemail'] . "</td>
                    <td>" . $row['ugender'] . "</td>
                    <td>" . $row['uaddr'] . "</td>
                </tr>";
        }

        echo "</table></center>";
    }else{
        echo "no record";
    }
   
?>