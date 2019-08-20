<?php
	session_start();

	$aa = substr($_SERVER['QUERY_STRING'],3,20);
	
	include("../main/head.php"); 
	
	$connect = mysql_connect("localhost","214230077","hyw214230077"); 
	mysql_select_db("db214230077",$connect);

	$rpwd = $_SESSION['rpwd']

	if($_SESSION['pwd'] != $rpwd) {
		$sql = "update member set pwd='$rpwd' where id='$aa'";
		$result = mysql_query($sql);
	}

	// $phone = $phone1."-".$phone2."-".$phone3;
	// $email = $email1."@".$email2;

	// $connect = mysql_connect("localhost","214230077","hyw214230077"); 
	// mysql_select_db("db214230077",$connect);

	// $sql = "update member set pwd='$pwd', name='$name', phone='$phone', email='$email' where id='{$_POST['id']}' ";
	// $result = mysql_query($sql);  

	if($result)
		echo "정보수정 완료";

	else 
		echo"에러 확인 요망";

	mysql_close($connect); 
	
	include("../main/footer.php");
?>

<!-- <?php
		$rpwd = $_SESSION['rpwd']
		$remail1 = $_SESSION['email1']
		$_SESSION['email2']=$email2
		$_SESSION['phone1']=$phone1
		$_SESSION['phone2']=$phone2
		$_SESSION['phone3']=$phone3
	?> -->