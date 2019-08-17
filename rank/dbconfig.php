<?php include("../main/head.php"); ?>
<?php
	$connect = mysql_connect("localhost", "214230067", "hyw214230067");
    mysql_select_db ("db214230067", $connect);

	if ($db->connect_error) {
		die('데이터베이스 연결에 문제가 있습니다.\n관리자에게 문의 바랍니다.');
	}

	$db->set_charset('utf8');
?>
<?php include("../main/footer.php"); ?>