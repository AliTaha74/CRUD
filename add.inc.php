<?php
include_once 'cnn.php';

$name    = $_POST['addname'];
$email   = $_POST['addemail'];
$address = $_POST['addaddress'];
$phone   = $_POST['addphone'];

$sqlcheck = "select * from employees where email = '$email' OR phone = '$phone';";
$sqlch = mysqli_query($conn, $sqlcheck);
$rowsnum = mysqli_num_rows($sqlch);
if($rowsnum >0 )
{
    header("Location:sss.php?add=fail");
}
else
{
$sqlinsert = "insert into employees (name,email,address,phone) values ('$name', '$email', '$address', '$phone');";
$result = mysqli_query($conn, $sqlinsert);
header("Location:sss.php?add=success");
}
