<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost","root","123456","food");

// food_item
$result = $conn->query("SELECT `menu`.`menu_id`,`menu`.`food_id`,`food_item`.`name`,`menu_item`.`menu_name` FROM menu
LEFT JOIN `food`.`menu_item` ON `menu`.`menu_id` = `menu_item`.`menu_id` 
LEFT JOIN `food`.`food_item` ON `menu`.`food_id` = `food_item`.`id`");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"id":"'  . $rs["menu_id"] . '",';
    $outp .= '"name":"'   . $rs["menu_name"]        . '",';
    $outp .= '"food_id":"'   . $rs["food_id"]        . '",';
    $outp .= '"food_name":"'. $rs["name"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);

?>