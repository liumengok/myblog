<?php 
include "Conn/conn.php";
$UserName=$_GET[x];
$sql=mysql_query("select * from user where regname = '$UserName'");
$result=mysql_fetch_array($sql);
if ($result!=false){
	echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
	echo ("[<font color=red>".$UserName."</font>]已被注册！");
}
else{
	echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
	echo ("恭喜您!用户名[<font color=green>".$UserName."</font>]可以注册！");
}
?>
