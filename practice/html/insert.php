<?php
//连接本地数据库
$con=mysqli_connect("localhost:3309","root","","web");
mysqli_query($con , "set names utf8");
if(!$con)
{
    die("连接失败： " . mysql_error());
}
echo "连接成功<br>";
$sql="INSERT INTO new1(title,body) VALUES('$_POST[title]','$_POST[body]')"; 
if (mysqli_query($con,$sql))
{
    echo "发布成功";
    echo '<a href="manager.php">返回</a>';
}
mysqli_close($con);
?>