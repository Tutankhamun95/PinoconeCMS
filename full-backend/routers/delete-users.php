<?php
include '../includes/connect.php';

function number($length) {
    $result = '';

    for($i = 0; $i < $length; $i++) {
        $result .= mt_rand(0, 9);
    }

    return $result;
}

if(isset($_POST['delete']) and is_numeric($_POST['delete']))
{
  
   $delete = $_POST['delete']
   $sql = "DELETE FROM `users` where `id` = '$delete'"; 


}
header("location: ../users.php");
?>