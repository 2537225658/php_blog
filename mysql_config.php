<?php
$mysql_server_name = 'localhost'; //mysql数据库服务器
$mysql_username = 'root'; //mysql数据库用户名
$mysql_password = '*********'; //mysql数据库密码
$mysql_database = 'blog'; //mysql数据库名
$conn=mysqli_connect($mysql_server_name,$mysql_username,$mysql_password,$mysql_database); //连接数据库
//连接数据库错误提示
if (mysqli_connect_errno($conn)) {



    die("连接 MySQL 失败: " . mysqli_connect_error());
}
// else
// {
//    echo "连接成功";
// }



?>