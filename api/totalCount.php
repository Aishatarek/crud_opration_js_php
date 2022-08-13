<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
include('../functions.php');
$run_sql=$Users->getData();
$result=mysqli_num_rows($run_sql);

echo json_encode($result);


?>