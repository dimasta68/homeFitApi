<?php
 
$response = array();

 
$connect = mysqli_connect("localhost", "homefit_now", "9PCVR%Jx", "homefit_now");
mysqli_query($connect, "SET NAMES utf8");
 
$result = mysqli_query($connect,"SELECT *FROM task ORDER BY lavel") or die(mysqli_error());
 
if (mysqli_num_rows($result) > 0) {
    $response["products"] = array();
 
    while ($row = mysqli_fetch_array($result)) {
        $product = array();
        $product["id"] = $row["id"];
        $product["cat"] = $row["cat"];
        $product["title_task"] = $row["title_task"];
        $product["desc_task"] = $row["desc_task"];
        $product["lavel"] = $row["lavel"];
        $product["inactive"] = $row["inactive"];
        $product["period"] = $row["period"];
         $product["lead_time"] = $row["lead_time"];
           $product["time"] = $row["time"];
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