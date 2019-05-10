<?php
$add=$_GET['add'];


//连接本地数据库
$con=mysqli_connect("localhost:3309","root","","web");
mysqli_query($con , "set names utf8");
if(!$con)
{
    die("连接失败： " . mysql_error());
}
echo "连接成功<br>";
//echo $del;
//echo $title;
//echo $body;
if(!$add)
{
    $title=$_REQUEST['gender'];
    $sql="DELETE FROM new3 WHERE title='$title'";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "删除成功";
        echo '<br>';
        echo '<a href="manager.php">返回</a>';
    }

}
else {
    $title=$_REQUEST['name'];
    $sql="INSERT INTO new3(title) VALUE('$title')";// body='$body' WHERE title='$title'";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "添加成功";
        echo '<br>';
        echo '<a href="manager.php">返回</a>';
    }
}
mysqli_close($con);
?>