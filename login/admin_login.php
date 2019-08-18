<?php 
	session_unset(void);
?>
<link rel="stylesheet" type="text/css" href="../css/admin_login.css" />

<div id="login">
	<img src="../img/admin_login.png" class="log_img" />
	<form method="post" action="admin_process.php">
		<table>
			<tr>
				<td><input type="text" name="id" class="login_input" placeholder="id"/></td>
			</tr>
			<tr>
				<td><input type="password" name="pwd" class="login_input" placeholder="password"/></td>
			</tr>
			<tr>
				<td><input type="submit" class="sub_btn" value="로그인" /></td>
			</tr>
		</table>
	</form>
</div>
<div class="footer"></div>
<a href="../main/main.php"><button>사용자 메인으로</button></a>