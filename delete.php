<?php
header("Content-type: text/html; charset=utf-8");
//if (isset($_POST['No']))
//{
//    $name=$_POST['No'];
//}
     $name = $_POST['name'];
//$name = 'qac';
$conn = mysqli_connect("localhost", "root", "") or die("数据库连接失败");
mysqli_query($conn, "set names utf8");
mysqli_select_db($conn, "concert");
$sql = "DELETE  FROM concerts Where name= '$name'" ;
$res=mysqli_query($conn,$sql);
if($res)
{
//跳转页面
    header("index_n.php");  //删除成功，则跳转回显示页面
}
?>
