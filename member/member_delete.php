<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<?
$aa = substr($_SERVER['QUERY_STRING'],3,20) ;

$connect = mysql_connect("localhost","214230077","hyw214230077"); 
$dbconn = mysql_select_db("db214230077",$connect);

$sql="delete from member where id=$aa";
mysql_query($sql,$connect);

mysql_close($connect);

Header("Location:../main/main.php");

?>