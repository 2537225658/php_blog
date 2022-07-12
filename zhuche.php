<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注册</title>
</head>
</body >
    <body background="/img/123.png"  >
        <!-- 全局背景图片 -->
        <div id="longindiv">
            <form method="POST" action="zhuche1.php">


                手机：<input type="text" name="phone" id="username">
                <br>
                <br>
                账号：<input type="text" name="usn" id="username">
                <br>
                <br>
                密码：<input type="password" name="pasw" id="password">
                <br>
                <br>
                <input type="submit" name="zhuche"id="zhuche" value="注册">


         </form>

        </div>
</body>
<style>
    body{
        padding: 0px;
        margin: 0px;
    }
    #username{
        border: 1px solid deepskyblue;
        height: 20px;
        border-radius: 20px;
        background: transparent;
    }
    #password{
        margin-top: 5px;
        border: 1px solid deepskyblue;
        height: 20px;
        border-radius: 20px;
        background: transparent;
    }

    #zhuce{
        border: 0;
        margin-top: 5px;
        border-radius: 30px;
        width: 100px;
        height: 10px;
        background: lightblue;
    }
    #zhuche{
        border: 0;
        margin-top: 5px;
        border-radius: 30px;
        width: 100px;
        height: 30px;
        background: lightblue;
    }
    #longindiv{
        height: 100%;
        margin-top: 300px;
        text-align: center;

    }
</style>
</html>