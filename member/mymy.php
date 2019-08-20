<?
	session_start();
	
	include("../main/head.php");

	if(!$_SESSION['id']) {
		echo "
			<script> window.alert('로그인을 하십시오.')
				location.href='../login/login.php'
			</script>";
		exit;
	}

	$mright = $_SESSION['mright'];

	if ($mright==1) {
		include"../member/managerpage.php";
	} else {
		include"../member/mypage.php";
	}

	include("../main/footer.php");
?>