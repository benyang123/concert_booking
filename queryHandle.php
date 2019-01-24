
<?php
header("content-type:text/html;charset=utf-8");
if ($_POST['query_id'] != "" ) {
    $conn = mysqli_connect("localhost", "root", "") or die("数据库连接失败");
    mysqli_query($conn, "set names utf8");
    mysqli_select_db($conn, "concert");

    session_start();
    $query_name=$_SESSION['user_name'];

    $query_id = $_POST['query_id'];

    $sql = "select * from user where user_name = '$query_name'";
    $rs = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($rs);
    if ($num) {
        $row = mysqli_fetch_array($rs);
        if ($query_id === $row['ID']) {
//            echo "<script type='text/javascript'>search();</script>";



        } else {
            echo "<script language=\"javascript\">";
            echo "alert(\"uncorrect ID!\");";
            echo "location.href=\"query.php\"";
            echo "</script>";
            echo "<br>";
        }
    } else {
        echo "<script language=\"javascript\">";
        echo "alert(\"none！\");";
        echo "location.href=\"query.php\"";
        echo "</script>";
        echo "<br>";
    }
} else {
    echo "<script language=\"javascript\">";
    echo "alert(\"please input your id\");";
    echo "location.href=\"query.php\"";
    echo "</script>";
    echo "<br>";
}

?>