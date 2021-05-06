<?php
 
$response = array();
 
 
$connect = mysqli_connect("localhost", "homefit_now", "9PCVR%Jx", "homefit_now");
mysqli_query($connect, "SET NAMES utf8");
 
if (isset($_GET["username"])&& isset($_GET['answer'])) {
    $username = $_GET['username'];
    $answer = $_GET['answer'];

	
    $result = mysqli_query($connect, "INSERT answer_interview SET answer = '$answer' ,username= '$username' ");
    $result = mysqli_query($connect, "INSERT report SET user_name = '$username' ,status= 'выполенно 0 из 0'");
 
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