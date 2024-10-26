<?php 
header("Content-Type: text/html;charset=utf-8");
$user=0;
$pass=0;
$user=$_POST['username'];
$pass=$_POST['passwd'];
//if ($_POST['username']="admin" and $_POST['passwd']="123.com")
echo "用户名$user".","."密码$pass";
echo '<br>';
if ($user=="admin" and $pass=="123.com") 
{
echo "欢迎admin登陆";
exit();
}
else
{
echo "请输入正确的用户名和密码";
exit();
}
 ?>