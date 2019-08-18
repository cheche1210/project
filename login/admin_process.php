<?php
	//prod by JH
	session_start();
	
	/* DB연결 */
	$connect=mysql_connect("localhost","214230077","hyw214230077");
	mysql_select_db("db214230077",$connect);
	
	$sql = "select * from member where id='{$_POST['id']}'";
	$result = mysql_query($sql, $connect);
	$row = mysql_fetch_array($result);
	
	/*
		입력한 아이디와 디비에 저장된 아이디가 같을 때
		1. 비밀번호 일치
			1-1. 권한 있음
			1-2. 권한 없음
		2. 비밀번호 불일치

		1. 권한이 있을 경우
			1.1. 아이디 일치
				1.1.1. 비밀번호 불일치
				1.1.2. 비밀번호 일치 -> 어드민 로그인 성공
			1.2. 아이디 불일치
		2. 권한이 없을 경우
	*/

	if($row[mright]==2) { /*권한이 있을 경우*/
		if(strcmp($_POST['id'], $row['id']) != 0) {/*아이디 불일치*/
			unset($_SESSION['id']);
			unset($_SESSION['pwd']);
			echo"
				<script>
					window.alert('ID가 일치하지 않습니다.')
					history.go(-1)
				</script>
			";
		} else {/*아이디 일치*/
			if(strcmp($_POST['pwd'], $row['pwd']) != 0) { /*비밀번호 불일치*/
				echo"
					<script>
						window.alert('비밀번호가 일치하지 않습니다.')
						history.go(-1)
					</script>
				";
			} else { /*비밀번호 일치 -> 로그인 성공*/
				/*세션 등록*/
				$_SESSION['id'] = $row['id'];
				$_SESSION['pwd'] = $row['pwd'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['phone'] = $row['phone'];
				$_SESSION['mright'] = $row['mright'];
				$_SESSION['address'] = $row['address'];

				header("location: ../../admin/main/admin_main.php");
			}
		}
	} else { /*권한이 없을 경우*/
		echo"
			<script>
				window.alert('권한이 없습니다.')
				history.go(-2)
			</script>	
		";
	}
?>