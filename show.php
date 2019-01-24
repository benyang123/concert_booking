
<?php

header("content-Type: text/html; charset=utf-8");
$connection = mysqli_connect("localhost", "root", "") or die("数据库连接失败");
mysqli_query($connection, "set names utf8");
mysqli_select_db($connection, "concert");
$sql = "select * from order_1 ";
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result)) {
    $video=array();
    while($row=mysqli_fetch_array($result,MYSQLI_NUM))
        $video[]=$row;
    echo json_encode($video);
} else {
    echo "<script language=\"javascript\">";
    echo "alert(\"none\");";
    echo "location.href=\"index_ad.php\"";
    echo "</script>";
}
mysqli_close($connection);
?>