<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost","root","123456","food");

// food_item
$result = $conn->query("SELECT * FROM menu_item");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"id":"'  . $rs["menu_id"] . '",';
    $outp .= '"name":"'   . $rs["menu_name"]        . '",';
    $outp .= '"description":"'. $rs["menu_description"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);

?>