
<?php include("../main/head.php"); ?>

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
	$aa = URLDecode(mb_substr($_SERVER['QUERY_STRING'], 6,200,'utf-8'));
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
		

		<h1>2016시즌 랭킹</h1> <!-- 여기에 메뉴에있는s 팀이름 읽어오기!! -->
		<hr style="border:5px solid #24364a; margin-top:0px"; width=680px></hr>
		<form  name="schedule_form" method="post" action="#"> 
			<table style="margin-top:5px"; rules=rows width=680px>
				<tr align=center>
					<td><h4><b>순위</b></h4></td>
					<td><h4><b>팀명</b></h4></td>
					<td><h4><b>경기횟수</b></h4></td>
					<td><h4><b>승</b></h4></td>
					<td><h4><b>패</b></h4></td>
					<td><h4><b>승률</b></h4></td>
				</tr>
				<?
				   $sql = "select * from rank order by rgresult desc";
      			   $result = mysql_query($sql, $connect);
     			   $row = mysql_num_rows($result);
     			   $count=1;

     			   while($row=mysql_fetch_array($result))
					{
						$num=$row[num];

						echo("<tr align='center'>
							<td>$count</td>
							<td>$row[tname]</td>
							<td>$row[rgame]</td>
							<td>$row[rwin]</td>
							<td>$row[rlose]</td>
							<td>$row[rgresult]</td>				
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
