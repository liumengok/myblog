<?php
session_start();
if($_SESSION[username]==""){
	echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
	echo "<script>alert('对不起，本博客需要进行用户登录来验证您的真实身份!');window.location.href='index.php';</script>";
	exit();
}
?>
