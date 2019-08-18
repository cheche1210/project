<?php
	//prod by JH
	include("../main/head.php");

	session_start();
	
	/* DB연결 */
	$connect=mysql_connect("localhost","214230077","hyw214230077");
	mysql_select_db("db214230077",$connect);
	
	$sql = "select * from member where id='{$_POST['id']}' and pwd='{$_POST['pwd']}'";
	$result = mysql_query($sql, $connect);
	$row = mysql_fetch_array($result);
	
	if(strcmp($_POST['id'], $row['id']) != 0) {
		if(strcmp($_POST['pwd'], $row['pwd']) != 0) {
			echo"
				<script>
					window.alert('비밀번호가 일치하지 않습니다.')
					history.go(-1)
				</script>
			";
		} else {
			echo"
				<script>
					window.alert('ID가 일치하지 않습니다.')
					history.go(-1)
				</script>
			";
		}
	} else { /* 로그인 성공 하면 */
		/*세션 등록*/
		$_SESSION['id'] = $row['id'];
		$_SESSION['pwd'] = $row['pwd'];
		$_SESSION['name'] = $row['name'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['phone'] = $row['phone'];
		$_SESSION['mright'] = $row['mright'];
		$_SESSION['address'] = $row['address'];

		$sql2 = "select * from team where id='{$_POST['id']}'";
		$result2 = mysql_query($sql2, $connect);
		$row2 = mysql_fetch_array($result2);
		$_SESSION['tname'] = $row2['tname'];
		$_SESSION[tnum] = $row2[tnum];
		// echo"
		// 		<script>
		// 			window.alert('{$_SESSION['id']}')
		// 			history.go(-1)
		// 		</script>
		// 	";
		if($row[mright]==2){
			header("location: ../../admin/main/admin_main.php");
		} else{
			header("location: ../main/main.php");
		}
	}
	include("../main/footer.php");
?>