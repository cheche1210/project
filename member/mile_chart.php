<?
$connect = mysql_connect("localhost","214230077","hyw214230077"); 
mysql_select_db("db214230077",$connect);

$sql = "create table mile_chart("; 
$sql .= "mcnum int(20) auto_increment,";
$sql .= "tname varchar(30) not null,"; /*팀이름*/
$sql .= "id varchar(30) not null,"; /*id*/
$sql .= "mileage int(30) not null,"; /*마일리지*/
$sql .= "mcright int(30) not null,"; /*사용여부*/
$sql .= "mcdate timestamp default current_timestamp,";
$sql .= "primary key(mcnum) );";

$result = mysql_query($sql);  

if($result)
	echo "마일리지 차트 테이블 완성";

else 
	echo"마일리지 차트 테이블 생성 실패. 에러 확인 요망";

mysql_close($connect); 
?>