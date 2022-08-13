<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
include('../functions.php');
if(isset($_GET["id"])){
$id=$_GET["id"];
$run_sql=$Users->getUser($id);
$output=[];
if($run_sql->num_rows > 0){
    while($row=mysqli_fetch_assoc($run_sql)){
        $output[]=$row;
    }
}else{
    $output["empty"]="empty";
}
echo json_encode($output);
}
