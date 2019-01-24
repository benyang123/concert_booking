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

    function fun0( n ) {
        createXMLHttpRequest();
        var url = "delete.php";
        xmlHttp.open( "POST", url, true );
        xmlHttp.setRequestHeader( 'Content-type', 'application/x-www-form-urlencoded' );
        xmlHttp.onreadystatechange = callback;
        xmlHttp.send( "name=" + n.name );
    }

    function callback() {
        if ( xmlHttp.readyState == 4 ) {
            if ( xmlHttp.status == 200 ) {
                alert( "删除成功" );

                window.location.replace( "index_n.php" )

            }
        }
    }
    function fun1(n)
    {
        post("revise.php",{test:n.name})
    }
    function post(URL, PARAMS) {
        var temp = document.createElement("form");
        temp.action = URL;
        temp.method = "post";
        temp.style.display = "none";
        for (var x in PARAMS) {
            var opt = document.createElement("textarea");
            opt.name = x;
            opt.value = PARAMS[x]; // alert(opt.name)
            temp.appendChild(opt);
        }
        document.body.appendChild(temp);
        temp.submit(); return temp;
    }

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
                    <a href="index.html" >home</a>
                </li>
                <li class="left">
                    <a href="#r">query</a>
                </li>
                <li class="left">
                    <a href="#">about</a>
                </li>
                <li id="logoTop">
                    <img title="点我回顶部！" data-am-smooth-scroll id="logoPic" src="./assets/pic/piano.jpg" alt="logo" class="am-img-thumbnail am-circle">
                </li>

                <li class="right">
                    <a href="index.html">administrator</a>
                </li>
            </ul>
        </nav>
    </div>
    <table border="1" align="center" width = "80%" class="try" >
        <tr><th>name</th><th>place</th><th>date</th><th>price</th><th>seat</th><th>remain</th><th>class</th><th>  </th></tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "") or die("数据库连接失败");
        mysqli_query($conn, "set names utf8");
        mysqli_select_db($conn, "concert");
        $sql = "select * from concerts";
        $res=mysqli_query($conn,$sql);
        $datarow = mysqli_num_rows($res);

        for($i=0;$i<$datarow;$i++){
            $sql_arr = mysqli_fetch_assoc($res);
            $place = $sql_arr['place'];
            $name = $sql_arr['name'];
            $date = $sql_arr['date'];
            $price = $sql_arr['price'];
            $seat = $sql_arr['seat'];
            $class = $sql_arr['class'];
            $remain = $sql_arr['remain'];
            echo "<tr><td>$name</td><td>$place</td><td>$date</td><td>$price</td><td>$seat</td><td>$remain</td><td>$class</td><td>";
            echo "<input type='button' value='delete' class='buy_button' name='$name' onclick='fun0(this)'>";
            echo "&nbsp;";
            echo  "<input type='button' name='$name' onClick='fun1(this)' value='revise' class='buy_button'>";
           echo" <form action='add.php' method='post' class='add'><input type='submit'  value='add' class='buy_button'></tr></form>";
        }
        mysqli_free_result( $res );
        mysqli_close( $conn );
        ?>

    </table>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/amazeui.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>