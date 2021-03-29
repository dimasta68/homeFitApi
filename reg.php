<?php
 
$response = array();

 
$connect = mysqli_connect("localhost", "homefit_now", "9PCVR%Jx", "homefit_now");
mysqli_query($connect, "SET NAMES utf8");
 
$result = mysqli_query($connect,"SELECT *FROM interview") or die(mysqli_error());
 
if (mysqli_num_rows($result) > 0) {
    $response["products"] = array();
 
    while ($row = mysqli_fetch_array($result)) {
        $product = array();
        $product["id"] = $row["id"];
        $product["title_interview"] = $row["title_interview"];
        $product["answer"] = $row["answer"];
        array_push($response["products"], $product);
    }
    $response["success"] = 1;
 
    echo json_encode($response,JSON_UNESCAPED_UNICODE);
} else {
    $response["success"] = 0;
    $response["message"] = "No products found";
 
    echo json_encode($response,JSON_UNESCAPED_UNICODE);
}
?>