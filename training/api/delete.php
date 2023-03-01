<?php

header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Credentials:true');
header('Access-Control-Allow-Methods:DELETE');
header('Access-Control-Allow-Headers:*');
header('Content-Type:application/json');


include 'db.php';
$id=trim($_SERVER['PATH_INFO'],'/');


$sql="select id from t_api where id=$id";
$res=mysqli_query($conn,$sql);
$result=mysqli_num_rows($res);
$sql1="delete from t_api where id=$id";
if($result>0){
   if($res1=mysqli_query($conn,$sql1)){
    $status='true';
    $data="delete sucessfully";
    echo json_encode(["status"=>$status,"data"=>$data]);
   }else{
    $status='false';
    $data="not delated";
    echo json_encode(["status"=>$status,"data"=>$data]);

   }
    
    
}else{
    $status='false';
    $data="not found this id data";
    echo json_encode(["status"=>$status,"data"=>$data]);
}


    
?>