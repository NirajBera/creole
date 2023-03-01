<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Credentials:true');
header('Access-Control-Allow-Methods:GET,POST,OPTIONS');
header('Access-Control-Allow-Headers:*');
header('Content-Type:application/json');


include 'db.php';
$data = json_decode(file_get_contents("php://input"),true);
$name=$data['name'];
$email=$data['email'];
$password=password_hash($data['password'],PASSWORD_BCRYPT); 

$sql="insert into t_api (name,email,password) values ('$name','$email','$password')";
$res=mysqli_query($conn,$sql);

if($res){
    $status='true';
    $data="insertd sucessfully";
    echo json_encode(["status"=>$status,"data"=>$data]);
    
}else{
    $status='false';
    $data="not insertd";
    echo json_encode(["status"=>$status,"data"=>$data]);
}

?>