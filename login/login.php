<?php include("../main/head.php"); ?>
<link rel="stylesheet" type="text/css" href="../css/login.css" />
<img src="../img/login2.png"/>

<div id="login">
	<form method="post" action="process.php">
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
			<tr>
				<td><a href="../join/join.php">회원이 아니신가요?<input type="button" id="join" name="" value="JOIN US" /></a></td>
			</tr>
			<tr>
				<td><a href="../login/searchId.php">ID를잊으셨나요?<input type="button" id="findI" value="FIND ID" /></a></td>
			</tr>
			<tr>
				<td><a href="../login/searchPwd.php">PW를 잊으셨나요?<input type="button" id="findP" value="FIND PW" /></a></td>
			</tr>
		</table>
	</form>
</div>

<?php include("../main/footer.php"); ?>