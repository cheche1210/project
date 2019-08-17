<?
	session_start();

	$aa = substr($_SERVER['QUERY_STRING'],8); //사용할 마일리지 값

	$connect = mysql_connect("localhost","214230077","hyw214230077"); 
	mysql_select_db("db214230077",$connect);

	$sql2 = "select * from team where id='{$_SESSION['id']}'";
	$result2 = mysql_query($sql2,$connect);
	$row2 = mysql_fetch_array($result2);

	$ml = $row2['mileage']; //팀이 가지고 있는 마일리지를 변수 ml에 저장
	$mile = $ml - $aa;

	// echo "$mile";
	// echo "$ml";
	// echo "$aa";


	$sql = "update team set mileage=$mile where id='{$_SESSION['id']}'";
	$result = mysql_query($sql);

	if($result2) {
		echo"
			<script>
				location.href='../member/mile_use.php?mileage=$aa';
			</script>
		";	
	} else {
		echo"mileage_process.php 실패";
	}

	mysql_close($connect);
?>