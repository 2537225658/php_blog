<?php
$arr=$_POST;
$conn=mysqli_connect("localhost","root","47207418");
if(!$conn)
{
    die("连接失败");
}
mysqli_select_db($conn,"liuyan");//设置操作的数据库
mysqli_query($conn,"set names utf8");//设置操作编码
//mysqli系统函数，$conn不可以省略因为要在第一参数
// else
// {
//     echo "yes";
// }
$sql="";//sql语句
$abc=mysqli_query($conn,$sql);//执行写入
if($abc)
{
    // echo "yes";

}
else{
    echo"no";
}


?>