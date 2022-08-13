<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
include('../functions.php');

$input=file_get_contents("php://input");
$decode=json_decode($input,true);

$id=$decode["id"];
$name = $decode["name"];
$email = $decode["email"];
$designation = $decode["designation"];

$run_sql=$Users->updateUser($id, $name, $email, $designation);

if($run_sql){
    echo json_encode(["success"=>true,"message"=>"Student Update Succcessfully"]);
}else{
    echo json_encode(["success"=>false,"message"=>"Server Problem"]);
}

?>