<!DOCTYPE html>
<html>
<head>
   <title>global concert</title>
   <meta charset="utf8">
   <link rel="shortcut icon" href="assets/pic/pic2.png" type="image/x-icon">
   <link href="assets/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="assets/css/css.css">
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function adm()
        {
            document.form1.action="loginHandle.php";
        }
        function use()
        {
            document.form1.action="loginHandle_ad.php";
        }

    </script>

</head>
<body>
   </audio>
   <div class="login">
      <br/>
      <div style="text-align:center">
         <form class="form-inline" role="form"  method="post" name="form1" >
             &nbsp;&nbsp;<span class="glyphicon glyphicon-user"></span>
         <input type="text" name="name" class="form-control" placeholder="name"><br/><br/>
             &nbsp;&nbsp;<span class="glyphicon glyphicon-lock"></span>
         <input type="password" name="password" class="form-control" placeholder="password"><br/>

         <div style="margin-top:35px">
            <table>
               <td>
                  <tr><input type="submit" name="login" value="user" class="button" onclick="adm()" /></form></tr>
              <tr><input type="submit" name="login_ad" value="administrator" class="button" onclick="use()" /></form></tr>
<!--                  <tr>-->
<!--                     <form class="form-inline" role="form" action="register.php" method="post" width="30px">-->
<!--                     &nbsp;&nbsp;<input type="submit" name="register" value="注册" class="button"/></form>-->
<!--                  </tr>-->
               </td>
            </table>
         </div>
      </div>
   </div>
</body>
</html>