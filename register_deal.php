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

	$name=$_POST[txt_regname];
	$realname=$_POST[txt_regrealname];
	$pwd=$_POST[txt_regpwd];
	$birthday=$_POST[txt_birthday];
	$email=$_POST[txt_regemail];
	$sex=$_POST[txt_regsex];
	$qq=$_POST[txt_regqq];
	$sign=$_POST[txt_regsign];
	$introduce=$_POST[txt_regintroduce];
	$sql_query="insert into user (name,realname,pwd,birthday,email,sex,qq,sign,introduce,fig) values ('$name','$realname',"."\"SHA('$pwd')\"".",'$birthday','$email','$sex','$qq','$sign','$introduce',0)";
	$INS=mysql_query($sql_query);
	echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
	if($INS){	
		$_SESSION[username]=$_POST[txt_regname];
		echo "<script> alert('用户注册成功！');</script>";
		echo "<script> window.location='file.php';</script>";
	}else{
		echo "<script> alert('用户注册失败！');</script>";
		echo "<script> window.location='index.php';</script>";
	}
?>
