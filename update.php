<?php
include("./config.php");

$No=$_COOKIE['No1'];
//$No=4;
//获取表单数据
$name=$_POST["re_name"];
$place = $_POST[ "re_place" ];
$date = $_POST[ "re_date" ];
$price = $_POST[ "re_price" ];
$seat = $_POST[ "re_seat" ];
$class = $_POST[ "re_class" ];
$remain = $_POST[ "re_remain" ];

$sql="select * from concerts where name= $No";
mysqli_select_db($link, 'concert')
or die("打开数据库失败: " . mysqli_error($link));
$result = mysqli_query($link, $sql);
//$row=mysqli_fetch_assoc($result);


$sql="UPDATE concerts SET name='$name',place='$place',date='$date',price='$price',seat='$seat',remain='$remain',class='$class' WHERE name='$No'";

mysqli_select_db($link, 'concert')
or die("打开数据库失败: " . mysqli_error($link));
$result = mysqli_query($link, $sql);
//关闭数据连接	s
mysqli_close( $link );
setcookie("No1");
echo '<script type="text/javascript"> alert("successful!"); window.location='.'\''.'index_n.php'.'\''.'</script>';
?>
