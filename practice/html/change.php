<?php
$del=$_GET['del'];
$title=$_GET['title'];

//连接本地数据库
$con=mysqli_connect("localhost:3309","root","","web");
mysqli_query($con , "set names utf8");
if(!$con)
{
    die("连接失败： " . mysql_error());
}
echo "连接成功<br>";

//echo $del;
echo $title;
//echo $body;
if($del)
{
    $sql="DELETE FROM new1 WHERE title='$title'";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "删除成功";
        echo '<br>';
        echo '<a href="manager.php">返回</a>';
    }

}
else {
    $body=$_REQUEST['body'];
    $sql="UPDATE new1 SET body='$body' WHERE title='$title'";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "修改成功";
        echo '<br>';
        echo '<a href="manager.php">返回</a>';
    }
}
?>