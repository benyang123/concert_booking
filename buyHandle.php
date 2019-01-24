<?php
header("content-type:text/html;charset=utf-8");
session_start();
$name = $_POST['name'];
$id=$_POST['id'];
$user=$_SESSION['user_name'];
include("./config.php");
$sql1="update concerts set remain=remain-1 where name='$name'";
$rs1=mysqli_query($link,$sql1);

include("./config.php");
$sql="INSERT INTO order_1(user,concert_name,time)
	VALUES ('$user','$name','$id')";

mysqli_query($link,$sql);



?>
