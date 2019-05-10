<!DOCTYPE html>
<html lang="zh-cn">
<meta charset="UTF-8">
<?php session_start(); ?>
        <head><title>Web新闻发布系统</title>
        </head>
        <body>
        <div id="main">
            
        <!--标题-->
        <header>
            <h1 id="hd1">Web新闻发布系统</h1>
        </header>
        <!--标题-->

        <!--侧边栏-->
        <aside>
            <nav>
            <ul>
                    <li><a href="/html/login.php">&nbsp&nbsp登录&nbsp&nbsp</a></li>
                    <li><a href="/html/register.php">&nbsp&nbsp注册&nbsp&nbsp</a></li>
                    <li><a href="index.php">回到首页</a></li>
                    <li><a href="/html/new1.php">最新新闻</a></li>
                <?php
                    //连接本地数据库
                    $con=mysqli_connect("localhost:3309","root","","web");
                    mysqli_query($con , "set names utf8");
                    if(!$con)
                    {
                        die("连接失败： " . mysql_error());
                    }
                    //echo "连接成功<br>";
                    $sql="SELECT * FROM new3";
                    $result=mysqli_query($con,$sql);
                    while($row = mysqli_fetch_array($result))
                    {
                        $title=$row['title'];
                        echo '<li><a href="/html/new1.php">'.$row['title'].'</a></li>';
                    }

                    mysqli_close($con);
                ?>
                </ul>
            </nav>
        </aside>
        <!--侧边栏-->

        <!--css-->
        <style type="text/css">
        h1#hd1{
            margin: 10px;padding: 0px;
            top: 15px;
            position: absolute;
            font-size: 40px;
            color: rgb(255, 208, 0,);
            margin-left: 250px;

        }
        a{
            text-decoration:none;
        }
        body{

            background-image: url(img/back.jpg);
            background-size: 100%;
            background-attachment:initial;
            margin: 0px;padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        #main{
            margin: 0px auto;
            width: 800px;
        }
        header{
            border: 1px #330000 solid;
            width: 800px;
            height: 80px;
            background: #3e3be6a1;
        }
        aside{
            width: 170px;
            float: left;
            height: 400px;


        }
        nav{
            border: 0px #000000 solid;
            margin: 0px auto;padding: 0px;
            margin-top: 240px;

        }
        a{
            color:black;   
        }
        article{
            border-right: 1px #330000 solid;
            width: 625px;
            margin-left: 175px;
            height: 590px;            
            background-color:rgba(100,37,38,0.2);
        }
        footer{
            border: 1px #330000 solid;
            background: #556ae0;
            color: #ffffff;
            width: 800px;height: 50px;
            text-align: center;
            line-height: 50px;
        }
        .consection{
            display: block;
            border: 0px #330000 solid;
            width: 400px;
            left: 10px;top: 10px;
            margin: 0px auto;padding: 20px;
        }
        fieldset{
            border: 1px solid;
            border-radius: 10px;
            -moz-border-radius:10px;
            -webkit-border-radius:10px;
        }
        fieldset legend{
            text-align: center;
            color: black;
        }
        div{
            font-size: 16px;
            color: #000000;
        }
        font.test{ 
            font-size: 16px;
            color: #ffffff;
            font-weight: bold;
        }
        #font_bold{
            font-size: 24px;
            color: red;
            font-family:'Courier New', Courier, monospace;
            font-weight: bold;
            border: 1px #336699 solid;
        }
        td{
            font-size: 22px;
            color: black;
            font-weight: bold;
        }
        ex1{
            font-size: 22px;
            color: black;
            font-weight: bold;
            text-decoration: underline;
        }
        </style>
        <!--css-->

            <article>
                <section class="consection">
                    <fieldset>
                        <legend>介绍</legend>
                        <center>这是一个简易的Web新闻发布系统,仅仅实现了最基本的功能</center><br>
                        <br>
                        ①前台新闻列表展示<br>
                        ②前台新闻内容展示<br>
                        ②后台用户登录<br>
                        ③后台新闻编辑、添加、删除功能<br>
                        ④后台新闻栏目管理<br>
                        程序前端由html编写使用css进行美化，后端注册登录以及数据库等一系列操作由php实现<br>
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    </fieldset>

                </section>
                <div class="consection">
                </div>
            </article>
            <!--footer-->
            <footer>made by Atdzald in uestc</footer>
        </div>
        </body>
</html>