<?php
	session_start();
	include("../main/head.php");
?>
<link rel="stylesheet" type="text/css" href="../css/find.css" />
<script language="JavaScript" src="../login/serch.js"></script>
<h3>아이디 찾기</h3>
<hr>
<form name="searchId_form" method="post" action="findId.php">
<table id="find">
<tr id="title">
	<td id="name">
		이름
	</td>
	<td id="con">
		<input type="text" name="name" placeholder="이름"/>
	</td>
</tr>
<tr id="title">
	<td id="name">
		전화번호
	</td>
	<td id="con">
		<select name="phone1">
					<option value='010'>010</option>
					<option value='011'>011</option>
					<option value='016'>016</option>
					<option value='017'>017</option>
					<option value='018'>018</option>
					<option value='019'>019</option>
				</select>
		-<input size="4" type="text" name="phone2" placeholder="번호"/>
		-<input size="4" type="text" name="phone3" placeholder="번호"/>
	</td>
</tr>
</table>
<table>	
	<tr>
		<td><input id="button" type="button" value="아이디 찾기" class="submit" onclick="idlostCheck()"></td>
		<td><input id="button" type="reset" value="다시작성" class="cancel" onclick="reset_Idform()"></td>
	</tr>
	</div>
</table>
	
</form>
<?php
	include("../main/footer.php");
?>