<?php

include("./config.php");
$sql="INSERT INTO concerts (name,place,date,price,seat,remain,class)
	VALUES ('$_POST[add_name]','$_POST[add_place]','$_POST[add_date]','$_POST[add_price]','$_POST[add_seat]','$_POST[add_remain]','$_POST[add_class]')";

mysqli_select_db($link, 'concert')
or die("打开数据库失败: " . mysqli_error($link));
$result = mysqli_query($link, $sql);
mysqli_query($link,$sql);
echo '<script type="text/javascript"> alert("successful!"); window.location='.'\''.'index_n.php'.'\''.'</script>';
?>