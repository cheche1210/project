
<?php include("../main/head.php"); 

session_start();

  if(!isset($id)) {
      echo "<script> window.alert('로그인을 하십시오.')
            location.href='../login/login.php'
            </script>";
          exit;
      }


?>

<head>
	<link  href="../css/rank.css" rel="stylesheet">
	<style type="text/css">
		a {
			text-decoration:none;    
			color:#24364a;    
		}
		button {
			float: right;
		}
	</style>
</head>
<?
	$aa = substr($_SERVER['QUERY_STRING'], 3);
	$connect = mysql_connect("localhost","214230077","hyw214230077"); 
    mysql_select_db("db214230077",$connect);

  //    $sql = "select * from team where tnum=$aa ";
	 // $result = mysql_query($sql, $connect);
 	//  $row = mysql_fetch_array($result);
	
?>
<body>
	<center>
	<br><br>
	<div class="teaminfo">
	<div class="leftmenu1">
		
	</div>
	<div class="schedule">
		<br><br>
		

		<h1>상대팀 추천</h1> <!-- 여기에 메뉴에있는s 팀이름 읽어오기!! -->
		<hr style="border:5px solid #24364a; margin-top:0px"; width=680px></hr>
		<form  name="schedule_form" method="post" action="#"> 
			<table style="margin-top:5px"; rules=rows width=680px>
				<tr align=center>
					<td><h4><b>팀명</b></h4></td>
					<td><h4><b>승률</b></h4></td>
					<td><h4><b>경기신청</b></h4></td>
				</tr>
			<?
				   $sql = "select * from rank where rgresult = 0.5 order by rgresult desc";
      			   $result = mysql_query($sql, $connect);
     			   $row = mysql_num_rows($result);
     			   $count=1;

     			   while($row=mysql_fetch_array($result))
					{
						$num=$row[num];

						echo("<tr align='center'>
							<td>$row[tname]</td>
							<td>$row[rgresult]</td>		
							<td><a href='../member/mileage_ok.php?mileage=5000'>신청하기</a></td>		
							</tr>
							");

						$count++;
					}
				?>
				
				
			</table>

			<br><br><br><br><br><br>

		<h1>상위팀 추천</h1> <!-- 여기에 메뉴에있는s 팀이름 읽어오기!! -->
		<hr style="border:5px solid #24364a; margin-top:0px"; width=680px></hr> 
			<table style="margin-top:5px"; rules=rows width=680px>
				<tr align=center>
					<td><h4><b>팀명</b></h4></td>
					<td><h4><b>승률</b></h4></td>
					<td><h4><b>경기신청</b></h4></td>
				</tr>
			<?
				   $sql2 = "select * from rank where rgresult >= 0.75 and rwin >= 4 order by rgresult desc";
      			   $result2 = mysql_query($sql2, $connect);
     			   $row2 = mysql_num_rows($result2);
     			   $count=1;

     			   	while($row2=mysql_fetch_array($result2))
					{
						$num=$row2[num];

						echo("<tr align='center'>
							<td>$row2[tname]</td>
							<td>$row2[rgresult]</td>		
							<td><a href='../member/mileage_ok2.php?mileage=10000'>신청하기</a></td>		
							</tr>
							");

						$count++;
					}
     			   

     			   
				?>
				
				
			</table>
		</form>
	</div>
	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
	</center>
</body>
<?php include("../main/footer.php"); ?>
