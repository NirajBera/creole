<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Credentials:true');
header('Access-Control-Allow-Methods:GET, POST, OPTIONS');
header('Access-Control-Allow-Headers:*');
header('Content-Type: application/json');

include 'db.php';

include 'phpjwt/src/BeforeValidException.php';
include 'phpjwt/src/ExpiredException.php';
include 'phpjwt/src/JWK.php';
include 'phpjwt/src/JWT.php';
include 'phpjwt/src/SignatureInvalidException.php';
use Firebase\JWT\JWT;

$data = json_decode(file_get_contents("php://input"), true);

$email=$data['email'];
$password=$data['password'];

$sql = "SELECT * FROM t_api WHERE email = '$email'";
$res = mysqli_query($conn, $sql);
 $row = mysqli_num_rows($res);
 $row = mysqli_fetch_assoc($res);
$arr = [];
if($row > 0){
   $verify= password_verify($password,$row['password']);
   $privateKey="testkey123";
   $payload = array(
    "id" => $row['id'],
    "name" => $row['name'],
    "email" => $row['email'],
    "exp"=>time()+120
     );
        if($verify){
            $jwt = JWT::encode($payload, $privateKey, 'HS256');
            $arr['name']=$row['name'];
            $arr['email']=$row['email'];
            $arr['jwt']=$jwt; 
 
            $msg = ['msg' => 'login Successfully', 'status' => 200, 'data'=>$arr];
        }else{
            $msg = ['msg' => 'login fail', 'status' => 400, 'data'=>null];
        }
        
       
    echo json_encode($msg);
}
else{
    $msg = ['msg' => 'No Record Found', 'status' => 400];
    echo json_encode($msg);
}
?>