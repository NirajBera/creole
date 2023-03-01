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
include 'phpjwt/src/CachedKeySet.php';
include 'phpjwt/src/Key.php';

use Firebase\JWT\JWT;

use Firebase\JWT\Key;
$data = json_decode(file_get_contents("php://input"), true);

// $token = trim($data['jwt']);
// //$token = substr($authcode,7);
$headers =getallheaders();
$authcode =trim($headers['Authorization']);
$token =substr($authcode,7);

$key = "testkey123";
try {
    $decoded = JWT::decode($token, new Key($key, 'HS256'));
    
    $msg = ['msg' => 'Allow Access', 'status' => 200, 'data'=>$decoded];
        echo json_encode($msg);
    
} catch (Exception $e) {
    $msg = ['msg' => 'Access Denied', 'status' => 400, 'data'=>$e->getMessage()];
    echo json_encode($msg);
}


?>




