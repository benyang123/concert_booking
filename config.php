<?php

$link = mysqli_connect("localhost", "root", "") or die("数据库连接失败");
mysqli_query($link, "set names utf8");
mysqli_select_db($link, "concert");
?>



