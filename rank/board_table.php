<?php include("../main/head.php"); ?>
<?
	$connect = mysql_connect("localhost", "214230067", "hyw214230067");
	mysql_select_db  ("db214230067", $connect);

	$sql = "create table board_tale(";
	$sql .= "rnum int(10) , ";
	$sql .= "tname varchar(50), ";
	$sql .= "matchnum int(10), ";
	$sql .= "win int(100), ";
	$sql .= "draw int(100), ";
	$sql .= "fail int(100), ";
	$sql .= "percent int(100), ";
	$sql .= "primary key(rnum) ); ";

	$result = mysql_query($sql);
	if($result)
	 echo " 테이블 생성 완료 됐습니다.";
	else
	 echo "테이블 생성 안되었습니다.";

	mysql_close($connect);
?>
<?php include("../main/footer.php"); ?>