<?php
	session_start();
	include "Conn/conn.php";
	$name=$_POST[txt_user];
	$pwd=$_POST[txt_pwd];
	$sql=mysql_query("select * from user where name='$name' and pwd="."\"SHA('$pwd')\"");
	$result=mysql_fetch_array($sql);
	if($result!=""){
		$_SESSION[fig]=$result[fig];
		$_SESSION[username]=$name;
?>
	<script language="javascript">
		window.location.href="file.php";
	</script>
<?php
	}else{
?>
		echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
		<script language="javascript">
		alert("对不起，您输入的用户名或密码不正确，请重新输入!");window.location.href="index.php";
		</script>
<?php
	}
?>
