<?php include("../main/head.php"); ?>

<?

$phone = $phone1."-".$phone2."-".$phone3;
$email = $email1."@".$email2;

$connect = mysql_connect("localhost","214230077","hyw214230077"); 
mysql_select_db("db214230077",$connect);

$sql = "update into member(id, pwd, name, phone, email) ";
$sql .= "values('$id', '$pwd', '$name', '$phone', '$email')";


$result = mysql_query($sql);  

if($result)
	echo "정보수정 완료";

else 
	echo"에러 확인 요망";

mysql_close($connect); 
?>
	
<?php include("../main/footer.php"); ?>