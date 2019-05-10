<?php
echo "<script>alert('欢迎光临');</script>";
$sql=mysqli_connect("localhost:3306","root","zz567098");
if(!$sqlsql)
{
    die("连接失败： " . mysql_error())；
}
echo "连接成功"

mysqli_select_db("web",$sql);
mysqli_query("set names utf8");

?>