
<link rel="stylesheet" type="text/css" href="../css/mypage.css" />
<link rel="stylesheet" type="text/css" href="../css/button.css" />

<? if(!isset($_SESSION["id"]) || !isset($_SESSION["pwd"])) { ?>
	<p style="text-align: center;">로그인되지 않았습니다.</p>
	<p style="text-align: center;"><a href="../login/login.php">로그인하기</a></p>
<? } else { ?>
	<!-- ID 잘못 입력 시 -->
	<p style="text-align: center;">환영합니다. <?= $_SESSION["id"] ?>님</p>
	<table id="my">
		<tr id="title">
			<td id="name">이름</td>
			<td id="con"><input type="text" name="name" value="<?= $_SESSION["name"] ?>"></td>
		</tr>
		<tr id="title">
			<td id="name">비밀번호</td>
			<td id="con"><input type="password" name="pwd" value="<?= $_SESSION["pwd"] ?>" ></td>
		</tr>
		<tr id="title">
			<td id="name">이메일</td>
			<td id="con">
				<? $e=explode("@",$_SESSION["email"]) ?>
				<input type="text" name="email1" value="<?= $e[0] ?>">
				@
				<select name="email2">
					<option>naver.com</option>
					<option>daum.net</option>
					<option>gmail.com</option>
					<option>nate.com</option>
					<option>live.com</option>
					<option>korea.com</option>
				</select>
			</td>
		</tr >
		<tr id="title">
			<td id="name">연락처</td>
			<td id="con">
				<select name="phone1">
					<option value='010'>010</option>
					<option value='011'>011</option>
					<option value='016'>016</option>
					<option value='017'>017</option>
					<option value='018'>018</option>
					<option value='019'>019</option>
				</select>
				-<input type="text" name="phone2" size="4" value="<?= substr($_SESSION["phone"],4,4) ?>">
				-<input type="text" name="phone3" size="4" value="<?= substr($_SESSION["phone"],9,4) ?>">
			</td>
		</tr>
		<tr id="name">
			<td id="title">주소</td>
			<td id="con">
				<input type="text" id="sample6_postcode" style="" name="zipcode" placeholder="우편번호">
				<input type="button" onclick="sample6_execDaumPostcode()" value="우편번호 찾기">
				<input type="text" id="sample6_address" style="" name="address1" placeholder="주소">
				<input type="text" id="sample6_address2" style="" name="address2" placeholder="상세주소">
			</td>
			<script src="https://spi.maps.daum.net/imap/map_js_init/postcode.v2.js"></script>
			<script>
				function sample6_execDaumPostcode() {
					new daum.Postcode({
						oncomplete: function(data) {
						// 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.
						// 각 주소의 노출 규칙에 따라 주소를 조합한다.
						// 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
						var fullAddr = ''; // 최종 주소 변수
						var extraAddr = ''; // 조합형 주소 변수
						// 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
						if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
							fullAddr = data.roadAddress;
						} else { // 사용자가 지번 주소를 선택했을 경우(J)
							fullAddr = data.jibunAddress;
						}
						// 사용자가 선택한 주소가 도로명 타입일때 조합한다.
						if(data.userSelectedType === 'R'){
							//법정동명이 있을 경우 추가한다.
							if(data.bname !== ''){
								extraAddr += data.bname;
							}
							// 건물명이 있을 경우 추가한다.
							if(data.buildingName !== ''){
								extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
							}
							// 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
							fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
						}
						// 우편번호와 주소 정보를 해당 필드에 넣는다.
						document.getElementById('sample6_postcode').value = data.zonecode; //5자리 새우편번호 사용
						document.getElementById('sample6_address').value = fullAddr;
						// 커서를 상세주소 필드로 이동한다.
						document.getElementById('sample6_address2').focus();
						}
					}).open();
				}
			</script>
		</tr>
	</table>
	<table>
		<tr>
			<td><button class="myButton"><a href="update.php?id=<? echo $mid; ?>">저장</a></button></td>
			<td><button class="myButton"><a href="../member/mymile_list.php">마일리지</a></button></td>
			<td><button class="myButton"><a href="../cart/cart_list.php">장바구니</a></button></td>
			<td><button class="myButton"><a href="../date/rank_insert.php">랭킹넣기</a></button></td>
			<td><button class="myButton"><a href="../cart/userbuy_list.php">결제내역</a></button></td>
		</tr>
		<tr>
			<td><button class="myButton"><a href="../team/team_updateform.php">팀관리</a></button></td>
			<td><button class="myButton"><a href="basket_play.php">경기하기</a></button></td>
			<td><button class="myButton"><a href="member_delete.php?id=<? echo $mid; ?>">탈퇴하기</a></button></td>
			<td><button class="myButton"><a href="../date/win_lose.php">승패여부</a></button></td>
			<td><button class="myButton"><a href="../date/play_schedule.php?tname=<?= $_SESSION["tname"] ?>">경기신청일정</a></button></td>
			<td><button class="myButton"><a href="../date/allow_schedule.php?tname=<?= $_SESSION["tname"] ?>">경기여부결정</a></button></td>
		</tr>
	</table>
		
	
<? } ?>
	
