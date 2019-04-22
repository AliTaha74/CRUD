<?php
include_once 'cnn.php';

session_start();
$id = $_SESSION['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];

$sqledite = "update employees set name ='$name' , email = '$email' , address = '$address' , phone = '$phone' where id = '$id';";
$result = mysqli_query($conn, $sqledite);
header("Location:sss.php?edite=success");
