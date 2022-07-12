<?php
header("Content-type:text/html;charset=utf-8");
include('mysql_config.php');//连接数据库
$name=$_POST["username"];
$password=$_POST["password"];
$sql="SELECT * FROM `user` WHERE username = '$name' AND password = '$password';";
$result=$conn->query($sql);

$rows=$result->num_rows;
if($rows==true)
{

	echo  $name;
	echo "<script>alert('登录成功')</script>";
}else{
	echo "<script>alert('登录失败');history.back()</script>";
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body background="/img/123.png">
</body>
</html>