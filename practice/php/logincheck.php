<?php
//连接本地数据库
$con=mysqli_connect("localhost:3309","root","","web");
if(!$con)
{
    die("连接失败： " . mysql_error());
}
echo "连接成功<br>";
//获取客户端内容
$username=$_POST['login_username'];
$password=md5($_POST['login_password']);

//在数据库中查询验证用户名和密码
$result=mysqli_query($con,"select id from user where username ='$username' and password='$password' ");
$flag=mysqli_fetch_array($result);
if($flag)
{
    echo '<a href="../html/manager.php">登录成功！点击跳转至管理界面</a>';
    exit;
}
else
{
    echo '<a href="javascript:history.back(-1);">登陆失败点击重试</a>';
    exit;
}

//关闭连接
mysqli_close($con);
?>