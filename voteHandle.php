<?php
	header("content-type:text/html;charset=utf-8");
	$conn=mysqli_connect("localhost","root","") or die("数据库连接失败");
	mysqli_select_db($conn,"mytest");
	mysqli_query($conn,"set names utf8");
	session_start();
	$name=$_SESSION['name'];
	$vote=$_POST['vote_id']; 
	$sql="select * from user where name='$name'";
	$query=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($query);
	if($rs['vote']==1)
	{
		echo "<script type=\"text/javascript\">";
		echo "alert(\"您已投过票！\");";
		echo "location.href=\"vote.php\"";
		echo "</script>";
	}
	else{		
		$conn=mysqli_connect("localhost","root","") or die("数据库连接失败");
		$vote=$_POST['vote_id'];
		$name=$_SESSION['name'];
		mysqli_select_db($conn,"mytest");
		mysqli_query($conn,"set names utf8");
        $sql1="update voting set num=num+1,name=concat('$name,',name) where vote_id=$vote";
		$rs1=mysqli_query($conn,$sql1);
		if($rs1)
		{
			$conn=mysqli_connect("localhost","root","") or die("数据库连接失败");
			mysqli_select_db($conn,"mytest");
			mysqli_query($conn,"set names utf8");
			$sql2="update user set vote=1 where name='$name'";
			$rs2=mysqli_query($conn,$sql2);
			if($rs2){
				echo "<script type=\"text/javascript\">";
				echo "alert(\"添加投票成功！\");";
				echo "location.href=\"vote.php\"";
				echo "</script>";
			}
			else{
				echo "<script type=\"text/javascript\">";
				echo "alert(\"添加投票失败！\");";
				echo "location.href=\"vote.php\"";
				echo "</script>";
			}	
		}
		else{
			echo "<script type=\"text/javascript\">";
			echo "alert(\"添加投票失败！\");";
			echo "location.href=\"vote.php\"";
			echo "</script>";
		}
	}
?>