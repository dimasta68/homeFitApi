<?php
 
$response = array();
 
 
$connect = mysqli_connect("localhost", "homefit_now", "9PCVR%Jx", "homefit_now");
mysqli_query($connect, "SET NAMES utf8");
 
if (isset($_GET["username"])&& isset($_GET['data'])&& isset($_GET['status'])&& isset($_GET['question'])) {
    $username = $_GET['username'];
    $data = $_GET['data'];
    $status = $_GET['status'];
        $question = $_GET['question'];
           $result = mysqli_query($connect, "UPDATE report SET data = '$data',  status='$status',question='$question' WHERE user_name='$username'");
  // $result = mysqli_query($connect, "INSERT report SET data = '$data', user_name= '$username', status='$status',question='$question'");
//    $result =  mysqli_query($connect, "SELECT * FROM `report` WHERE `user_name`='$username'");UPDATE
    if ($result) {
  //       mysqli_query($connect, "UPDATE `report` SET `data`='data',`status`='$status' WHERE `user_name`='$username'");
        // successfully updated
        $response["success"] = 1;
        $response["message"] = "Product successfully updated.";
 
        echo json_encode($response,JSON_UNESCAPED_UNICODE);
    } elseif($result==null){
           mysqli_query($connect, "INSERT 'report' SET `data`='data', 'user_name'= '$user_name', status='1'");
     $response["success"] = 1;
        $response["message"] = "Product successfully ISERTED.";
    }
} else {
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    echo json_encode($response,JSON_UNESCAPED_UNICODE);
}
?>