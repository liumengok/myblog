<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="CSS/style.css"  rel="stylesheet">
<title>用户注册</title>
</head>
<script src="JS/check.js" language="javascript">
</script>

<body style="MARGIN-TOP: 0px; VERTICAL-ALIGN: top; PADDING-TOP: 0px; TEXT-ALIGN: center"> 

<TABLE width="757" cellPadding=0 cellSpacing=0 style="WIDTH: 755px" align="center"> 
  <TBODY> 
    <TR> <TD style="VERTICAL-ALIGN: bottom; HEIGHT: 6px" colSpan=3 background="images/f_head.jpg"> <table width="100%" height="149"  border="0" cellpadding="0" cellspacing="0">
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
				用户名:
                  <input  name=txt_user size="10">
密 码:
<input  name=txt_pwd type=password style="FONT-SIZE: 9pt; WIDTH: 65px" size="6">
<input style="FONT-SIZE: 9pt"  type=submit value=登录 name=sub_dl onClick="return f_check(form)">
&nbsp; 
<?php
				}else{
			?>
				<font color="red"><?php echo $_SESSION[username]; ?></font>&nbsp;&nbsp;欢迎您的光临！！！
</font>
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
      </table></TD> 
    </TR> 
    <TR> 
      <TD colSpan=3 valign="baseline" style="BACKGROUND-IMAGE: url( images/bg.jpg); VERTICAL-ALIGN: middle; HEIGHT: 450px; TEXT-ALIGN: center"><br>
        <form  name="myform" action="register_deal.php" method="post"> 
          <table width="85%" border="1" align=center cellpadding=3 cellspacing=2 bordercolor="#FFFFFF" bgcolor="#FFFFFF" class=i_table> 
            <tr align="left" bgcolor="#EFF7DE"> 
              <td height=22 colspan=2 bgcolor="#EFF7DE" class=right_head><span class="tableBorder_LTR">必填内容</span></td> 
            </tr> 
            <tr bgcolor="#FFFFFF"> 
              <td width=22% align="right" valign=middle class='f_one'> 用户名</td> 
              <td width=78% align="left"  class='f_one'><input name='txt_regname' type=text id="txt_regname" value='' size=20 maxlength=14> 
                <a href="" onClick="javascript:openwin(myform.txt_regname.value)">[检测用户]</a> <font color=red>*</font> 
              <div id="check_info"></div></td> 
            </tr> 
            <tr bgcolor="#FFFFFF"> 
              <td align="right" valign=middle > 真实姓名</td> 
              <td align="left" > <input name=txt_regrealname type=text id="txt_regrealname" size=20 maxlength=75>                
              <font color=red>*</font></td> 
            </tr> 
            <tr> 
            <tr bgcolor="#FFFFFF"> 
              <td align="right" valign=middle > 密码</td> 
              <td align="left"> <input name=txt_regpwd type=password id="txt_regpwd" size=20 maxlength=75> 
              英文字母或数字等不少于3位<font color=red>*</font></td> 
            </tr> 
            <tr bgcolor="#FFFFFF"> 
              <td align="right" valign=middle> 确认密码</td> 
              <td align="left" > <input name='txt_regpwd2' type=password id="txt_regpwd2" size=20 maxlength=75 onBlur="if(this.value!=this.form.txt_regpwd.value) {alert('您两次输入的密码不一致！');myform.txt_regpwd.focus();}"> 
              <font color=red>*</font></td> 
            </tr> 
            <tr bgcolor="#FFFFFF"> 
              <td align="right" > 出生日期</td> 
              <td align="left" > <span class="word_grey"> 
                <input name="txt_birthday" type="text" id="Tel"> 
              （日期格式为：yyyy-mm-dd）<font color=red>*</font></span></td> 
            </tr> 
            <tr bgcolor="#FFFFFF"> 
              <td align="right" valign=middle> Email</td> 
              <td align="left"  > <input name=txt_regemail type=text id="txt_regemail" value='' size=35 maxlength=75> 
              <font color='#000000'>公开邮箱 <font color=red>*</font></font> </td> 
            </tr> 


            <tr align="left" bgcolor="#EFF7DE"> 
              <td height=22 colspan=2 class=right_head><span class="tableBorder_LTR">选填内容</span></td> 
            </tr> 
            <tr bgcolor="#FFFFFF"> 
              <td align="right" class='f_one'> 性别</td> 
              <td align="left" class='f_one'> <select name=txt_regsex id="txt_regsex"> 
                  <OPTION value=0>男</OPTION> 
                  <OPTION value=1>女</OPTION> 
              </select></td> 
            </tr> 
            <tr bgcolor="#FFFFFF"> 
              <td align="right" class='f_one'>QQ</td> 
              <td align="left" class='f_one'><input name='txt_regqq' type=text id="txt_regqq" value='' size=20 maxlength=14></td> 
            </tr> 
            <tr bgcolor="#FFFFFF"> 
              <td align="right" valign=middle class='f_one'>个性化签名</td> 
              <td align="left" class='f_one'><textarea name='txt_regsign' cols=50 rows='4' id="txt_regsign"></textarea></td> 
            </tr> 
            <tr bgcolor="#FFFFFF"> 
              <td align="right" class='f_one'> 自我简介</td> 
              <td align="left" class='f_one'><textarea name=txt_regintroduce cols=50 rows=4 id="txt_regintroduce"></textarea></td> 
            </tr> 
          </table> 
          <br> 
            <input type='submit' name='regsubmit' value='提 交'class="btn_grey" onClick="return check(myform)"> &nbsp;
            <input name="Submit2" type="reset" class="btn_grey" value="重 填">
      </form></TD> 
    </TR> 
  </TBODY> 
</TABLE> 
</body>
</html>
