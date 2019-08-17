<?php include("../main/head.php"); ?>

<?
session_start();


$aa= substr($_SERVER['QUERY_STRING'],3,20) ;

$connect = mysql_connect("localhost","214230077","hyw214230077"); 
mysql_select_db("db214230077",$connect);

	$phone = $phone1."-".$phone2."-".$phone3;
	$email = $email1."@".$email2;
	$address=$address1." ".$address2;

$sql="update member set pwd='$pwd', name='$name',phone='$phone',email='$email',address=$'address' where id=$aa";


$result = mysql_query($sql);  

if($result) {
	echo  "
		<script>
			window.alert('정보가 수정되었습니다.')
			history.go(-1)
		</script>
	";
}
	
else 
	echo"에러 확인 요망";

mysql_close($connect); 
?>
	
<?php include("../main/footer.php"); ?>