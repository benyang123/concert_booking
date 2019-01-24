<?php
$test = $_POST[ 'test' ];
include("./config.php");
//建立数据连接
$sql="select * from concerts where name='$test'";
setcookie('No1',$test);
mysqli_select_db($link, 'concert')
or die("打开数据库失败: " . mysqli_error($link));

$result = mysqli_query($link, $sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($link));
    exit();
}
$row = mysqli_fetch_array( $result );
/* //关闭数据连接
  mysqli_close($link);*/

?>


<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <link rel="shortcut icon" href="./assets/pic/LOGO.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/amazeui.min.css">
    <link rel="stylesheet" href="./assets/css/timeline.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/show.css">

    <script src="./js/show.js"></script>


    <title>global concert</title>

</head>
<body>
<!--loading动画-->
<!--<div id="loading">-->
<!--    <div id="loadingBox">-->
<!--        <div id="loadingContent">-->
<!--            <div class="object" id="objectFour"></div>-->
<!--            <div class="object" id="objectThree"></div>-->
<!--            <div class="object" id="objectTwo"></div>-->
<!--            <div class="object" id="objectOne"></div>-->
<!--        </div>-->
<!--        <div id="wait">-->
<!--            <h2>waiting...</h2>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</div>-->
<!--</div>-->

<div class="source">
    <!--顶部栏 -->
    <div id="topBarPc" data-am-scrollspynav="{offsetTop: 1}">
        <nav class="scrollspy-nav" >
            <ul>
                <li class="left">
                    <a href="#" onclick="setTable2()">introduce</a>
                </li>
                <li class="left">
                    <a href="#reporter">Jay Chou</a>
                </li>
                <li class="left">
                    <a href="#art">Eason</a>
                </li>
                <li id="logoTop">
                    <img title="点我回顶部！" data-am-smooth-scroll id="logoPic" src="./assets/pic/piano.jpg" alt="logo" class="am-img-thumbnail am-circle">
                </li>

                <li class="right">
                    <a href="index_n.php">administrator</a>
                </li>
            </ul>
        </nav>
    </div>
    <table border="1" align="center" width = "80%" class="try" >
        <form action="update.php" method="post">
            <tr>
                <td>name</td>
                <td><input type="text" name="re_name"  value="<?php echo $row['name'];  ?>"/></td>
            </tr>
            <tr>
                <td>place</td>
                <td><input type="text" name="re_place"  value="<?php echo $row['place'];  ?>"/></td>
            </tr>
            <tr>
                <td>date</td>
                <td><input type="text" name="re_date" value="<?php echo $row['date'];  ?>" /></td>
            </tr>
            <tr>
                <td>price</td>
                <td><input type="text" name="re_price" value="<?php echo $row['price'];  ?>" /></td>
            </tr>
            <tr>
                <td>seat</td>
                <td><input type="text" name="re_seat" value="<?php echo $row['seat'];  ?>"/></td>
            </tr>
            <tr>
                <td>seat</td>
                <td><input type="text" name="re_remain" value="<?php echo $row['remain'];  ?>"/></td>
            </tr>
            <tr>
                <td>class</td>
                <td><input type="text" name="re_class" value="<?php echo $row['class'];  ?>"/></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" style="width:100px;" value="submit" class="buy_button"/></td>
            </tr>

        </form>

    </table>


    <script src="./js/jquery.min.js"></script>
    <script src="./js/amazeui.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>