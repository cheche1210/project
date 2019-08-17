<?
session_start();

$aa = substr($_SERVER['QUERY_STRING'],8);

$connect = mysql_connect("localhost","214230077","hyw214230077"); 
mysql_select_db("db214230077",$connect);

$sql = "select * from team where id='{$_SESSION['id']}'";
$result = mysql_query($sql);
$row=mysql_fetch_array($result);
$mile=$row['mileage'];

  if($mile==0) {
      echo "

      <script> window.alert('마일리지가 부족합니다.')

          location.href='../member/mileage.php'
          </script>
          ";
    
       }else {
       	echo "<script> window.alert('10000마일리지가 차감됩니다.')
          window.alert('신청이 완료되었습니다.')
        location.href='../member/mileage_process.php?mileage=$aa'

          </script>";
       }
  ?>