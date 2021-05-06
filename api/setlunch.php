<?php
 
$response = array();
 
 
$connect = mysqli_connect("localhost", "homefit_now", "9PCVR%Jx", "homefit_now");
mysqli_query($connect, "SET NAMES utf8");
 
if (isset($_GET["username"])&& isset($_GET['id'])) {
    $username = $_GET['username'];
    $id = $_GET['id'];

    $result = mysqli_query($connect, "INSERT launched SET task_id = '$id', user_name= '$username', status=1 ");
 
    if ($result) {
        // successfully updated
        $response["success"] = 1;
        $response["message"] = "Product successfully updated.";
 
        echo json_encode($response,JSON_UNESCAPED_UNICODE);
    } else {
 
    }
} else {
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    echo json_encode($response,JSON_UNESCAPED_UNICODE);
}
?>