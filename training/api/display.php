<?php
    $url="http://localhost/api/index.php?token=dftip";
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $result=curl_exec(($ch));
    curl_close($ch);
    $result=json_decode($result,true);
    // echo"<pre>";
    // print_r($result);
    // // die();
?>
            <?php
            if($result['code']=='5'){
                ?>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>	
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach($result['data'] as $list){
                            ?>
                            <tr>
                                <td><?php echo $list['id']?></td>
                                <td><?php echo $list['name']?></a></td>
                                <td><?php echo $list['email']?></td>
                                <td>
                                <a href="form.php?id=<?php echo $list['id']?>" class="edit" title="Edit">update</a>
                                <a href="delete.php?id=<?php echo $list['id']?>" class="delete" title="Delete" >delete</a>
                                </td>
                            </tr>
                            <?php        
                        }
                        ?>
                    </tbody>
                </table>
                <?php
            }else{
                echo $result['data'];
            }
            ?>