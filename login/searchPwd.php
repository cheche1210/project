<?php
	session_start();
	include("../main/head.php");
?>
<link rel="stylesheet" type="text/css" href="../css/find.css" />
<script type="text/javascript" src="serch.js"></script>
<h3>비밀번호 찾기</h3>
<hr>
<form name="searchPwd_form" method="post" action="findPwd.php">
<table id="find">
<tr id="title">
	<td id="name">아이디</td>
	<td id="con"><input type="text" name="id" placeholder='아이디'/></td>
</tr>
<tr id="title">
	<td id="name">이름</td>	
	<td id="con"><input type="text" name="name" placeholder='이름'/></td>
</tr>
</table>
<table>	
	<tr>
		<td><input id="button" type="submit" value="비밀번호 찾기" onclick="pwdlostCheck()"></td>
		<td><input id="button" type="reset" value="다시작성" onclick="reset_Pwdform()"></td>
	</tr>
	
</table>
</form>
<?php
	include("../main/footer.php");
?>