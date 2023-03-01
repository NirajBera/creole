<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Credentials:true');
header('Access-Control-Allow-Methods:PUT');
header('Access-Control-Allow-Headers:*');
header('Content-Type:application/json');


include 'db.php';
$id=trim($_SERVER['PATH_INFO'],'/');
$data = json_decode(file_get_contents("php://input"),true);
$name=$data['name'];
$email=$data['email'];

$sql="select id from t_api where id=$id";
$res=mysqli_query($conn,$sql);
$result=mysqli_num_rows($res);
$sql1="update t_api set name='$name',email='$email' where id=$id";
if($result>0){
    if($res1=mysqli_query($conn,$sql1)){
     $status='true';
     $data="update sucessfully";
     echo json_encode(["status"=>$status,"data"=>$data]);
    }else{
     $status='false';
     $data="not update";
     echo json_encode(["status"=>$status,"data"=>$data]);
 
    }
     
     
 }else{
     $status='false';
     $data="not found this id data";
     echo json_encode(["status"=>$status,"data"=>$data]);
 }
?>