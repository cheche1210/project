<?php
	include("../main/head.php");
	
	session_start();
	$userid=$_SESSION['id'];
?>
<script type="text/javascript" src="../js/map.js"></script>
<link rel="stylesheet" type="text/css" href="../css/mainMap.css" />
<link rel="stylesheet" type="text/css" href="../css/unicontent.css" />
<link rel="stylesheet" type="text/css" href="../css/main_news.css" />
<link rel="stylesheet" type="text/css" href="../css/main_ex2.css" />
<link rel="stylesheet" type="text/css" href="../css/banner.css" />
<link rel="stylesheet" type="text/css" href="../css/mainLog.css" />
<body>


	<?php 
		if(!$userid){
			include("../main/mainLogin.php");	
		}else{
			include("../main/mainLogin_ok.php");
		}
		include("../main/banner.php");
	?>

	<!-- 대한민국 지도 - 9도 -->
	<div id="map">
	<div id="DB_etc9">
		<div id="DB_mapBg"><img src="../img/map_trans.gif" width="100%" height="100%" alt="" border="0" usemap="#DB_mapArea"/>
			<map name="DB_mapArea" id="DB_mapArea">
				<area class="gangwon-do" shape="poly" coords="47,8,55,11,67,10,77,8,83,4,91,16,104,33,114,47,114,55,97,58,85,58,75,53,64,57,67,43,58,36,58,23" href="../team/gangwon.php" onfocus="this.blur()"/>
				
				<!-- 경기도 -->
				<area class="gyeonggi-do" shape="poly" coords="25,37,27,27,35,20,33,16,48,10,56,22,58,36,65,44,62,57,54,66,33,65,24,54,31,51,31,40,40,45,46,41,44,33,36,32,31,36,39,32,45,37,43,45,37,44,30,42,18,28,11,34,17,44,6,52,7,57,17,60,25,52,29,45,28,38,23,30" href="../team/gyeonggi.php"  onfocus="this.blur()"/>
				
				<!-- 경상남도 -->
				<area class="gyeongsangnam-do" shape="poly" coords="68,110,60,117,60,127,63,140,67,159,80,152,95,158,99,149,89,146,92,138,102,135,111,128,102,117,80,117,111,128,95,137,90,147,98,148,113,140,116,132,104,120,112,116,122,117,118,131" href="../team/gyeongsangnam.php"  onfocus="this.blur()"/>

				<!-- 경상북도 -->
				<area class="gyeongsangbuk-do" shape="poly" coords="90,60,86,66,75,69,68,78,69,89,74,95,68,104,72,111,80,116,86,102,95,101,98,108,93,116,99,119,109,115,120,116,127,98,116,98,115,94,121,83,116,56,129,44,139,48,137,34,128,39,125,45,109,58,82,114,85,103,94,101,99,111,93,117" href="../team/gyeongsangbuk.php"  onfocus="this.blur()"/>
				
				<!-- 전라남도 -->
				<area class="jeollanam-do" shape="poly" coords="20,128,13,140,7,139,4,152,7,168,3,177,13,180,20,173,42,176,45,168,56,170,58,164,65,162,65,150,60,132,36,129,25,136" href="../team/jeollanam.php"  onfocus="this.blur()"/>

				<!-- 전라북도 -->
				<area class="jeollabuk-do" shape="poly" coords="25,101,25,116,20,128,25,133,36,128,47,133,60,132,59,120,71,106,65,100,58,96,47,101,42,100,33,104" href="../team/jeollabuk.php"  onfocus="this.blur()"/>
				
				<!-- 제주도 -->
				<area class="jeju-do" shape="poly" coords="26,182,12,188,12,197,30,196,39,189,34,181" href="../team/jeju.php"  onfocus="this.blur()"/>
				
				<!-- 충청남도 -->
				<area class="chungchengnam-do" shape="poly" coords="29,63,22,62,11,69,15,80,23,93,25,100,34,102,42,97,46,101,57,102,56,95,47,94,44,85,43,74,50,72,54,68,48,72,41,78,44,87,54,85,54,74,46,89,52,97,57,97,60,91,56,85,50,85" href="../team/chungchengnam.php"  onfocus="this.blur()"/>

				<!-- 충청북도 -->
				<area class="chungchengbuk-do" shape="poly" coords="62,56,51,69,54,83,61,94,64,103,75,98,69,84,72,71,86,65,88,60,78,54" href="../team/chungchengbuk.php"  onfocus="this.blur()"/>
			</map>	
		</div>
	</div>
</div>
<?
	   $connect = mysql_connect("localhost","214230077","hyw214230077"); 
       mysql_select_db("db214230077",$connect);

	   $sql3 = "select * from board";
       $result3 = mysql_query($sql3, $connect);
       $rs3 = mysql_num_rows($result3);
?>

<br><br>
<div id="notice">
	<h3>NOTICE</h3>
	<table width="100%" border="0">
	<tr>
		<td height="40px;"><b>제목</b></td>
		<td  height="40px;"><b>글쓴이</b></td>
	</tr>

	<tr >
		<hr>
	</tr>
		<tr>
			<?
				$line=1;
				for($i=1; $i<=4; $i++){
					$row3=mysql_fetch_array($result3);
			?>
			
				
						
				<td  height="30px;" style="color:rgb(149,146,154); font-size: 15px; "><a href="../board/board_view.php?ibum=<?echo $row3[bnum]?>"><?=$row3[btitle]?></a></td>
				<td height="30px;" style="color:rgb(149,146,154); font-size: 15px; "><a href="../board/board_view.php?ibum=<?echo $row3[bnum]?>"><?=$row3[id]?></a></td>

				
			
			
			<?
				if($i % 1 == 0){
					echo "</tr>";
					$line++;
				}
			}
			?>
			

	</table>
</div>		
<?
	 
	   
	   $sql4 = "select * from rank order by rgresult desc";
       $result4 = mysql_query($sql4, $connect);
       $rs4 = mysql_num_rows($result4);
       


?>

		<div id="rank">
			<table  border="0">
			<tr>
				<td><h3>시즌</h3></td>
				<td><h3>랭킹</h3></td>
				<td><h3>순위</h3></td>
				<td><h3></h3></td>
			</tr>

		<tr>
			<?
				$line=1;
				$count=1;
				for($i=1; $i<=5; $i++){
					$row4=mysql_fetch_array($result4);

					$sql5 = "select * from team where tname= '$row4[tname]'";
      				$result5 = mysql_query($sql5, $connect);
       				$row5=mysql_fetch_array($result5);
			?>
			
				
				<td><? echo $count ?> </td>	
				<td><img src='../img/team/<?="$row5[timg]"?>' height=25px width=25px></td>		
				<td  height="30px;" style="color:rgb(149,146,154); font-size: 15px;"><?=$row4[tname]?></td>
				<td  height="30px;" style="color:rgb(149,146,154); font-size: 12px;"><?=$row4[rgresult]?></td>
			
			<?
				if($i % 1 == 0){
					echo "</tr>";
					$line++;
					$count++;
				}
			}
			?>

	</table>
		</div>

	
	

	<?
		$sql2 = "select * from item where ikind=2";
		$result2 = mysql_query($sql2, $connect);
		$rs2 = mysql_num_rows($result2);
	?>
	
	
<div id="item" float="left">	
	<h3>ITEM</h3>
	<table border="0">
		<tr>
			<?
	             
				$line=1;
				for($i=1; $i<=8; $i++){
					$row2=mysql_fetch_array($result2);
			?>
			<td>
			
				<a href="../uniform/itemcontent.php?inum=<?echo $row2[inum]?>">
					<table id="iitem" cellpadding=0 cellspacing=0>
						
						<tr>
							<td align=center class ='pronews3'>
								<img src='../img/item/<? echo $row2[iimg]?>' border='0' width='130px' heigth='200px'>
							</td>
						</tr>
						<tr><td align=left class='pronews1' style="color:rgb(149,146,154); font-size: 12px;"><?=$row2['iname']?></td></tr>
					    <tr><td align=left class='pronews2' style=" font-size: 15px;" ><?=$row2['price']?></td>
						</tr>
						
						<br   />
					</table>
					
					<br/><br />
				</a>
			</td>
			
			<?
					if($i % 4 == 0){
						echo "</tr>";
						$line++;
					}
				}
			?>
		</tr>
		</table>
</div>

		<?
	   $connect = mysql_connect("localhost","214230077","hyw214230077"); 
       mysql_select_db("db214230077",$connect);
	   
	   $sql = "select * from news";
       $result = mysql_query($sql, $connect);
       $rs = mysql_num_rows($result);
	?>

<div id="news" float="right">
	<h3>NEWS</h3>
	<br><br>
	<table border="0">
		<tr>
			<?
				$line=1;
				for($i=1; $i<=5; $i++){
					$row=mysql_fetch_array($result);
			?>
			<td>
				<a href="<?=$row[nlink]?>" >
					<table cellpadding=0 cellspacing=0>
						<tr>
							<td align=center class ='pronews3'>
								
							</td>
						</tr>
						<tr>
							<td align=left class='pronews1' style="color:rgb(149,146,154); font-size: 12px;"><?=$row[nname1]?></td>
						</tr>
						<tr>
							<td align=left class='pronews2' style=" font-size: 15px;" ><?=$row[nname2]?></td>
						</tr>
						
					
					</table>
					<p style="color:red;font-size:10px;">2016.05.25</p>
					<br/>
				</a>
			</td>
			
			<?
				if($i % 1 == 0){
					echo "</tr>";
					$line++;
				}
			}
			?>
			</tr>


	</table>
</div>	
	<script>
		$('#DB_etc9').DB_map({
			key:'e24102',         //라이센스키
			fixMap:'',             //맵인식(area 의 클래스이름을 적용 ex: fixMap:'gangwon-do')
			delayTime:500          //마우스아웃시 클릭값으로 되돌리는 시간
		});
	</script>
</body>

<?php include("../main/footer.php"); ?>