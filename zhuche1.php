<?php
header("Content-type:text/html;charset=utf-8");
include("mysql_config.php");//连接数据库
$nam=$_POST['usn'];
$pas=$_POST['pasw'];
$phon=$_POST['phone'];
$zz="/^1[0-9]{10}$/";
$yz_phone=preg_match($zz,$phon);
if($yz_phone)
{
  $arr=$_POST;
  $sql="insert into user(username,password,phone) values ('$nam','$pas','$phon');";
  $result=$conn->query($sql);
  $jieguo=mysqli_fetch_array($result);
  $a=($_POST['usn']==$nam&&$nam!=''&&$_POST['pasw']==$pas&&$pas!='');
  if($a)
  {
      // echo "<script>alert('注册成功');history.go(index.php)</script>";
      echo "<script language=javascript>alert('注册成功');location='indexs.php'</script>";
  }
  else {
    echo "<script>alert('注册失败再看看信息');history.back()</script>";
  }
}else
{
  echo"<script>alert('要不在看看你的手机号？');history.back()</script>";
}
?>