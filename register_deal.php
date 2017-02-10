<?php
session_start();
include "Conn/conn.php";
$UserName=$_POST[txt_regname];
$sql=mysql_query("select * from user where name = '$UserName'");
$result=mysql_fetch_array($sql);
if ($result!=false){
	echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
	echo ("<script>alert('用户名已被注册！');history.go(-1);</script>");
	exit();
}

$_SESSION[username]=$_POST[txt_regname];
$regname=$_POST[txt_regname];
$regrealname=$_POST[txt_regrealname];
$regpwd=$_POST[txt_regpwd];
$regbirthday=$_POST[txt_birthday];
$regemail=$_POST[txt_regemail];
$regsex=$_POST[txt_regsex];
$regqq=$_POST[txt_regqq];
$regsign=$_POST[txt_regsign];
$regintroduce=$_POST[txt_regintroduce];
$INS=mysql_query("Insert Into user (name,realname,pwd,birthday,email,sex,qq,sign,introduce,fig) Values ('$regname','$regrealname','$regpwd','$regbirthday','$regemail','$regsex','$regqq','$regsign','$regintroduce',0)");
if($INS){
	echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
	echo "<script> alert('用户注册成功！');</script>";
	echo "<script> window.location='file.php';</script>";
}else{
	echo "<script> window.location='index.php';</script>";
}
?>
