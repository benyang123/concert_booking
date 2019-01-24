<?php

header("content-type:text/html;charset=utf-8");
if ($_POST['name']!=""&&$_POST['password']!=""){
    $conn=mysqli_connect("localhost","root","") or die("数据库连接失败");
    mysqli_query($conn,"set names utf8");
    mysqli_select_db($conn,"concert");
    $user_name=addslashes(trim($_POST['name']));
    $password=md5(addslashes(trim($_POST['password'])));
    $sql="select * from user where user_name='{$user_name}'";
    $rs=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($rs);
    if($num){
        $row=mysqli_fetch_array($rs);
        if($password===$row['password']){
//            session_start();
            $_POST['name']=$user_name;
            echo "<script language=\"javascript\">";
            echo "alert(\"登录成功！\\n欢迎".$_POST['name']."\");";
            echo "location.href=\"index_n.php\"";
            echo "</script>";
        }else{
            echo "<script language=\"javascript\">";
            echo "alert(\"密码不正确！\");";
            echo "location.href=\"login.php\"";
            echo "</script>";
            echo "<br>";
        }
    }else{
        echo "<script language=\"javascript\">";
        echo "alert(\"用户不存在！\");";
        echo "location.href=\"login.php\"";
        echo "</script>";
        echo "<br>";
    }
}else{
    echo "<script language=\"javascript\">";
    echo "alert(\"用户名和密码不能为空！\");";
    echo "location.href=\"login.php\"";
    echo "</script>";
    echo "<br>";
}

?><?php
/**
 * Created by PhpStorm.
 * User: 87054
 * Date: 2018/7/3 0003
 * Time: 9:31
 */