<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <title>Login</title>
</head>

<style type="text/css">
    body{
    
        background-image: url(img/back.jpg);
        background-size: 100%;
        background-attachment:initial;
        margin: 0px;padding: 0;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>

<body align =center>
    <marquee direction="left">
        Welcome for register
    </marquee>

            <!--表单-->
    <form method="post" action="../php/registercheck.php">
        <ex1>账号：</ex1><input type="text" name="username"  />
        <br/>
        <ex1>密码：</ex1><input type="password" name="password" />
        <br/>
        <input type="submit" value="提交" id="btn" name="submit" />
        <input type="reset" value="取消" />
    </form>

        <footer>made by Atdzald in uestc<br><a href="/index.php">回到首页</a></footer>

</body>
</html>

