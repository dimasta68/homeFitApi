<?php
 
$response = array();
 
 
$connect = mysqli_connect("localhost", "homefit_now", "9PCVR%Jx", "homefit_now");
mysqli_query($connect, "SET NAMES utf8");
 
if (isset($_GET["username"])) {
    $username = $_GET['username'];
  
	
    $result = mysqli_query($connect, "SELECT  * FROM launched WHERE user_name='$username'");
  
if (mysqli_num_rows($result) > 0) {
    $response["products"] = array();
 
    while ($row = mysqli_fetch_array($result)) {
        $product = array();
        $product["id"] = $row["id"];
        $product["task_id"] = $row["task_id"];
        $product["status"] = $row["status"];
        array_push($response["products"], $product);
    }
    $response["success"] = 1;
 
    echo json_encode($response,JSON_UNESCAPED_UNICODE);
} else {
    $response["success"] = 0;
    $response["message"] = "No products found";
 
    echo json_encode($response,JSON_UNESCAPED_UNICODE);
}
}else{
	   $response["success"] = 0;
    $response["message"] = "No products found fuckin found";
 
    echo json_encode($response,JSON_UNESCAPED_UNICODE);
}
?>