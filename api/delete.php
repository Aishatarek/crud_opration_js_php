<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
include('../functions.php');
$id=$_GET["id"];
$query=$Users->deleteUser($id);
if($query){
    echo json_encode(["success"=>true,"message"=>"Student Delete Succcessfully"]);
}else{
    echo json_encode(["success"=>false,"message"=>"Server Problem"]);
}
