<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <title>Login</title>
</head>
<body align="center">
 
    <marquee direction="right">
        Welcome for login
    </marquee>


            <!--表格-->
            <blockquote>
                <!--表单-->
                <form method="POST" action="../php/logincheck.php">
                    <ex1>账号：</ex1><input type="text" name="login_username" autofocus />
                    <br/>
                    <ex1>密码：</ex1><input type="password" name="login_password" />
                    <br/>
                    <input type="submit" value="提交" />
                    <input type="reset" value="取消" />
                </form>
                <!--表单-->
                <br/> 
                </blockquote>
    
    
    

                <footer>made by Atdzald in uestc<br><a href="/index.php">回到首页</a></footer>

</body>
</html>