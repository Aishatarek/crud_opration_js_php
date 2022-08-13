<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
include('../functions.php');
$records = $Users->getData();
$itemCount = $records->num_rows;
if($itemCount > 0){
$employeeArr = array();
while ($row = $records->fetch_assoc())
{
array_push($employeeArr, $row);
}
echo json_encode($employeeArr);
}
else{
http_response_code(404);
echo json_encode(
array("message" => "No record found.")
);
}
