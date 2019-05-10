<?php
$tablename=$_SESSION['pagename'];
unset($_SESSION['pagename']);

//连接本地数据库
$con=mysqli_connect("localhost:3309","root","","web");
mysqli_query($con , "set names utf8");
if(!$con)
{
    die("连接失败： " . mysql_error());
}
//echo "连接成功<br>";
$sql="SELECT * FROM $tablename";
$result=mysqli_query($con,$sql);
$_SESSION['pagename']="HI";
while($row = mysqli_fetch_array($result))
  {
    $title=$row['title'];
    echo '<li><a href="displaybodyonly.php?key='.$title.'">---------------'.$row['title'].'</a></li>';
  }

mysqli_close($con);
?>