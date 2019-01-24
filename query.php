

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
<script type="text/javascript" language="javascript">
    var xmlHttp;

    function createXMLHttpRequest() {
        //检查浏览器是否支持 XMLHttpRequest 对象
        if ( window.ActiveXObject ) {
            xmlHttp = new ActiveXObject( "Microsoft.XMLHTTP" );
        } else if ( window.XMLHttpRequest ) {
            xmlHttp = new XMLHttpRequest();
        }
    }

    function buy_js( n ) {
        createXMLHttpRequest();
        var url = "buyHandle.php";
        xmlHttp.open( "POST", url, true );
        xmlHttp.setRequestHeader( 'Content-type', 'application/x-www-form-urlencoded' );
        xmlHttp.onreadystatechange = callback;
        xmlHttp.send( "name=" + n.name+"&id="+ n.id );
    }
    function callback() {
        if ( xmlHttp.readyState == 4 ) {
            if ( xmlHttp.status == 200 ) {
                alert( "successful!" );

                window.location.replace( "index_adm.php" )

            }
        }
    }

    // function buy_js(n)
    // {
    //     post("buyHandle.php",{test:n.name test2:n.id})
    // }
    // function post(URL, PARAMS) {
    //     var temp = document.createElement("form");
    //     temp.action = URL;
    //     temp.method = "post";
    //     temp.style.display = "none";
    //     for (var x in PARAMS) {
    //         var opt = document.createElement("textarea");
    //         opt.name = x;
    //         opt.value = PARAMS[x]; // alert(opt.name)
    //         temp.appendChild(opt);
    //     }
    //     document.body.appendChild(temp);
    //     temp.submit(); return temp;
    // }
</script>
<body>
<div id="loading">
    <div id="loadingBox">
        <div id="loadingContent">
            <div class="object" id="objectFour"></div>
            <div class="object" id="objectThree"></div>
            <div class="object" id="objectTwo"></div>
            <div class="object" id="objectOne"></div>
        </div>
        <div id="wait">
            <h2>waiting...</h2>
        </div>
    </div>

</div>
</div>
<div class="source">
    <!--顶部栏 -->
    <div id="topBarPc" data-am-scrollspynav="{offsetTop: 1}">
        <nav class="scrollspy-nav" >
            <ul>
                <li class="left">
                    <a href="index.html" >Home</a>
                </li>
                <li class="left">
                    <a href="#">Query </a>
                </li>
                <li class="left">
                    <a href="#art">about</a>
                </li>
                <li id="logoTop">
                    <img title="点我回顶部！" data-am-smooth-scroll id="logoPic" src="./assets/pic/piano.jpg" alt="logo" class="am-img-thumbnail am-circle">
                </li>

                <li class="right">
                    <a href=""><?php session_start();
                        echo $_SESSION['user_name'];?></a>
                </li>
            </ul>
        </nav>
    </div>
    <form action="query.php" method="post" class="query_form">
<!--        <tr>-->
<!--            <td>Please input your name:</td>-->
<!--            <td><input type="text" name="query_name"  value=""/></td>-->
<!--        </tr>-->
<!--        <br>-->
        <tr>
            <td>Please input your ID:</td>
            <td><input type="text" name="query_id"  value=""/></td>
        </tr>
        <br>
        <br>
        <tr>
            <td><input type="submit" style="width:100px;" value="submit" class="buy_button"/></td>
        </tr>

    </form>

    <table border="1" align="center" width = "80%" class="try" >
        <tr><th>user</th><th>concert</th><th>date</th></tr>
    <?php
    if ( isset( $_POST[ 'query_id' ] )) {

        if ($_POST['query_id'] != "") {
            $conn = mysqli_connect("localhost", "root", "") or die("数据库连接失败");
            mysqli_query($conn, "set names utf8");
            mysqli_select_db($conn, "concert");

            $query_name = $_SESSION['user_name'];

            $query_id = $_POST['query_id'];

            $sql = "select * from user where user_name = '$query_name'";
            $rs = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($rs);
            if ($num) {
                $row = mysqli_fetch_array($rs);
                if ($query_id === $row['ID']) {

                    $conn = mysqli_connect("localhost", "root", "") or die("数据库连接失败");
                    mysqli_query($conn, "set names utf8");
                    mysqli_select_db($conn, "concert");
                    $sql = "select * from order_1 where user='$query_name'";
                    $res=mysqli_query($conn,$sql);
                    $datarow = mysqli_num_rows($res);

                    for($i=0;$i<$datarow;$i++){
                        $sql_arr = mysqli_fetch_assoc($res);
                        $user = $sql_arr['user'];
                        $concert = $sql_arr['concert_name'];
                        $date = $sql_arr['time'];
                        echo "<tr><td>$user</td><td>$concert</td><td>$date</td></tr>";
                    }
                    mysqli_free_result( $res );
                    mysqli_close( $conn );



                } else {
                    echo "<script language=\"javascript\">";
                    echo "alert(\"uncorrect ID!\");";
                    echo "</script>";
                    echo "<br>";
                }
            } else {
                echo "<script language=\"javascript\">";
                echo "alert(\"none！\");";
                echo "</script>";
                echo "<br>";
            }
        } else {
            echo "<script language=\"javascript\">";
            echo "alert(\"please input your id\");";
            echo "</script>";
            echo "<br>";
        }
    }
    ?>


    </table>


    <script src="./js/jquery.min.js"></script>
    <script src="./js/amazeui.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>


