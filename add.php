
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
        <form action="addHandle.php" method="post">
            <tr>
                <td>name</td>
                <td><input type="text" name="add_name"  value=""/></td>
            </tr>
            <tr>
                <td>place</td>
                <td><input type="text" name="add_place"  value=""/></td>
            </tr>
            <tr>
                <td>date</td>
                <td><input type="text" name="add_date" value="" /></td>
            </tr>
            <tr>
                <td>price</td>
                <td><input type="text" name="add_price" value="" /></td>
            </tr>
            <tr>
                <td>seat</td>
                <td><input type="text" name="add_seat" value=""/></td>
            </tr>
            <tr>
                <td>remain</td>
                <td><input type="text" name="add_remain" value=""/></td>
            </tr>
            <tr>
                <td>class</td>
                <td><input type="text" name="add_class" value=""/></td>
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