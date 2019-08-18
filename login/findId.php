<?php
	//prod by jh
	include("../main/head.php");

	$phone = $phone1."-".$phone2."-".$phone3;

	//DB연결
	$connect=mysql_connect("localhost","214230077","hyw214230077");
	mysql_select_db("db214230077",$connect);

	//입력한 이름과 아이디와 같은 행에 있는 아이디를 가져와라
	$query = "select id from member where name='{$_POST['name']}' and phone='$phone'";
	$result = mysql_query($query, $connect);
	
	//가져온 결과 row변수에 저장
	$row = mysql_fetch_array($result);
	

	if(!$row) {
		err_msg('일치하는 정보가 없습니다.');
	}
?>
<h3>아이디 찾기</h3>
<div> <?=$_POST['name']?> 님의 아이디는 <?=$row[id]?> </div>
<?php
	mysql_free_result($result);
	include("../main/footer.php");
?>