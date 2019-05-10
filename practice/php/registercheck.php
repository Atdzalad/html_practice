<?php
//连接本地数据库
$con=mysqli_connect("localhost:3309","root","","web");
if(!$con)
{
    die("连接失败： " . mysql_error());
}
echo "连接成功<br>";

//从客户端获取信息
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

//使用SQL语句进行检验是否有重复用户名
$sql="SELECT * FROM user WHERE username='$username'";
$result=mysqli_query($con,$sql);
$flag=mysqli_fetch_array($result);
if(!$flag)
{
    $password=md5($password);
    //echo $username;
    //echo $password;
    $sql="insert into user(username,password) values('$username','$password')";
    $obj = mysqli_query($con , $sql);
    exit('注册成功！点击跳转<a href="../html/login.php">登录</a>');
}
else
{
    echo '注册失败';
    echo '<a href="javascript:history.back(-1);">点击重试</a>';
}
//关闭连接
mysqli_close($con);

?>

