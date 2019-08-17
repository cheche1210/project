<?php
	session_start();

	$tn = $_SESSION[tnum];
	$usemile = substr($_SERVER['QUERY_STRING'],8);

	// echo "tnum: $tn <br>"; //16
	// echo "usemile: $usemile <br>"; //5000

	
	$connect = mysql_connect("localhost","214230077","hyw214230077"); 
	mysql_select_db("db214230077",$connect);


   
	$sql = "
		insert into umile (tnum, tname, id, usemile)
		values ($tn, '{$_SESSION['tname']}', '{$_SESSION['id']}', $usemile);
	";

	$sql2 = "
		insert into mile_chart (tname, id, mileage, mcright)
		values ('{$_SESSION['tname']}', '{$_SESSION['id']}', $usemile, 1);
	";

	echo"$sql $sql2";


	$result = mysql_query($sql, $connect);
	$result2 = mysql_query($sql2, $connect);

	if($result && $result2) {
		echo "
			<script>
				window.alert('결제가 완료되었습니다. 일정등록하러가기')
				location.href='../date/play_submit.php?mile=$usemile'
			</script>
		";
	} else {
		echo "
			<script>
				window.alert('결제에 실패했습니다. 관리자에게 문의 바랍니다.')
				history.go(-1)
			</script>
		";	
	}

	mysql_close($connect);
?>