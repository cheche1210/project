<?
$scale=10;
$connect = mysql_connect("localhost","214230077","hyw214230077");  //db연걸
mysql_select_db("db214230077",$connect); //db선택

?>
<?php include("../main/admin_header.php"); ?>
<link rel="stylesheet" href="../css/list.css">
<p>
	<h3>회원 출력 하기</h3>

	
</p>	

<!--제목표시 시작-->
<table id="table" width="800" collpadding="5">
<tr id="title" align="center" >
	<td id="name">일련번호</td>
	<td id="name">아이디</td>
	<td id="name">비밀번호</td>
	<td id="name">이름</td>
	<td id="name">연락처</td>
	<td id="name">이메일</td>
	<td id="name">삭제</td>
</tr>
<!--제목표시 끝-->

<?
//select 명령 저장

$sql="select * from member";
$result=mysql_query($sql);
$total=mysql_num_rows($result);

if($total % $scale==0)
	$tpage=floor($total/$scale);
else
	$tpage=floor($total/$scale) + 1;
if(!$page)
	$page=1;

	$start = ($page -1) *$scale;
	$number = $start +1;

	for($i=$start; $i<$start+$scale && $i<$total; $i++){

 mysql_data_seek($result,$i);

//데이타베이스 데이터 출력시작
$row=mysql_fetch_array($result);

	$num=$row[num];

	echo("<tr class='tt' align='center'>
		<td>$number</td>
		<td>$row[id]</td>
		<td>$row[pwd]</td>
		<td>$row[name]</td>
		<td>$row[phone]</td>
		<td>$row[email]</td>
		<td><a href='member_delete.php?id=$row[id]'>[삭제]</a></td>
		");


	$number++;
	
}
//출력완료




mysql_close();
?>
<tr> 
          <td colspan="10" height=20></td>
        </tr>

        <tr height=25>
          <td colspan=5 align=center>
<?
   // 게시판 목록 하단에 페이지 링크 번호 출력
   for ($i=1; $i<=$tpage; $i++)
   {
       if ($page == $i)     
       {
          echo "<font color='4C5317'><b>[$i]</b></font>";
       }
       else
       { 
          echo "<a href='member_list.php?page=$i'>
               <font color='4C5317'>[$i]</font></a>";
       }      
   }
?>
          </td>
        </tr>
        </table>
        <table>
        <tr id="member" align="left" >
		<td id="name" width="710"><b>총 회원수(<?=number_format($total)?>명)</b></td>
</tr>
</table>

<?php include("../main/admin_footer.php"); ?>
