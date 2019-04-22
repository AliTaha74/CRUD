<?php
include_once 'cnn.php';						
$id    = $_GET['id']; 

$sqldelete = "delete from employees where id = '$id';";
 $result = mysqli_query($conn, $sqldelete);
header("Location:sss.php?delete=success"); 

