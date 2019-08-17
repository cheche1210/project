<?php include("../main/head.php"); 

session_start();

  if(!isset($id)) {
      echo "<script> window.alert('로그인을 하십시오.')
            location.href='../login/login.php'
            </script>";
          exit;
      }
   if($_SESSION['mright']==0){
      echo "<script> window.alert('권한이 없습니다.')
            location.href='../main/main.php'
            </script>";
          exit;
      }   


?>
<link rel="stylesheet" href="../css/mileage.css">

           <br><br><br>
			<header class="sectionTitle">
				<h3>마일리지 충전</h3>
			</header>



        <div id="m">
		
			<ul class="qv_buy">
				<li class="first">
					<dl>
						<dt><img src="../img/mileage/8000mileage.jpg" width= 180 height=100 alt="마일리지" /></dt>
						<dd>
							<a href="../cart/mileage_buy.php?mileage=8000"><img src="http://www.afreecatv.com/images/item/btn_buy_qv.gif" alt="구매하기" /></a>
						</dd>
					</dl>					
				</li>
				<li>
					<dl>
						<dt><img src="../img/mileage/10000mileage.jpg"  width= 180 height=100 alt="마일리지" /></dt>
						<dd>
							<a href="../cart/mileage_buy.php?mileage=10000"><img src="http://www.afreecatv.com/images/item/btn_buy_qv.gif" alt="구매하기" /></a>
						</dd>
					</dl>					
				</li>
				<li>
					<dl>
						<dt class="sp"><img src="../img/mileage/15000mileage.jpg"  width= 180 height=100 alt="마일리지" /></dt>
						<dd class="sp">
							<a href="../cart/mileage_buy.php?mileage=15000"><img src="http://www.afreecatv.com/images/item/btn_buy_qv.gif" alt="구매하기" /></a>
						</dd>
					</dl>					
				</li>
				<li>
					<dl>
						<dt><img src="../img/mileage/20000mileage.jpg"  width= 180 height=100 alt="마일리지" /></dt>
						<dd>
							<a href="../cart/mileage_buy.php?mileage=20000""><img src="http://www.afreecatv.com/images/item/btn_buy_qv.gif" alt="구매하기" /></a>
						</dd>
					</dl>					
				</li>
			</ul>

			<br><br><br><br><br><br>

				

</div>
<?php include("../main/footer.php"); ?>