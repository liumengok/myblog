<?php 
session_start();
include "Conn/conn.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Myblog</title>
<link href="CSS/style.css" rel="stylesheet"/>
</head>
<script src="JS/check.js" language="javascript">
</script>
<body onselectstart="return false">
<table width="757"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr align="right" valign="top">
    <td height="149" colspan="2" background="images/head.jpg">
      <table width="100%" height="149"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="51" align="right">
	  <br>
	  <table width="262" border="0" cellspacing="0" cellpadding="0">
            <tr align="left">
              <td width="26" height="20"><a href="index.php"></a></td>
              <td width="71" class="word_white"><a href="index.php"><span style="FONT-SIZE: 9pt; COLOR: #000000; TEXT-DECORATION: none">首  页</span></a></td>
              <td width="87"><a href="file.php"><span  style="FONT-SIZE: 9pt; COLOR: #000000; TEXT-DECORATION: none">我的博客</span></a></td>
              <td width="55"><a href="<?php echo (!isset($_SESSION[username])?'Register.php':'safe.php'); ?>"><span style="FONT-SIZE: 9pt; COLOR: #000000; TEXT-DECORATION: none"><?php echo (!isset($_SESSION[username])?"博客注册":"安全退出"); ?></span></a></td>
              <td width="23">&nbsp;</td>
            </tr>
          </table>
	  <br></td>
        </tr>
        <tr>
          <td height="66" align="right"><p>&nbsp;</p></td>
        </tr>
        <tr>
	 <form name="form" method="post" action="checkuser.php">
          <td height="20" valign="baseline">
            <table width="100%"  border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="32%" height="20" align="center" valign="baseline">&nbsp; </td>
                <td width="67%" align="left" valign="baseline" style="text-indent:10px;">
		<?php
	 	  	if(!isset($_SESSION[username])){
	        ?>
		用户名:<input  name=txt_user size="10">
		密码:<input  name=txt_pwd type=password style="FONT-SIZE: 9pt; WIDTH: 65px" size="6">
		<input style="FONT-SIZE: 9pt"  type=submit value=登录 name=sub_dl onClick="return f_check(form)">&nbsp; 
		<?php
			}else{
		?>
		<font color="red"><?php echo $_SESSION[username]; ?></font>&nbsp;&nbsp;欢迎您的光临！
		<?
			}
		?>
		</td>
                <td width="1%" align="center" valign="baseline">&nbsp;</td>
              </tr>
            </table> 
	   </td>
	  </form>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td width="236" height="501" background=" images/left.jpg">
	<table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
	  <tr>
	   <td height="125" align="center" valign="top"><br></td>
          </tr>
	</table>
    </td>
    <td width="521" height="501" align="center" background="images/right.jpg">
      <table width="100%" height="98%"  border="0" cellpadding="0" cellspacing="0">
       <tr>
        <td>&nbsp;</td>
       </tr>
       <tr>
        <td height="372" align="center"><table style="WIDTH: 252px" cellspacing=0 cellpadding=0>
          <tbody>
            <tr>
              <td style="WIDTH: 429px; HEIGHT: 280px" colspan=3 rowspan=2>
            </tr>
          </tbody>
        </table>
       </td>
      </tr>
      <tr>
        <td height="66">&nbsp;</td>
      </tr>
    </table>
   </td>
  </tr>
</table>
</body>
</html>

