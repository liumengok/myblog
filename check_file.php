<?php
session_start();
include "Conn/conn.php";
$title=$_POST[txt_title];
$author=$_SESSION[username];
$content=$_POST[file];
$now=date("Y-m-d H:i:s");
$sql="Insert into article (title,content,author,now) Values ('$title','$content','$author','$now')";
$result=mysql_query($sql);
if($result){
	echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
	echo "<script>alert('恭喜您，你的文章发表成功!');window.location.href='file.php';</script>";
}
else{
	echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
	echo "<script>alert('对不起，添加操作失败! ');window.location.href='file.php';</script>";
}
?>
